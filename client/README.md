# tus-php-client
tus client example for upload

## client
copy tus client from example in [source](https://github.com/ankitpokhrel/tus-php/tree/main/example)

## install
```
$ docker build -t tus-php-client .
$ docker run -it -p 8080:80 --env TUS_CACHE_HOME=/var/www/cache --network tus-php-server_default --name tus-php-client -d tus-php-client
```
