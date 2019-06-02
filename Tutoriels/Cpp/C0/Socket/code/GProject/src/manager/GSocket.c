//===============================================
#include "GSocket.h"
#include "GSocketWindows.h"
#include "GSocketUnix.h"
#include "GString.h"
#include "GConfig.h"
//===============================================
GSocketO* GSocket_New() {
    GSocketO* lObj = (GSocketO*)malloc(sizeof(GSocketO));
    lObj->m_child = 0;
    return lObj;
}
//===============================================
void GSocket_Delete(GSocketO* obj) {
    if(obj != 0) {
        if(obj->m_child != 0) {
            free(obj->m_child);
            obj->m_child = 0;
        }
        free(obj);
        obj = 0;
    }
}
//===============================================
GSocketO* GSocket() {
	printf("%s\n", G_PLATEFORM_OS);
    if(GString()->Is_Equal(G_PLATEFORM_OS, "WINDOWS")) return GSocketWindows();
    if(GString()->Is_Equal(G_PLATEFORM_OS, "UNIX")) return GSocketUnix();
    return GSocketWindows();
}
//===============================================
