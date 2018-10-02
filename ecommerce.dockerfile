# comentários.
FROM centos:latest
# comentários.
RUN yum update -y
RUN yum -y install httpd
RUN yum clean all
RUN systemctl enable httpd.service
# comentários.
COPY . /var/www/html
# comentários.
EXPOSE 80
# comentários.
CMD ["/usr/sbin/init"]