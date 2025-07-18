# vocal-school　ホームページ
## プロジェクトの概要
vocal-scoolの集客のためのホームページを作成

## Dockerビルド
1. リポジトリの複製
   ```
   git clone git@github.com:NaoyaNoro/vocal-school.git
   ```
3. DockerDesktopアプリを立ち上げる
4. dockerをビルドする<br>
   ```
   docker-compose up -d --build
   ```
>3を実行するときに，`no matching manifest for linux/arm64/v8 in the manifest list entries` というようなエラーが出ることがあります。この場合，docker-compose.ymlのmysqlサービスとphp myadminのサービスの箇所に `platform: linux/amd64` というような表記を追加してください。

## Laravel環境構築
1. PHPコンテナ内にログインする
   ```
   docker-compose exec php bash
   ```
2. composerコマンドを使って必要なコマンドのインストール
   ```
   composer install
   ``` 
4. .env.exampleファイルから.envを作成
   ```
   cp .env.example .env
   ```
6. 環境変数を変更<br>
   ```
   DB_HOST=mysql
   DB_PORT=3306 
   DB_DATABASE=laravel_db
   DB_USERNAME=laravel_user
   DB_PASSWORD=laravel_pass
   ```
7. アプリケーションキーの作成
   ```
   php artisan key:generate
   ```
8. キャッシュのクリア
   ```
   php artisan config:clear
   php artisan cache:clear
   php artisan config:cache
   ```
9. 保存した画像が正しく表示できない場合は，strageに保存したデータを再登録する<br>
    ```
    php artisan storage:link
    ```
