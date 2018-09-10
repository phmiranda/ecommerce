# comentários.
FROM centos:latest

# comentários.
MAINTAINER Pedro <pehhagah.1607@gmail.com>

# comentários
ENV APACHE_HTTP_PORT=80
ENV APACHE_HTTPS_PORT=443

# instalação do servidor httpd.
RUN yum -y install epel-release yum-utils
RUN yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum-config-manager --enable remi-php71
RUN yum -y install httpd
RUN yum -y install php
RUN yum -y install php-common
RUN yum -y install php-common
RUN yum -y install php-mcrypt
RUN yum -y install php-mysql
RUN yum -y install php-gd

# inclusão do projeto no diretório.
COPY . /var/www/html/

# comentários
ADD /containers/httpd/httpd.conf /etc/httpd/conf
ADD /containers/httpd/ecommerce.conf /etc/httpd/sites-available/


# comentários
EXPOSE $APACHE_HTTP_PORT
EXPOSE $APACHE_HTTPS_PORT

# comentários.
CMD ["./containers/ecommerce/ecommerce.sh"]