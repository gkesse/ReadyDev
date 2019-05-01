GSRC = code/GProject/src
GBIN = bin
GBUILD = build
GTARGET = $(GBIN)/GProject.exe

GINCS = \
    -I$(GSRC)/manager \
    -IC:\Users\sabine\Downloads\Gerard\gtk+-bundle_3.6.4-20130513_win64\include\glib-2.0 \
    -IC:\Users\sabine\Downloads\Gerard\gtk+-bundle_3.6.4-20130513_win64\lib\glib-2.0\include \
    $(GGTK_INCS) \
    
GLIBS = \
    $(GGTK_LIBS) \
    
GOBJS = \
    $(patsubst $(GSRC)/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/*.c)) \
    $(patsubst $(GSRC)/manager/%.c, $(GBUILD)/%.o, $(wildcard $(GSRC)/manager/*.c))
    
all: $(GOBJS)
	gcc -o $(GTARGET) $(GOBJS) $(GLIBS)
$(GBUILD)/%.o: $(GSRC)/%.c
	gcc -c $< -o $@ $(GINCS)
$(GBUILD)/%.o: $(GSRC)/manager/%.c
	gcc -c $< -o $@ $(GINCS)
clean:
	del /q $(GBUILD)\*.o $(GBIN)\*.exe
