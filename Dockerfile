FROM ubuntu:18.04
RUN DEBIAN_FRONTEND=noninteractive
RUN apt-get upgrade
RUN apt-get update
ENV TZ=America/La_Paz
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get install apache2 php php-mysql -y
RUN rm /var/www/html/*
COPY . /var/www/html/
RUN apt-get install -y wget 
RUN wget http://archive.ubuntu.com/ubuntu/pool/main/m/mysql-5.7/mysql-server-5.7_5.7.21-1ubuntu1_amd64.deb
RUN apt-get install mysql-server-5.7 -y
EXPOSE 80 3306 33060
CMD chown -R mysql:mysql /var/lib/mysql \
&& service mysql start \
&& mysql -ppassword -e "CREATE DATABASE IF NOT EXISTS test;GRANT ALL PRIVILEGES on test.* TO 'root'@'localhost' WITH GRANT OPTION; ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';FLUSH PRIVILEGES;USE test; CREATE TABLE users(id int(100) NOT NULL auto_increment,nombres varchar(100) NOT NULL,apellidos varchar(100) NOT NULL,email varchar(50) NOT NULL,monto int(10) NOT NULL,grupo int(5) NOT NULL,telefono int(8) NOT NULL,observacion varchar(100) NOT NULL,PRIMARY KEY (id));" \ 
&& apachectl -D FOREGROUND


