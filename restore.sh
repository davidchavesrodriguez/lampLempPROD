##### restore.sh
#!/bin/bash
docker compose exec bd bash -c "mysql -u user -p database < /backup/backup.sql"