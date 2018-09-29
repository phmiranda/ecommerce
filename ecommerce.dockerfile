FROM centos:latest
RUN yum update -y
RUN yum -y install httpd
RUN yum clean all
RUN systemctl enable httpd.service
COPY . /var/www/html
EXPOSE 80
CMD ["/usr/sbin/init"]