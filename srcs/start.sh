service nginx start
service mysql start
echo "CREATE DATABASE wp_wordpress;" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wp_wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
echo "update mysql.user set plugin = 'mysql_native_password' where user='root';" | mysql -u root --skip-password
service mysql restart
service php7.3-fpm start
sleep infinity