//===============================================
#include "GSocketUnix.h"
#include "GString.h"
//===============================================
static GSocketO* m_GSocketUnixO = 0;
//===============================================
void GSocketUnix_Start(const int major, const int minor);
void GSocketUnix_Socket(const int addressFamily, const int type, const int protocol);
void GSocketUnix_Address(const int addressFamily, const char* ipAddress, const int port);
void GSocketUnix_Address2(const int addressFamily, const ulong ipAddress, const int port);
void GSocketUnix_Bind();
void GSocketUnix_Listen();
int GSocketUnix_Accept();
void GSocketUnix_Connect();
void GSocketUnix_Send();
void GSocketUnix_Recv();
void GSocketUnix_Close();
void GSocketUnix_Clean();
//===============================================
GSocketO* GSocketUnix_New() {
	GSocketO* lParent = GSocket_New();
	GSocketUnixO* lChild = (GSocketUnixO*)malloc(sizeof(GSocketUnixO));

	lChild->m_parent = lParent;

	lParent->m_child = lChild;
	lParent->Delete = GSocketUnix_Delete;
	lParent->Start = GSocketUnix_Start;
	lParent->Socket = GSocketUnix_Socket;
	lParent->Address = GSocketUnix_Address;
	lParent->Address2 = GSocketUnix_Address2;
	lParent->Bind = GSocketUnix_Bind;
	lParent->Listen = GSocketUnix_Listen;
	lParent->Accept = GSocketUnix_Accept;
	lParent->Connect = GSocketUnix_Connect;
	lParent->Send = GSocketUnix_Send;
	lParent->Recv = GSocketUnix_Recv;
	lParent->Close = GSocketUnix_Close;
	lParent->Clean = GSocketUnix_Clean;
	return lParent;
}
//===============================================
void GSocketUnix_Delete(GSocketO* obj) {
	GSocket_Delete(obj);
}
//===============================================
GSocketO* GSocketUnix() {
	if(m_GSocketUnixO == 0) {
		m_GSocketUnixO = GSocketUnix_New();
	}
	return m_GSocketUnixO;
}
//===============================================
void GSocketUnix_Start(const int major, const int minor) {
#if defined(__unix)
	printf("[ SOCKET ] Start...\n");
#endif
}
//===============================================
void GSocketUnix_Socket(const int addressFamily, const int type, const int protocol) {
#if defined(__unix)
	printf("[ SOCKET ] Socket...\n");
#endif
}
//===============================================
void GSocketUnix_Address(const int addressFamily, const char* ipAddress, const int port) {
#if defined(__unix)
	printf("[ SOCKET ] Address...\n");
#endif
}
//===============================================
void GSocketUnix_Address2(const int addressFamily, const ulong ipAddress, const int port) {
#if defined(__unix)
	printf("[ SOCKET ] Address2...\n");
#endif
}
//===============================================
void GSocketUnix_Bind() {
#if defined(__unix)
	printf("[ SOCKET ] Bind...\n");
#endif
}
//===============================================
void GSocketUnix_Listen() {
#if defined(__unix)
	printf("[ SOCKET ] Listen...\n");
#endif
}
//===============================================
int GSocketUnix_Accept() {
#if defined(__unix)
	printf("[ SOCKET ] Accept...\n");
#endif
	return 0;
}
//===============================================
void GSocketUnix_Connect() {
#if defined(__unix)
	printf("[ SOCKET ] Connect...\n");
#endif
}
//===============================================
void GSocketUnix_Send() {
#if defined(__unix)
	printf("[ SOCKET ] Send...\n");
#endif
}
//===============================================
void GSocketUnix_Recv() {
#if defined(__unix)
	printf("[ SOCKET ] Recv...\n");
#endif
}
//===============================================
void GSocketUnix_Close() {
#if defined(__unix)
	printf("[ SOCKET ] Close...\n");
#endif
}
//===============================================
void GSocketUnix_Clean() {
#if defined(__unix)
	printf("[ SOCKET ] Clean...\n");
#endif
}
//===============================================
