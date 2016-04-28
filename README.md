# Rescan All Files, a concrete5 tiny cron program

This is a very simple concrete5 Job package to rescan the entire files in the file manager

When you change the setting of the thumbnail type or create a new one, you have to rescan the entire files in the file manager to regenrate the image thumbnail. It's really troublesome to go through the file manager every step. Therefore, I've created this super simple automated job for concrete5 to rescan all files in filem manager to regenerate the thumbnails. However, if the image(s) are too large, the server may run out of memory. Please be careful.

## Instrction

1. Download zip files from this GitHub, or the Marketplace (in the future).
2. Unzip the file.
3. make sure that folder name is "rescan_files_job"
4. Upload the folder under the packages folder of concrete5.
5. Log on to concrete5 site as admin who can install packages.
6. Go to Dashboard, and then Extend concrete5
7. Find "Rescan All Files" package in the list, and install.
8. Go to Dashboard - System & Settings - Optimization - Automated Jobs
9. Find a job named, "Rescan All Files" and click "Run".
10. Now sit back and relax to finish rescanning all files.

## Credit

@katzueno
concrete5, japan, Inc.

concrete5 Japan, Inc. is helping various company's concrete5 project. Please feel free to contact us at any time for your project needs. We can work internationally.

http://concrete5.co.jp/

# スキャンファイル

これは、 concrete5 のファイルマネージャーのサムネイルを一括で再生成するためのジョブです。

concrete5 のサムネイルタイプを追加したり、修正したりすると、サムネイルをすべて再生成する必要がありますが、ファイルマネーからちまちま実行するのは時間が書かkるので、ジョブとして一括で実行できるよう、スクリプトを作成しました。ただし、サーバーによっては処理しきれず、メモリーオーバーになる可能性がございます。

## 手順

1. GitHub や マーケットプレイスから ZIP ファイルをダウンロード
2. ZIP ファイルを解答。
3. フォルダ名が「rescan_files_job」にきちんとなっているか確認。
4. concrete5 の「packages」フォルダ配下にアップロード
5. concrete5 にパッケージをインストールできる権限を持った管理者がログイン。
6. 管理画面に行き「concrete5 を拡張」メニューをクリック。
7. 「再スキャン (Rescan All Files)」パッケージを探してもらい、インストール。
8.[管理画面] - システムと設定 - 最適化 - 自動実行ジョブページヘ
9. リストの中から「Rescan All Files」を探して、「実行」ボタンを押す。
10. しばらく待って、サムネイル再生成完了を待ちます。

## クレジット

@katzueno
concrete5, japan, Inc.

このコーディングガイドラインは、コンクリートアイブジャパン株式会社が、自身が行っている受託案件のために、パートナー企業にお見せしているコーディングガイドラインを一般公開しているものです。コンクリートファイブジャパン株式会社では、企業・団体様の concrete5 サイト制作や制作会社様のプロジェクトのサポートを行っています。
http://concrete5.co.jp/
