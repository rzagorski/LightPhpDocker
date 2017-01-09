# LightPhpDocker
Basic Docker configuration for PHP dev-environment.

**Images**
- nginx - based on alpine:latest (based on config: matriphe/docker-alpine-nginx)
- phpfpm - based on alpine:edge + PHP-FPM 7.0.14
- mysql - mysql:5.7
- linux - ubuntu + composer and tools necessary for developer
- appdata - busybox

## How to start
`docker-compose up -d`

## Test URL
`http://localhost:8080/index.php`

## How to stop
`docker-compose down`

## TODO
- change alpine:edge -> alpine:latest
- improve linux tools for dev