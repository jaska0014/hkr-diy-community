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