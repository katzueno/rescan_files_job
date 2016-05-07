<?php
namespace Concrete\Package\RescanFilesJob\Job;

use QueueableJob;
use \ZendQueue\Queue as ZendQueue;
use \ZendQueue\Message as ZendQueueMessage;
use File;
use FileList;

class RescanAllFiles extends QueueableJob
{
	public $jSupportsQueue = true;
	
	protected $files;

    public function getJobName()
    {
        return t("Rescan All Files");
    }

    public function getJobDescription()
    {
        return t("Rescan all files in the file manager and regenerate thumbnails.");
    }

    public function start(ZendQueue $q)
    {
    	$list = new FileList();
    	$files = $list->executeGetResults();

    	foreach ($files as $f)
    	{
    		$q->send($f['fID']);
    	}
    }

    public function processQueueItem(ZendQueueMessage $msg)
    {
    	try
    	{
    		$f = File::getbyID($msg->body);
    		if (is_object($f))
    		{
	        	$fv = $f->getApprovedVersion();
	        	if (is_object($fv))
	        	{
	        		$fv->refreshAttributes();
	        	}
    		}
        } catch (\Concrete\Flysystem\FileNotFoundException $e)
        {
            $errorMessage = t('File %s could not be found.', $fv->getFilename()) . '<br/>';
            $e->add($errorMessage);
        }
    }


    public function finish(ZendQueue $q)
    {
    	return t('All files have been processed.');
    }
}