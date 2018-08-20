## 初期設定

### インストール

```
$ composer update
```


### .envファイル作成

Mac
```
$ mv env-example .env
```

Windows
```
$ copy env-example .env
```

## 運用

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
