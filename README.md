# Miaou Calculator

Basic calculator with Docker-compose, Nginx, Symfony and React.js

Sourced from https://minasami.com/2021/06/23/part-1-setup-reactjs-symfony-app-with-hotloading.html

## Requirements

- Docker-compose 3.7

## Installation

1. Copy .env.sample to .env
```shell
cp .env.sample .env
```
And edit it to fit your needs

2. Wake up the stack helping docker-compose
```shell
docker-compose up -d
```

3. Go to `http://localhost/9090/api/v1/healthcheck` to validate JSON response
```json
{
  "status":418,
  "message":"I'm a teapot"
}
```

## Shutdown

Shutdown the stack helping docker-compose
```shell
docker-compose down
```


## Contributors

- Pierrot Evrard <pierrotevrard@gmail.com>
- Mina Sami <mina.nsami@gmail.com>