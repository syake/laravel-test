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

### コンテナ停止

```
$ docker-compose down
```
