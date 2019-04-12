#================================================
# Autoriser les machines virtuelles (httpd.conf)
#================================================
C:\wamp\bin\apache\apache2.4.17\conf\httpd.conf

LoadModule vhost_alias_module modules/mod_vhost_alias.so

# Virtual hosts
Include conf/extra/httpd-vhosts.conf

#================================================
# Configurer le port du serveur (httpd.conf)
#================================================
Listen 0.0.0.0:80
Listen [::0]:80

#================================================
# Configurer la racine du serveur (httpd-vhosts.conf)
#================================================
C:\wamp\bin\apache\apache2.4.17\conf\extra\httpd-vhosts.conf

<VirtualHost *:80>
    ServerName www.readydev.com
    ServerAdmin gerard.kesse@outlook.fr
    DocumentRoot "C:\Users\sabine\Downloads\Gerard\Programs\ReadyDev"
        <Directory "C:\Users\sabine\Downloads\Gerard\Programs\ReadyDev">
            Options All
            AllowOverride All
            Order allow,deny
            allow from all
            Require all granted
        </Directory>
</VirtualHost>