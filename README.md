# Miaou Calculator

Basic calculator with Docker-compose, Nginx, Symfony and React.js

Sourced from https://minasami.com/2021/06/23/part-1-setup-reactjs-symfony-app-with-hotloading.html

## Requirements

- Docker-compose 3.7

## Installation

1. Clone Git project
```shell
git clone https://github.com/lxxps/miaou-calculator.git <path_to_project>
cd <path_to_project>
```

2. Copy .env.sample to .env
```shell
cp .env.sample .env
```
And edit it to fit your needs

3. Wake up the stack helping docker-compose
```shell
docker-compose up -d
```

4. Go to `http://localhost:9090/api/v1/healthcheck` to validate JSON response
```json
{
  "status":418,
  "message":"I'm a teapot",
  "version": "1.0.0"
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