FROM debian:buster
RUN apt-get update -y && apt-get upgrade -y && apt-get -y install mariadb-server mariadb-client
COPY dbset.sh /dbset.sh
RUN chmod 744 /dbset.sh
RUN sed 's/^bind-address/#&/' -i /etc/mysql/mariadb.conf.d/50-server.cnf
EXPOSE 3306
ENTRYPOINT ["sh", "/dbset.sh"]