//===============================================
#include "GProcessConsole.h"
//===============================================
static GProcessConsoleO* m_GProcessConsoleO = 0;
//===============================================
GProcessConsoleO* GProcessConsole_Constructor();
void GProcessConsole_Interface(GProcessConsoleO* obj);
void GProcessConsole_Strategy(GProcessO* obj);
void GProcessConsole_Run();
//===============================================
GProcessConsoleO* GProcessConsole_Constructor() {
    GProcessConsoleO* lObj = (GProcessConsoleO*)malloc(sizeof(GProcessConsoleO));
    GProcessConsole_Interface(lObj);
    return lObj;
}
//===============================================
void GProcessConsole_Interface(GProcessConsoleO* obj) {
    obj->Strategy = GProcessConsole_Strategy;
}
//===============================================
GProcessConsoleO* GProcessConsole() {
    if(m_GProcessConsoleO == 0) {
        m_GProcessConsoleO = GProcessConsole_Constructor();
    }
    return m_GProcessConsoleO;
}
//===============================================
void GProcessConsole_Strategy(GProcessO* obj) {
    obj->Run = GProcessConsole_Run;
}
//===============================================
void GProcessConsole_Run() {
    printf("### Afficher un message\n");
    printf("Bonjour tout le monde\n");
}
//===============================================
