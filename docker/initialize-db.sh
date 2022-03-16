echo "Importing dumps"

zcat < storage/tests/safe-database-snapshots/data-snapshot.sql.gz | docker exec -i smartvitaal-app_mysql_1 mysql -uhomestead -psecret smartvitaal
zcat < storage/tests/safe-database-snapshots/structure-snapshot.sql.gz | docker exec -i smartvitaal-app_mysql_1 mysql -uhomestead -psecret smartvitaal
zcat < storage/tests/safe-database-snapshots/filtered-snapshot.sql.gz | docker exec -i smartvitaal-app_mysql_1 mysql -uhomestead -psecret smartvitaal

echo "Dumps Imported"

echo "Running other migrations"
vendor/bin/sail php artisan migrate
echo "Migrations done"

echo "Seeding rest data"
vendor/bin/sail php artisan db:seed
echo "Seeding done"
