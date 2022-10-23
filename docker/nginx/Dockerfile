# @see https://minasami.com/2021/06/23/part-1-setup-reactjs-symfony-app-with-hotloading.html

FROM nginx:alpine

MAINTAINER Mina Sami <mina.nsami@gmail.com>
MAINTAINER Pierrot Evrard <pierrotevrard@gmail.com>

RUN apk update \
    && apk add git curl vim wget bash acl

COPY nginx.conf /etc/nginx/
# remove the default domain conf
RUN rm /etc/nginx/conf.d/default.conf

# set right permissions for symfony cache
RUN HTTPDUSER=$(ps axo user,comm | grep -E '[a]pache|[h]ttpd|[_]www|[w]ww-data|[n]ginx' | grep -v root | head -1 | cut -d\  -f1) \
    && setfacl -dR -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX var \
    && setfacl -R -m u:"$HTTPDUSER":rwX -m u:$(whoami):rwX var