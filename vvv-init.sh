echo "Creating database 'ten10' (if it does not exist)..."

mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS \`ten10\`"
mysql -u root --password=root -e "GRANT ALL PRIVILEGES ON \`ten10\`.* TO wp@localhost IDENTIFIED BY 'wp';"

if [ ! -d "web" ]; then
	echo 'Installing WordPress (release version) in ten10/web...'
	mkdir ./web
	mkdir ./web/wp
cd ./web/wp
	wp core download --allow-root 
	wp core config --dbname="ten10" --dbuser=wp --dbpass=wp --dbhost="localhost" --allow-root
	wp core install --url=ten10.dev --title="ten10 - A WordPress Site" --admin_user=admin --admin_password=password --admin_email=demo@example.com --allow-root
		cd -
else
	echo 'Updating WordPress in ten10/web/wp...'
	wp core update --allow-root
	wp core update-db --allow-root
fi
