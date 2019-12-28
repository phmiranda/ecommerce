# comentário.
FROM alpine:latest

# comentário.
MAINTAINER Pedro <pehhagah.1607@gmail.com>

# comentário.
COPY ./docker/web/apache2.conf /etc/apache2/sites-avaliable/
COPY ./docker/web/apache2.env.conf /etc/apache2/sites-avaliable/

# comentário.
RUN apk add apache2
RUN rc-service apache2 start
RUN rc-update add apache2
RUN rc-service apache2 restart



# comentário.
EXPOSE 80, 443
