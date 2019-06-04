//===============================================
#ifndef _GSocket_
#define _GSocket_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GSocketO GSocketO;
//===============================================
struct _GSocketO {
    void* m_child;
    void (*Delete)(GSocketO* obj);
    void (*Start)(const int major, const int minor);
    void (*Socket)(const int addressFamily, const int type, const int protocol);
    void (*Address)(const int addressFamily, const char* ipAddress, const int port);
    void (*Address2)(const int addressFamily, const ulong pAddress, const int port);
    void (*Bind)();
    void (*Listen)();
    int (*Accept)();
    void (*Connect)();
    void (*Send)();
    void (*Recv)();
    void (*Close)();
    void (*Clean)();
};
//===============================================
GSocketO* GSocket_New();
void GSocket_Delete(GSocketO* obj);
GSocketO* GSocket();
//===============================================
#endif
//===============================================
