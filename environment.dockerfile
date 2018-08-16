# imagem base para criação dos containers.
FROM php:7.1-apache

# mantenedor da imagem.
MAINTAINER Pedro <pehhagah.1607@gmail.com>

# variáveis de ambiente e parâmetros.
ENV APACHE_HTTP=80
ENV APACHE_HTTPS=443

# movimentação dos arquivos necessários do container e repositório.
#COPY config/php.ini /usr/local/etc/php/
COPY . /var/www/html/

# execução de comandos para instalação de pacotes.
RUN docker-php-ext-configure mysqli
RUN docker-php-ext-install mysqli

# exposição da porta de comunicação do container.
EXPOSE $APACHE_HTTP
EXPOSE $APACHE_HTTPS

