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
	@git config --global credential.helper store
git_ssh:
	@cd $(GPROJECT_PATH) && git remote set-url origin ssh://git@github.com/gkesse/ReadyDev.git
git_https:
	@cd $(GPROJECT_PATH) && git remote set-url origin https://github.com/gkesse/ReadyDev.git
git_remote:
	@cd $(GPROJECT_PATH) && git remote -v
#================================================
