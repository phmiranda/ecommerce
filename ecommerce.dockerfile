# comentários.
FROM ubuntu:16.04

# comentários.
#ENV DIR_HOST="D:\Sistemas\alura\ecommerce"
#ENV DIR_WORKDIR="D:\Sistemas\alura\ecommerce"
#ENV DIR_CONTAINER="/var/www/html/"
#ENV DIR_WORKDIR="/var/www/html/"

# comentários.
RUN apt-get update -y
RUN apt-get install -y sudo
#RUN sudo apt-get install -y software-properties-common
#RUN sudo apt-get install -y python-software-properties
#RUN sudo apt-get install -y python3-software-properties
#RUN sudo apt-get -y install apache2
#RUN sudo apt-get -y install curl
#RUN sudo apt-get update -y

# inclusão do repositório para instalação do PHP
#RUN sudo add-apt-repository -y ppa:ondrej/php
#RUN sudo LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
#RUN sudo apt-get update

# instalação do PHP na sua versão 7.1.
#RUN sudo apt-get install -y php7.1
#RUN sudo apt-get install -y php7.1-gd
#RUN sudo apt-get install -y php7.1-cli
#RUN sudo apt-get install -y php7.1-dev
#RUN sudo apt-get install -y php7.1-curl
#RUN sudo apt-get install -y php7.1-mcrypt
#RUN sudo apt-get install -y php7.1-mysql
#RUN sudo apt-get install -y php7.1-pgsql
#RUN sudo apt-get install -y php7.1-sqlite3
#RUN sudo apt-get install -y php7.1-odbc
#RUN sudo apt-get install -y php7.1-soap
#RUN sudo apt-get install -y php7.1-json
#RUN sudo apt-get install -y php7.1-xml
#RUN sudo apt-get install -y php7.1-zip
#RUN sudo apt-get install -y libapache2-mod-php7.1
#RUN sudo apt-get update

# instalação do gerenciador de dependências composer
#RUN sudo curl -sS https://getcomposer.org/installer | php
#RUN sudo mv composer.phar /usr/local/bin/composer

# ativação do modo rewrite do apache.
#RUN sudo a2enmod rewrite

# comentários.
#VOLUME $DIR_HOST $DIR_CONTAINER

# comentários.
#EXPOSE 80,443

# comando para instalação das dependências do projeto.
#ENTRYPOINT ["composer","install"]

# execução automática do apache ao instalar os softwares necessários.
#CMD ["/usr/sbin/init"]
#CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]