# Miaou Calculator

Basic calculator with Docker-Compose, Nginx, Symfony and React.js

Sourced from https://minasami.com/2021/06/23/part-1-setup-reactjs-symfony-app-with-hotloading.html


## Requirements

- Docker-compose 3.7
- Node 16
- PHP 8.1
- Composer 2
- NPM 8


## Installation

1. Clone Git project
```shell
git clone https://github.com/lxxps/miaou-calculator.git <path_to_project>
cd <path_to_project>
```

2. Create `.env` file
```shell
# Absolute path to root folder for the local installation
PWD=<absolute_path_to_local_root_folder>
# Note that this domain must be accessible via ANY DNS routes
# For local domain names, use your local `hosts` file
HOST=<your_favorite_domain_name>
API_HOST=<optional_domain_name_for_api>
# Please use a valid PHP Timezone
# @see https://www.php.net/manual/en/timezones.php
TIMEZONE=Europe/Luxembourg
```

3. Create `ui/.env` file
```shell
# Current version
REACT_APP_VERSION=$npm_package_version
# Expected API endpoint, without ending slash
REACT_APP_API_ENDPOINT=http://localhost:9000/api/v1
```

4. Wake up the stack helping docker-compose
```shell
docker-compose up --build -d
```

5. Go to `http://localhost:9000/api/v1/healthcheck` to validate Symfony API
```json
{
  "status":200,
  "message":"OK",
  "version": "0.0.1"
}
```
*This status may also be accessible helping: `$API_HOST:9000/api/v1/healthcheck`, for an API_HOST variable defined in `.env` file, and if DNS-resolvable.*

6. Go to `http://localhost:3000/` to validate ReactJS UI
```html
<header class="App-header">
    API HealthCheck Status: 200 OK<br>
    API Version: 0.0.1<br>
</header>
```


## Shutdown

Shutdown the stack helping docker-compose
```shell
docker-compose down
```


## Authors

- Pierrot Evrard <pierrotevrard@gmail.com>
- Mina Sami <mina.nsami@gmail.com>