# tus-php-server
tus server for upload using cache from redis store

## tus-server
install
```
$ docker-compose build
$ docker-compose up -d
```

## tus-client
note: for test upload
### using local
copy tus client from [source](https://github.com/ankitpokhrel/tus-php/blob/main/example/uppy/index.html), change endpoint in line 155 `http://localhost:8081/files/`
after that, run in another server (for example)
```
$ php -S 0.0.0.0:8080
```
### using docker
open guide in <a href="/client">client</a>

source: https://github.com/ankitpokhrel/tus-php
