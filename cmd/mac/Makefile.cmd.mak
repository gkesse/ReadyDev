#================================================
all:
#================================================
# apache
apache_start:
	@sudo apachectl start
apache_restart:
	@sudo apachectl restart
apache_stop:
	@sudo apachectl stop
apache_httpd_ls:
	@ls -lh /etc/apache2/httpd.conf
apache_httpd_open:
	@sudo chmod 777 /etc/apache2/httpd.conf
apache_httpd_close:
	@sudo chmod 644 /etc/apache2/httpd.conf
#================================================
# macports
macports_update:
	sudo port selfupdate
#================================================
# cmd
cmd_chmod:
	chmod -R 777 $(GPROJECT_PATH)
#================================================
# git
git_status:
	@cd $(GPROJECT_PATH) && git status -u
git_push:
	@cd $(GPROJECT_PATH) && git pull && git add --all && git commit -m "Initial Commit" && git push -u origin master && chmod -R 777 $(GPROJECT_PATH) 
git_push_o:
	@cd $(GPROJECT_PATH) && git add --all && git commit -m "Initial Commit" && git push -u origin master
git_push_u:
	@cd $(GPROJECT_PATH) && git push -u origin master
git_pull:
	@cd $(GPROJECT_PATH) && git pull && chmod -R 777 $(GPROJECT_PATH)
git_add:
	@cd $(GPROJECT_PATH) && git add $(argv)
git_rm:
	@cd $(GPROJECT_PATH) && git rm -rf $(argv)
git_clone:
	@cd $(GPROJECT_ROOT) && git clone $(GGIT_URL) $(GGIT_NAME) 
git_config:
	@git config --global user.name "Gerard KESSE"
	@git config --global user.email "tiakagerard@hotmail.com"
	@git config --global core.editor "vim"
	@git config --list
git_store:
	@git config --global credential.helper store
#================================================

