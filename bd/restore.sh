#!/bin/bash
docker compose exec basedatos /bin/bash -c "mariadb -u user -puser bd < /bd/backup.sql"
