#!/usr/bin/env bash

# comentários
if  ! mkdir /etc/httpd/sites-available;
    # comentários
    then
        echo "Não foi possível criar o diretório: sites-available"
        exit 1

    # comentários
    fi
        echo "O diretório {sites-available} foi criado com sucesso..."

# comentários
if ! mkdir /etc/httpd/sites-enabled;
    # comentários
    then
        echo "Não foi possível criar o diretório: sites-enabled"
        exit 1
    # comentários
    fi
        echo "O diretório {sites-enabled} foi criado com sucesso..."

# comentários
if ! ln -s /etc/httpd/sites-available/ecommerce.conf /etc/httpd/sites-enabled/ecommerce.conf;
    # comentários
    then
        echo "Não foi possível criar o link simbólico..."
        exit 1
    # comentários
    fi
        echo "O link simbólico foi criado com sucesso..."

# comentários
if ! systemctl restart httpd.service;
    # comentários
    then
        echo "Não foi possível reiniciar o servidor..."
        exit 1
    # comentários
    fi
        echo "O servidor foi reiniciado com sucesso..."
