FROM php:7.4-apache
RUN apt-get update && apt upgrade -y
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
ADD ./PHP/Krzys-App /var/www/html
COPY ./apache/my-site.conf /etc/apache2/sites-available/my-site.conf
RUN echo 'SetEnv MYSQL_DB_CONNECTION 192.168.0.30' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_DB_NAME KrzysiuApp' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_USER admin' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_PASSWORD admin' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_DB_HOST 192.168.0.30' >> /etc/apache2/conf-enabled/environment.conf
RUN echo 'SetEnv MYSQL_DB_PORT 3306' >> /etc/apache2/conf-enabled/environment.conf
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf &&\
    a2enmod rewrite &&\
    a2enmod headers &&\
    a2enmod rewrite &&\
    a2dissite 000-default &&\
    a2ensite my-site &&\
    service apache2 restart
EXPOSE 80
