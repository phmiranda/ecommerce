#!/usr/bin/env bash
# comentários
echo "atualizando os repositórios do sistema operacional..."
if ! sudo apt-get update -y
then
    echo "falha ao atualizar os repositórios..."
    exit
fi
    echo "os repositórios foram atualizados com sucesso..."