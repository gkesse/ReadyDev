//===============================================
#include "GProcessKeyboard.h"
//===============================================
static GProcessKeyboardO* m_GProcessKeyboardO = 0;
//===============================================
GProcessKeyboardO* GProcessKeyboard_Constructor();
void GProcessKeyboard_Interface(GProcessKeyboardO* obj);
void GProcessKeyboard_Strategy(GProcessO* obj);
void GProcessKeyboard_Run();
//===============================================
GProcessKeyboardO* GProcessKeyboard_Constructor() {
    GProcessKeyboardO* lObj = (GProcessKeyboardO*)malloc(sizeof(GProcessKeyboardO));
    GProcessKeyboard_Interface(lObj);
    return lObj;
}
//===============================================
void GProcessKeyboard_Interface(GProcessKeyboardO* obj) {
    obj->Strategy = GProcessKeyboard_Strategy;
}
//===============================================
GProcessKeyboardO* GProcessKeyboard() {
    if(m_GProcessKeyboardO == 0) {
        m_GProcessKeyboardO = GProcessKeyboard_Constructor();
    }
    return m_GProcessKeyboardO;
}
//===============================================
void GProcessKeyboard_Strategy(GProcessO* obj) {
    obj->Run = GProcessKeyboard_Run;
}
//===============================================
void GProcessKeyboard_Run() {
    printf("### Saisir une chaine\n");
    char lData[100];
    scanf("%[^\n]s", &lData);
    printf("### Afficher la chaine\n");
    printf("%s\n", lData);
}
//===============================================
