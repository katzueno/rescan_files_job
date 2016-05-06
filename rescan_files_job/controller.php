<?php
namespace Concrete\Package\RescanFilesJob;

use Concrete\Core\Package\Package;
use Core;
use Job;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{
    protected $pkgHandle = "rescan_files_job";
    protected $appVersionRequired = '5.7.4.2';
    protected $pkgVersion = '0.1.2';
    protected $pkgAutoloaderMapCoreExtensions = true;
    
    public function getPackageDescription()
    {
        return t('Rescan entire files in the file manager');
    }

    public function getPackageName()
    {
        return t("Rescan All Files");
    }

    public function install()
    {
        $pkg = parent::install();
        $this->installJobs($pkg);
    }
    public function upgrade()
    {
        $pkg = parent::upgrade();
        $this->installJobs($pkg);
    }
    
    protected function installJobs($pkg)
    {
        $jobHandle = 'rescan_all_files';
        $job = Job::getByHandle($jobHandle);
        if (!is_object($job)) {
            Job::installByPackage($jobHandle, $pkg);
        }
        
    }
}