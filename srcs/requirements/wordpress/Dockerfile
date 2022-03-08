FROM debian:buster

RUN apt-get update -y && apt-get upgrade -y && apt-get -y install php7.3 \ 
    php-fpm \ 
    php-cli \ 
    wget \ 
    curl \ 
    php-mysql \
    php-mbstring \ 
    php-xml \ 
    sendmail \ 
    vim \
    mariadb-client \
    dumb-init

RUN apt-get update -y && apt-get install -y wget && \
	wget https://wordpress.org/wordpress-5.9.tar.gz && \ 
    tar -xvf wordpress-5.9.tar.gz
RUN mkdir -p var/www/html
RUN mv /wordpress/* /var/www/html/ 
RUN chown -R www-data:www-data /var/www/html && \ 
    rm -r /wordpress-5.9.tar.gz

RUN rm -rf /var/www/html/wp-config-sample.php
COPY wp-config.php /var/www/html

RUN echo  "listen = 0.0.0.0:9000" >> /etc/php/7.3/fpm/pool.d/www.conf; \
    sed -i -e "s|;daemonize = yes|daemonize = no|g" /etc/php/7.3/fpm/php-fpm.conf
RUN sed -i "s|;clear_env = no|clear_env = no|g" /etc/php/7.3/fpm/pool.d/www.conf
EXPOSE 9000
RUN 	mkdir -p /run/php/
CMD ["php-fpm7.3", "-F"]
ENTRYPOINT [ "/usr/bin/dumb-init" ]