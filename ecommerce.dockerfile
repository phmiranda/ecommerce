# comentários.
FROM centos:7

# comentários.
MAINTAINER Pedro <pehhagah.1607@gmail.com>

# comentários.
RUN yum install -y https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm
RUN yum install -y http://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum -y install php71

# comentários.
RUN mkdir -p /var/www/html/ecommerce/
#RUN chown -R apache:apache /var/www/html/ecommerce/*
#RUN chmod -R 755 /var/www/html/ecommerce/*

# comentários.
COPY . /var/www/html/ecommerce/

# comentários.
WORKDIR /var/www/html/ecommerce/

# comentários.
#ENTRYPOINT ["/var/www/html/ecommerce/ecommerce.sh"]