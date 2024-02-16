#!/bin/bash
docker compose exec basedatos /bin/bash -c "mariadb-dump -u user -puser db" >./bd/backup.sql