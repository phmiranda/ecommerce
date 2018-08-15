# imagem base para criação dos containers.
FROM php:7.1-apache

# mantenedor da imagem.
MAINTAINER Pedro <pehhagah.1607@gmail.com>

#comentários
ENV APACHE_DOCUMENT_ROOT=/ecommerce/

#comentários
COPY . /var/www/html/

# instalação das extensões necessárias no ambiente php.
RUN apt-get install php7.1-gd
RUN apt-get install php7.1-zip
RUN apt-get install php7.1-xml
RUN apt-get install php7.1-json
RUN apt-get install php7.1-json
RUN apt-get install php7.1-mysql
RUN apt-get install php7.1-pgsql
RUN apt-get install php7.1-sqlite
RUN apt-get install php7.1-odbc

#comentários
EXPOSE 80