#ifndef _GSocketWindows_
#define _GSocketWindows_
//===============================================
#include "GSocket.h"
//===============================================
typedef struct _GSocketWindowsO GSocketWindowsO;
//===============================================
struct _GSocketWindowsO {
    GSocketO* m_parent;
#if defined(__WIN32)
    SOCKET m_socket;
    SOCKADDR_IN m_address;
#endif
};
//===============================================
GSocketO* GSocketWindows_New();
void GSocketWindows_Delete(GSocketO* obj);
GSocketO* GSocketWindows();
//===============================================
#endif
//===============================================
