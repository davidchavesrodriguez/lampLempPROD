##### backup.sh
#!/bin/bash
docker compose exec bd bash -c "mysqldump -u user -p database" > bd/backup/backup.sql