# Setup on local PC with VSCode

### (1) How to setup php
Install it via apt-get or brew. I you downlaod it you must run /configure to set it up

linux
```bash
sudo apt-get install php-mysql php-cli
```
mac
```bash
brew install php@8.0
```


### (2) How to setup VSCOde
See the following article on how to setup - https://code.visualstudio.com/docs/languages/php. You need to tell VSCode where to find php. This will be where you installed php too

See - https://blog.theodo.com/2019/07/vscode-php-development/ 

You must set the following:
```bash

```

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

### (4) Run the Code
First enable mysql driver

You must uncomment ";extension=pdo_mysql.so" and restrt the cli webserver
```dotnetcli
sudo nano /etc/php/7.4/cli/php.ini

We can use the built in [php webserver](https://www.php.net/manual/en/features.commandline.webserver.php) for noe while we are developing
```bash
php -S localhost:8085
```
Then navigate to [localhost:8085/index.php](localhost:8085/index.php)