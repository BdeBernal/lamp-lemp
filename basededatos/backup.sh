#!/bin/bash
#Script para facer backup da BD
mysqldump -u root -p superbase > /scripts/backup-bd.sql
echo "Base de datos exportada"