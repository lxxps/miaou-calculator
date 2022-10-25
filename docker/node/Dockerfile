# @see https://minasami.com/2021/09/24/part-2-setup-spa-reactjs-frontend-with-hot-reloading-for-development.html

FROM node:16-alpine3.11

# this is a development Dockerfile
# and is not intended for production use
MAINTAINER Mina Sami <mina.nsami@gmail.com>
MAINTAINER Pierrot Evrard <pierrotevrard@gmail.com>

COPY . /var/www/ui
WORKDIR /var/www/ui

# Hotloading dependencies
# https://stackoverflow.com/questions/44864852/docker-execute-command-after-mounting-a-volume
CMD sh -c "yarn install && yarn run build && npm start"

EXPOSE 3000