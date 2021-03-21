#OS
FROM debian:buster

#Loading 
RUN apt-get -y update && apt-get -y upgrade
RUN apt-get -y install nginx wordpress default-mysql-server php7.3 php7.3-fpm php-json php7.3-mysql php-mbstring

#For activation
COPY srcs/start.sh /var/
COPY srcs/evirgili.key /etc/nginx/ssl/
COPY srcs/evirgili.crt /etc/nginx/ssl/

#Nginx conf
RUN rm -rf /etc/nginx/sites-available/default \
&& rm -rf /etc/nginx/sites-enabled/default 
RUN	mkdir -p /var/www/html
COPY srcs/nginx.conf /etc/nginx/sites-available/
RUN	ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/nginx.conf
RUN rm -fr /var/www/html/index.nginx-debian.html

#Add phpmyadmin
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz phpmyadmin.tar.gz
RUN	tar xvzf phpmyadmin.tar.gz
RUN	mv phpMyAdmin-5.0.4-all-languages /var/www/html/phpmyadmin
COPY    srcs/config.inc.php /var/www/html/phpmyadmin/config.inc.php

#Wordpress
RUN mv /usr/share/wordpress /var/www/html
COPY    srcs/wordpress_conf.php /var/www/html/wordpress/wp-config.php

#rights
RUN	chmod 777 /var/*
RUN chown -R www-data /var/www/* && chmod -R 755 /var/www/*

EXPOSE 80 443

CMD	/var/start.sh