##### restore.sh
#!/bin/bash
docker compose exec bd bash -c "mysql -u root -p prestashop < ./docker-entrypoint-initdb.d/backup.sql"