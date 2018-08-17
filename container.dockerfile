# imagem base para criação do servidor de aplicação.
FROM centos:7

# mantenedor da imagem
MAINTAINER Pedro Henrique <pehhagah.1607@gmail.com>

# comentários
ENV HTTT_PORT=80
ENV HTTTS_PORT=443
ENV DB_PORT=3306

# comentários
RUN yum -y install epel-release
RUN yum -y install remi-release

# comentários
EXPOSE $HTTP_PORT
EXPOSE $HTTPS_PORT
EXPOSE $DB_PORT
