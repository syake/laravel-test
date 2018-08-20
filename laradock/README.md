## 初期設定

### .envファイル作成

Mac
```
$ mv env-example .env
$ php artisan key:generate
```

Windows
```
$ copy env-example .env
$ php artisan key:generate
```

### DB設定

MySQLにログイン
```
$ docker-compose up -d mysql
$ docker-compose exec mysql bash
root@3ae2e68976c6:/# mysql -u root -p
password: root
```

データベース生成
```
mysql> create database laravel_test;
```

### マイグレーション

```
$ docker-compose up -d nginx mysql workspace
$ docker-compose exec workspace bash
$ php artisan migrate
```

Seederの実行
```
$ php artisan db:seed
```

## 開発

### コンテナ起動

```
$ docker-compose up -d nginx mysql phpmyadmin redis workspace
```

**www**  
http://localhost:3000

**phpMyAdmin**  
http://localhost:8080  
サーバ：mysql  
ユーザ名：root  
パスワード：root

### コンテナ停止

```
$ docker-compose down
```
