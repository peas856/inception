service mysql start
mysql -e "CREATE DATABASE IF NOT EXISTS $DB_NAME;" 
mysql -e "CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_PW';" 
mysql -e "GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%';"
mysql -e "FLUSH PRIVILEGES;"
# mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '$ROOT_PW';"
exec mysqld