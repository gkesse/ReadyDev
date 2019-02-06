//===============================================
#include "GProcessOperation.h"
//===============================================
static GProcessOperationO* m_GProcessOperationO = 0;
//===============================================
GProcessOperationO* GProcessOperation_Constructor();
void GProcessOperation_Interface(GProcessOperationO* obj);
void GProcessOperation_Strategy(GProcessO* obj);
void GProcessOperation_Run();
//===============================================
GProcessOperationO* GProcessOperation_Constructor() {
    GProcessOperationO* lObj = (GProcessOperationO*)malloc(sizeof(GProcessOperationO));
    GProcessOperation_Interface(lObj);
    return lObj;
}
//===============================================
void GProcessOperation_Interface(GProcessOperationO* obj) {
    obj->Strategy = GProcessOperation_Strategy;
}
//===============================================
GProcessOperationO* GProcessOperation() {
    if(m_GProcessOperationO == 0) {
        m_GProcessOperationO = GProcessOperation_Constructor();
    }
    return m_GProcessOperationO;
}
//===============================================
void GProcessOperation_Strategy(GProcessO* obj) {
    obj->Run = GProcessOperation_Run;
}
//===============================================
void GProcessOperation_Run() {
    printf("### Effectuer une addition\n");
    int lAdd = 20 + 10;
    printf("### Afficher l'addition\n");
    printf("%d\n", lAdd);
}
//===============================================
