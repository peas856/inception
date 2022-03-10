service mysql start
mysql_install_db
mysql -e "CREATE DATABASE IF NOT EXISTS $DB_NAME;" 
mysql -e "CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_PW';" 
mysql -e "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%';"
mysql -e "FLUSH PRIVILEGES;"
mysql $DB_NAME -u $DB_USER -p$DB_PW < /backup.sql; 
mysqladmin -u root password $ROOT_PW;
service mysql stop
exec mysqld