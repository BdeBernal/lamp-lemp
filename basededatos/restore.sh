#!/bin/bash
#Script para restaurar a BD
mysql -h mysql-2711c8c4-lamp-lemp.c.aivencloud.com -P 16791 -u avnadmin -p defaultdb < /scripts/backup-bd.sql
echo "Base de datos importada"