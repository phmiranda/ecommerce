# comentários.
FROM ubuntu:latest

# comentários.
MAINTAINER Pedro <pehhagah.1607@gmail.com>

# comentários
ENV APACHE_HTTP_PORT=80
ENV APACHE_HTTPS_PORT=443

# instalação do servidor httpd.
RUN apt-get update
RUN apt-get install -y apache2

# inclusão do projeto no diretório.
COPY . /var/www/html/

# comentários
EXPOSE $APACHE_HTTP_PORT
EXPOSE $APACHE_HTTPS_PORT

# comentários
ENTRYPOINT []

# comentários.
#CMD ["./ecommerce.sh"]