all:

new:
	@cd $(GCMD_PATH) && echo "" > $(arg2) && chmod 777 $(arg2)
chmod:
	@sudo chmod -R 777 $(GPROJECT_PATH)
