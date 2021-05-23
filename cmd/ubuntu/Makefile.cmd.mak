#================================================
# php
php_all: apache_install mysql_install php_install php_mods
php_all_open: apache_conf_open php_conf_open
php_all_close: apache_conf_close php_conf_close

php_install:
	@sudo apt install -y php
	@sudo apt install -y php-mysql
php_mods:
	@sudo apt install -y php-curl
	@sudo apt install -y php-gd
	@sudo apt install -y php-intl
	@sudo apt install -y php-json
	@sudo apt install -y php-mbstring
	@sudo apt install -y php-xml
	@sudo apt install -y php-zip
	@sudo apt install -y php-sqlite3
php_conf_open:
	@sudo chmod 777 /etc/php/7.4/apache2/php.ini
php_conf_close:
	@sudo chmod 644 /etc/php/7.4/apache2/php.ini
#================================================
# apache
apache_install:
	@sudo apt install -y apache2
	@sudo apt install -y libapache2-mod-php
apache_reload:
	@sudo service apache2 reload
apache_restart:
	@sudo service apache2 restart
apache_conf_open:
	@sudo chmod 777 /etc/apache2/apache2.conf
	@sudo chmod 777 /etc/apache2/ports.conf
	@sudo chmod 777 /etc/apache2/sites-available/000-default.conf
	@sudo chmod 777 /etc/apache2/sites-available/default-ssl.conf
apache_conf_close:
	@sudo chmod 644 /etc/apache2/apache2.conf
	@sudo chmod 644 /etc/apache2/ports.conf
	@sudo chmod 644 /etc/apache2/sites-available/000-default.conf
	@sudo chmod 644 /etc/apache2/sites-available/default-ssl.conf
#================================================
# mysql
mysql_install:
	@sudo apt install -y mysql-server
#================================================
# certbot
certbot_all: certbot_apache_stop certbot_renew certbot_apache_start certbot_list

certbot_list:
	@certbot-auto certificates
certbot_renew:
	@certbot-auto renew
certbot_apache_stop:
	@sudo systemctl stop apache2
certbot_apache_start:
	@sudo systemctl start apache2
#================================================
# geany
geany_install:
	@sudo apt install -y geany
geany_start:
	@geany &
#================================================
# cmd
cmd_update:
	@sudo apt update
	@sudo apt full-upgrade
cmd_chmod:
	@sudo chmod -R 777 $(GPROJECT_PATH)
cmd_search:
	@sudo apt-cache search php-
cmd_remove:
	@sudo apt remove jenkins
cmd_unlock:
	@cd /var/lib/dpkg/ && sudo rm -v lock
cmd_ip:
	@ip a s
#================================================
# git
git_status:
	@cd $(GPROJECT_PATH) && git status -u
git_push:
	@cd $(GPROJECT_PATH) && git pull && git add --all && git commit -m "Initial Commit" && git push -u origin master && sudo chmod -R 777 $(GPROJECT_PATH) 
git_push_o:
	@cd $(GPROJECT_PATH) && git add --all && git commit -m "Initial Commit" && git push -u origin master
git_push_u:
	@cd $(GPROJECT_PATH) && git push -u origin master
git_pull:
	@cd $(GPROJECT_PATH) && git pull && sudo chmod -R 777 $(GPROJECT_PATH)
git_add:
	@cd $(GPROJECT_PATH) && git add $(argv)
git_rm:
	@cd $(GPROJECT_PATH) && git rm -r $(argv)
git_clone:
	@cd $(GPROJECT_ROOT) && git clone $(GGIT_URL) $(GGIT_NAME) 
git_store:
	git config --global credential.helper store
#================================================

