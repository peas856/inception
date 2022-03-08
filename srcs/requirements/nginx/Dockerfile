FROM debian:buster

RUN apt-get update && apt-get upgrade -y
RUN apt-get install nginx -y
RUN apt-get -y install dumb-init
COPY ./default /etc/nginx/sites-available/default
RUN apt-get install openssl -y

RUN openssl req -x509 -nodes -days 365 -newkey rsa:4096 \
    -subj "/C=KR/ST=Seoul/L=Seoul/O=42/OU=42SEOUL/CN=trhee.42.fr" \
    -keyout /etc/ssl/private/server_pkey.pem \
    -out /etc/ssl/certs/server.crt
CMD [ "nginx", "-g", "daemon off;" ]
EXPOSE 443
ENTRYPOINT [ "/usr/bin/dumb-init" ]