# @see https://learn2torials.com/a/dockerize-reactjs-app
FROM node:16-alpine3.11

WORKDIR /var/www/ui

COPY package.json /var/www/ui/
COPY package-lock.json /var/www/ui/
# Install on WORKDIR
RUN npm install
# Deploy app
COPY . /var/www/ui

CMD npm start