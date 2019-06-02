//===============================================
#include "GSocketWindows.h"
#include "GString.h"
//===============================================
static GSocketO* m_GSocketWindowsO = 0;
//===============================================
void GSocketWindows_Start(const int major, const int minor);
void GSocketWindows_Socket(const int addressFamily, const int type, const int protocol);
void GSocketWindows_Address(const int addressFamily, const char* ipAddress, const int port);
void GSocketWindows_Address2(const int addressFamily, const ulong ipAddress, const int port);
void GSocketWindows_Bind();
void GSocketWindows_Listen();
int GSocketWindows_Accept();
void GSocketWindows_Connect();
void GSocketWindows_Send();
void GSocketWindows_Recv();
void GSocketWindows_Close();
void GSocketWindows_Clean();
//===============================================
GSocketO* GSocketWindows_New() {
	GSocketO* lParent = GSocket_New();
	GSocketWindowsO* lChild = (GSocketWindowsO*)malloc(sizeof(GSocketWindowsO));

	lChild->m_parent = lParent;

	lParent->m_child = lChild;

	lParent->Delete = GSocketWindows_Delete;
	lParent->Start = GSocketWindows_Start;
	lParent->Socket = GSocketWindows_Socket;
	lParent->Address = GSocketWindows_Address;
	lParent->Address2 = GSocketWindows_Address2;
	lParent->Bind = GSocketWindows_Bind;
	lParent->Listen = GSocketWindows_Listen;
	lParent->Accept = GSocketWindows_Accept;
	lParent->Connect = GSocketWindows_Connect;
	lParent->Send = GSocketWindows_Send;
	lParent->Recv = GSocketWindows_Recv;
	lParent->Close = GSocketWindows_Close;
	lParent->Clean = GSocketWindows_Clean;
	return lParent;
}
//===============================================
void GSocketWindows_Delete(GSocketO* obj) {
	GSocket_Delete(obj);
}
//===============================================
GSocketO* GSocketWindows() {
	if(m_GSocketWindowsO == 0) {
		m_GSocketWindowsO = GSocketWindows_New();
	}
	return m_GSocketWindowsO;
}
//===============================================
void GSocketWindows_Start(const int major, const int minor) {
#if defined(__WIN32)
	printf("[ SOCKET ] Start...\n");
	WSADATA lWsadata;
	WSAStartup(MAKEWORD(major, major), &lWsadata);
#endif
}
//===============================================
void GSocketWindows_Socket(const int addressFamily, const int type, const int protocol) {
#if defined(__WIN32)
	printf("[ SOCKET ] Socket...\n");
	GSocketWindowsO* lSocketWindows = m_GSocketWindowsO->m_child;
	SOCKET* lSocket = &lSocketWindows->m_socket;
	*lSocket = socket(AF_INET, SOCK_STREAM, 0);
#endif
}
//===============================================
void GSocketWindows_Address(const int addressFamily, const char* ipAddress, const int port) {
#if defined(__WIN32)
	GSocketWindowsO* lSocketWindows = m_GSocketWindowsO->m_child;
	SOCKADDR_IN* lAddress = &lSocketWindows->m_address;
	lAddress->sin_addr.s_addr = inet_addr(ipAddress);
	lAddress->sin_family = addressFamily;
	lAddress->sin_port = htons(port);
#endif
}
//===============================================
void GSocketWindows_Address2(const int addressFamily, const ulong ipAddress, const int port) {
#if defined(__WIN32)
	GSocketWindowsO* lSocketWindows = m_GSocketWindowsO->m_child;
	SOCKADDR_IN* lAddress = &lSocketWindows->m_address;
	lAddress->sin_addr.s_addr = ipAddress;
	lAddress->sin_family = addressFamily;
	lAddress->sin_port = htons(port);
#endif
}
//===============================================
void GSocketWindows_Bind() {
#if defined(__WIN32)
	printf("[ SOCKET ] Bind...\n");
	GSocketWindowsO* lSocketWindows = m_GSocketWindowsO->m_child;
	SOCKET* lSocket = &lSocketWindows->m_socket;
	SOCKADDR_IN* lAddress = &lSocketWindows->m_address;
	int lSize = sizeof(*lAddress);
	bind(*lSocket, (SOCKADDR*)lAddress, lSize);
#endif
}
//===============================================
void GSocketWindows_Listen() {
#if defined(__WIN32)
	printf("[ SOCKET ] Listen...\n");
	GSocketWindowsO* lSocketWindows = m_GSocketWindowsO->m_child;
	SOCKET* lSocket = &lSocketWindows->m_socket;
	listen(*lSocket, 0);
#endif
}
//===============================================
int GSocketWindows_Accept() {
#if defined(__WIN32)
	printf("[ SOCKET ] Accept...\n");
	GSocketWindowsO* lSocketWindows = m_GSocketWindowsO->m_child;
	SOCKET* lSocket = &lSocketWindows->m_socket;
	SOCKADDR_IN lAddress;
	int lSize = sizeof(lAddress);
	int lOk = accept(*lSocket, (SOCKADDR*)&lAddress, &lSize);
	return lOk;
#endif
	return 0;
}
//===============================================
void GSocketWindows_Connect() {
#if defined(__WIN32)
	printf("[ SOCKET ] Connect...\n");
	GSocketWindowsO* lSocketWindows = m_GSocketWindowsO->m_child;
	SOCKET* lSocket = &lSocketWindows->m_socket;
	SOCKADDR_IN lAddress;
	int lSize = sizeof(lAddress);
	connect(*lSocket, (SOCKADDR*)&lAddress, lSize);
#endif
}
//===============================================
void GSocketWindows_Send() {
#if defined(__WIN32)
	printf("[ SOCKET ] Send...\n");
	GSocketWindowsO* lSocketWindows = m_GSocketWindowsO->m_child;
	SOCKET* lSocket = &lSocketWindows->m_socket;
	char* lBuffer = "Bonjour tout le monde";
	int lSize = strlen(lBuffer) + 1;
	send(*lSocket, lBuffer, lSize, 0);
#endif
}
//===============================================
void GSocketWindows_Recv() {
#if defined(__WIN32)
	printf("[ SOCKET ] Recv...\n");
	GSocketWindowsO* lSocketWindows = m_GSocketWindowsO->m_child;
	SOCKET* lSocket = &lSocketWindows->m_socket;
	char lBuffer[255];
	int lSize = sizeof(lBuffer);
	recv(*lSocket, lBuffer, lSize, 0);
#endif
}
//===============================================
void GSocketWindows_Close() {
#if defined(__WIN32)
	printf("[ SOCKET ] Close...\n");
	GSocketWindowsO* lSocketWindows = m_GSocketWindowsO->m_child;
	SOCKET* lSocket = &lSocketWindows->m_socket;
	closesocket(*lSocket);
#endif
}
//===============================================
void GSocketWindows_Clean() {
#if defined(__WIN32)
	printf("[ SOCKET ] Clean...\n");
	WSACleanup();
#endif
}
//===============================================
