
status:
	@cd $(GPROJECT_PATH) && git status
push:
	@cd $(GPROJECT_PATH) && git pull && git add --all && git commit -m "Initial Commit" && git push -u origin master && sudo chmod -R 777 $(GPROJECT_PATH) 
clone:
	@cd $(GPROJECT_ROOT) && git clone $(GGIT_URL) $(GGIT_NAME) 

