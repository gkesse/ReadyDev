#================================================
https://www.sitemaps.org/protocol.html
#================================================
sudo apt install apache2
sudo apt install php
sudo apt install php-dom
sudo apt install php-sqlite3
sudo apt install php-mbstring
sudo apt install php-intl
sudo apt install php-sockets
sudo apt install tree
#================================================
sudo a2enmod rewrite
sudo a2enmod ssl
sudo a2enmod headers
#================================================
sudo chmod 777 /etc/apache2/sites-available/000-default.conf
sudo chmod 644 /etc/apache2/sites-available/000-default.conf
#================================================
sudo chmod 777 /etc/apache2/sites-available/000-default-le-ssl.conf
sudo chmod 644 /etc/apache2/sites-available/000-default-le-ssl.conf
#================================================
sudo chmod 777 /etc/apache2/ports.conf
sudo chmod 644 /etc/apache2/ports.conf
#================================================
sudo chmod 777 /etc/apache2/apache2.conf
sudo chmod 644 /etc/apache2/apache2.conf
#================================================
Listen 80
Listen 8888
Listen 8801
#================================================
sudo chmod 777 /home/gkesse
sudo chmod 755 /home/gkesse
#================================================
sudo chmod 777 /home/gkesse/Programs
sudo chmod 755 /home/gkesse/Programs
#================================================
sudo chmod -R 777 /home/gkesse/Programs/ReadyDev
#================================================
mkdir -p /home/gkesse/Programs/ReadyDev/logs
#================================================
mkdir -p /home/gkesse/Programs/ReadyCode/app/html/p01
mkdir -p /home/gkesse/Programs/ReadyCode/app/html/p01/logs
#================================================
sudo chmod -R 777 /home/gkesse/Programs/ReadyCode/app/html/p01
sudo chown -R $USER:$USER /home/gkesse/Programs/ReadyCode/app/html/p01
#================================================
echo "" > /home/gkesse/Programs/ReadyCode/app/html/p01/index.html
#================================================
<VirtualHost *:80>
    ServerAdmin tiakagerard@hotmail.com
    ServerName readydev.ovh
    ServerAlias www.readydev.ovh    
	DocumentRoot /home/gkesse/Programs/ReadyCode/app/html/p01
	ErrorLog /home/gkesse/Programs/ReadyCode/app/html/p01/logs/error.log
	CustomLog /home/gkesse/Programs/ReadyCode/app/html/p01/logs/access.log combined
    <Directory /home/gkesse/Programs/ReadyCode/app/html/p01>
        Options All
        AllowOverride All
        Order allow,deny
        allow from all
        Require all granted
    </Directory>
</VirtualHost>
#================================================
<VirtualHost *:80>
    ServerAdmin tiakagerard@hotmail.com
    ServerName readydev.ovh
    ServerAlias www.readydev.ovh    
	DocumentRoot /home/gkesse/Programs/ReadyDev
	ErrorLog /home/gkesse/Programs/ReadyDev/logs/error.log
	CustomLog /home/gkesse/Programs/ReadyDev/logs/access.log combined
    Redirect permanent / https://readydev.ovh/
</VirtualHost>
#================================================
<IfModule mod_ssl.c>
    <VirtualHost *:443>
        ServerAdmin tiakagerard@hotmail.com
        ServerName readydev.ovh
        ServerAlias www.readydev.ovh    
        DocumentRoot /home/gkesse/Programs/ReadyDev
        ErrorLog /home/gkesse/Programs/ReadyDev/logs/error.log
        CustomLog /home/gkesse/Programs/ReadyDev/logs/access.log combined

        SSLEngine on
        SSLCertificateFile	/etc/letsencrypt/live/readydev.ovh/fullchain.pem
        SSLCertificateKeyFile /etc/letsencrypt/live/readydev.ovh/privkey.pem
        Header always set Strict-Transport-Security "max-age=15768000"

        <Directory /home/gkesse/Programs/ReadyDev>
            Options All
            AllowOverride All
            Order allow,deny
            allow from all
            Require all granted
        </Directory>
    </VirtualHost>
