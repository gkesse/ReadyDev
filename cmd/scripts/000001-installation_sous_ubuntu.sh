#================================================
https://doc.ubuntu-fr.org/lamp
#================================================
sudo apt install apache2
sudo apt install php
sudo apt install php-dom
sudo apt install php-sqlite3
sudo apt install php-mbstring
sudo apt install php-intl
#================================================
sudo a2enmod rewrite
#================================================
sudo chmod 777 /etc/apache2/sites-available/000-default.conf
sudo chmod 644 /etc/apache2/sites-available/000-default.conf
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
https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-18-04-quickstart
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
echo "" _ > /home/gkesse/Programs/ReadyCode/app/html/p01/index.html
#================================================
sudo systemctl restart apache2
#================================================
sudo systemctl restart pad
sudo systemctl stop pad
#================================================
