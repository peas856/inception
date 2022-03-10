FROM debian:buster
RUN apt-get update -y && apt-get upgrade -y && apt-get -y install mariadb-server mariadb-client dumb-init
COPY dbset.sh /dbset.sh
COPY backup.sql /backup.sql
RUN chmod 777 /dbset.sh
RUN sed -i 's/bind-address/#bind-address/g' /etc/mysql/mariadb.conf.d/50-server.cnf
ENTRYPOINT	["/usr/bin/dumb-init"]
EXPOSE 3306
CMD ["sh", "/dbset.sh"]
