#!/bin/bash
docker compose exec basedatos /bin/bash -c "mariadb -u user -puser db < /bd/backup.sql"
