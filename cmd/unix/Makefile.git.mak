all:

status:
	@cd $(GPROJECT_PATH) && git status
push:
	@cd $(GPROJECT_PATH) && git pull && git add --all && git commit -m "Initial Commit" && git push -u origin master && sudo chmod -R 777 $(GPROJECT_PATH) 
push_o:
	@cd $(GPROJECT_PATH) && git add --all && git commit -m "Initial Commit" && git push -u origin master && sudo chmod -R 777 $(GPROJECT_PATH) 
pull:
	@cd $(GPROJECT_PATH) && git pull
add:
	@cd $(GPROJECT_PATH) && git add $(argv)
rm:
	@cd $(GPROJECT_PATH) && git rm $(argv)
clone:
	@cd $(GPROJECT_ROOT) && git clone $(GGIT_URL) $(GGIT_NAME) 
store:
	@git config --global credential.helper store

