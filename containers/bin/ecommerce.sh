#!/usr/bin/env bash
# comentários
echo Iniciando scripts...

# comentários
if ! /usr/sbin/httpd -DFOREGROUND;
    # comentários
    then
        echo "Não foi possível iniciar os serviços do httpd automaticamente..."
        exit 1

    # comentários
    fi
        echo "Os serviços do httpd foram iniciados com sucesso..."
