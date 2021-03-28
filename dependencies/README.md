# Setup on local PC with VSCode

### (1) How to setup php
Install it via apt-get or brew. I you downlaod it you must run /configure to set it up

linux
```bash
sudo apt-get install php-mysql php-cli
```
mac
```bash
brew install php@7.3
```
Note:
Depending on the operating system you will maybe need to ammened the **php.ini** file to set the extension_dir and uncomment the mySql php driver extension and then restart the php session


### (2) How to setup VSCOde
none

### (3) How to setup MySQL & phpMyAdmin
Use the docker compose files provided at /dependencies/docker/docker-compose.yml . This will create a MySql Database and the phpMyAdmin UI for you
Start the mySql database and phpMyAdmin
```bash
docker-compose up -d
```
Stop after use
```stop
docker-compose down
```
Check docker images for myPhpAdmin and mysql first
```
docker ps
```
Or you can use the docker UI

### (4) Run the Code

We can use the built in [php webserver](https://www.php.net/manual/en/features.commandline.webserver.php) for noe while we are developing

```bash
php -S localhost:8085
```
Then navigate to [localhost:8085/index.php](localhost:8085/index.php)

## Open phpMyadmin
after you start it in docker go to
```
localhost:8080
```