#!/bin/bash

BACKUP_PATH=/opt/filmnet.sql

echo "Importing filmnet database !!!"
if [ ! -z "$MYSQL_ROOT_PASSWORD" ]; then
  mysql -u root -p "$MYSQL_ROOT_PASSWORD" < $BACKUP_PATH
else
  mysql -u root  < $BACKUP_PATH
fi

