# Rescan All Files, a concrete5 tiny cron program

This is a very simple concrete5 Job package to rescan the entire files in the file manager

When you change the setting of the thumbnail type or create a new one, you have to rescan the entire files in the file manager to regenrate the image thumbnail. It's really troublesome to go through the file manager every step. Therefore, I've created this super simple automated job for concrete5 to rescan all files in filem manager to regenerate the thumbnails.

However, if the image(s) are too large, the server may run out of memory. Please be careful.

## How to Install

1. Download zip files from the GitHub, or the check it out from Marketplace. (in the future).
    1. GitHub or download zip file from the marketplace
        1. Download & unzip the zip file
        2. Make sure that folder name is *rescan_files_job*
        3. Upload the folder under the packages folder of concrete5.
        4. Log on to concrete5 site as admin who can install packages.
    2. From Marketplace
        1. Log on to concrete5 site as admin who can install packages
        2. Connect your site to the marketplace if you haven't done so by going to *Dashboard* - *Extend concrete5* menu.
        3. Visit concrete5 Marketplace and check out this add-on and assign your concrete5 site.
2. Go to *Dashboard*, and then *Extend concrete5*
3. Find **Rescan All Files** package in the list, and install.

## How to Run

1. Go to *Dashboard* - *System & Settings* - *Optimization* - *Automated Jobs*
2. Find a job named, **"Rescan All Files"** and click **"Run"**.
3. Now sit back and relax to finish rescanning all files.

## GitHub & Open Source

This project is on GitHub. This package is released under MIT License.
https://github.com/katzueno/rescan_files_job/


## Credit

- @katzueno (concrete5, japan, Inc.)

concrete5 Japan, Inc. is helping various company's concrete5 project. Please feel free to contact us at any time for your project needs. We can work internationally.

http://concrete5.co.jp/


# Rescan All Files 日本語解説

これは、 concrete5 のファイルマネージャーのサムネイルを一括で再生成するためのジョブです。

concrete5 のサムネイルタイプを追加したり、修正したりすると、サムネイルをすべて再生成する必要がありますが、ファイルマネージャーからちまちま実行するのは時間がかかるので、ジョブとして一括で実行できるよう、スクリプトを作成しました。

サーバーによっては処理しきれず、メモリーオーバーになる可能性がございます。


## インストール方法

1. GitHub やマーケットプレイから ZIP ファイルをダウンロードするか、マーケットプレイスからインストール
    1. GitHub か concrete5 マーケットプレイスからZIPファイルをダウンロードする方法
        1. ZIP ファイルを GitHub か、concrete5 Marketplace からダウンロードし解凍する。
        2. フォルダ名が「**rescan_files_job**」にきちんとなっているか確認。
        3. そのフォルダごと、concrete5 の packages フォルダの中にアップロード。
        4. パッケージをインストールできる権限を持ったユーザーで concrete5 にログイン。
    2. マーケットプレイスから
        1. 自分のサイトにパッケージがインストールできるユーザーとしてログイン。
        2. まだ Marketplace に接続していなければ、「*管理画面*」-「*concrete5 を拡張*」メニューからサイトを concrete5 マーケットプレイスに接続。
        3. concrete5 のマーケットプレイスページに訪問して、このアドオンをチェックアウトし、登録したサイトにアサイン (assign) する。
2. 「*管理画面*」に行き「*concrete5 を拡張*」メニューをクリック。
3. 「**再スキャン (Rescan All Files)**」パッケージを探して、インストール。

## 使い方

1.[管理画面] - [システムと設定] - [最適化] - [自動実行ジョブ] ページヘ
2. リストの中から「**Rescan All Files**」を探して、「**実行**」ボタンを押す。
3. しばらく待って、サムネイル再生成完了を待ちます。

## GitHub & オープンソース

このパッケージは GitHub でも公開しています。ライセンスは MIT です。

## クレジット

- @katzueno (concrete5, japan, Inc.)

このコーディングガイドラインは、コンクリートアイブジャパン株式会社が、自身が行っている受託案件のために、パートナー企業にお見せしているコーディングガイドラインを一般公開しているものです。コンクリートファイブジャパン株式会社では、企業・団体様の concrete5 サイト制作や制作会社様のプロジェクトのサポートを行っています。
http://concrete5.co.jp/
