# アプリケーション名
お問い合わせフォーム

## 環境構築
### Dockerビルド</br>
  1．個人でディレクトリ・ファイル・ヴァージョン情報を記述</br>
  2．docker-compose up-d --build</br>

### Laravel環境構築</br>
  1.docker-compose exec php bash</br>
  2.composer create-project "laravel/laravel=8.*" . --prefer-dist</br>
  3.php artisan migrate</br>
  4.php artisan db:seed

## 使用技術(実行環境)
  ・php:7.4.9-fpm</br>
  ・mysql:8.0.26</br>
  ・nginx:1.21.1

## ER図
![alt text](image-1.png)

## URL
  ・開発環境：http://localhost/</br>
  ・phpMyAdmin：http://localhost:8080/