</IfModule>
#================================================
<IfModule mod_ssl.c>
    <VirtualHost *:443>
        ServerAdmin tiakagerard@hotmail.com
        ServerName readydev.ovh
        ServerAlias www.readydev.ovh    
        DocumentRoot /home/gkesse/Programs/ReadyDev
        ErrorLog /home/gkesse/Programs/ReadyDev/logs/error.log
        CustomLog /home/gkesse/Programs/ReadyDev/logs/access.log combined

        Include /etc/letsencrypt/options-ssl-apache.conf
        SSLCertificateFile /etc/letsencrypt/live/readydev.ovh/fullchain.pem
        SSLCertificateKeyFile /etc/letsencrypt/live/readydev.ovh/privkey.pem
        
        <Directory /home/gkesse/Programs/ReadyDev>
            Options All
            AllowOverride All
            Order allow,deny
            allow from all
            Require all granted
        </Directory>
    </VirtualHost>
</IfModule>
#================================================
sudo snap install core
sudo snap refresh core
sudo snap install --classic certbot
sudo ln -s /snap/bin/certbot /usr/bin/certbot
sudo certbot --apache
email : tiakagerard@hotmail.com
agree : yes
campaign : yes
all : vide
#================================================
sudo ufw app list
sudo ufw app info "Apache Full"
#================================================
sudo systemctl restart apache2
#================================================
sudo systemctl restart pad
sudo systemctl status pad
sudo systemctl stop pad
sudo systemctl daemon-reload
#================================================
http://readydev.ovh/
https://readydev.ovh/
#================================================
cd /home/gkesse/Programs/ReadyCode/app/cpp/unix/unix/
. envs.sh
export "GPROJECT_ENV=TEST"
export "GPROJECT_ENV=PROD"
tree $GPROJECT_DATA
cat /home/gkesse/Programs/ReadyCode/app/cpp/unix/unix/Makefile.cmd.mak
cat /home/gkesse/Programs/ReadyCode/app/cpp/unix/unix/envs.sh
cat /home/gkesse/Programs/ReadyCode/app/cpp/unix/code/src/data/scripts/000001-installer_serveur.sh
cat /home/gkesse/Programs/ReadyCode/app/cpp/unix/code/src/data/scripts/000004-configurer_serveur_systemd.sh
cat /etc/systemd/system/pad.service
./make_c.sh all
./make_c.sh all test mysql/maj
./make_c.sh all test socket/server/start
#================================================
chmod 755 /home/gkesse/Programs/ReadyCode/app/cpp/unix/code/src/data/mysql/conf/pkg_config.cnf
#================================================
cp -p \
/home/gkesse/Programs/ReadyCode/app/cpp/unix/unix/bin/rdcpp.exe \
/home/gkesse/Programs/ReadyCode/app/cpp/unix/code/src/data/server/padserver
#================================================
sudo -i
exit
#================================================
cat << _EOF_ > /etc/systemd/system/pad.service
[Unit]
Description=pad service
After=network.target
StartLimitIntervalSec=0

[Service]
Environment="GPROJECT_DATA=/home/gkesse/Programs/ReadyCode/app/cpp/unix/code/src/data"
Environment="GPROJECT_TMP=/home/gkesse/Programs/ReadyCode/app/cpp/unix/code/src/data/tmp"
Environment="GPROJECT_ENV=PROD"
Type=simple
Restart=always
RestartSec=1
User=gkesse
ExecStart=/home/gkesse/Programs/ReadyCode/app/cpp/unix/code/src/data/server/padserver test socket/server/start

[Install]
WantedBy=multi-user.target
_EOF_
#================================================
sudo chmod 777 /etc/php/8.0/apache2/php.ini
sudo chmod 644 /etc/php/8.0/apache2/php.ini
#================================================
display_errors = On
#================================================
