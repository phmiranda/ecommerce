# comentário.
FROM alpine:latest

# comentário.
MAINTAINER Pedro <pehhagah.1607@gmail.com>

# comentário.
RUN apk add apache2
RUN rc-service apache2 start
RUN rc-update add apache2
RUN rc-service apache2 restart

# comentário.
EXPOSE 80, 443
