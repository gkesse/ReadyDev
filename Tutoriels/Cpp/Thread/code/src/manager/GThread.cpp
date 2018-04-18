//================================================
#include "GThread.h"
//================================================
GThread* GThread::m_instance = 0;
//================================================
GThread::GThread() {
    m_appName = TEXT("C:\\Windows\\notepad.exe");
}
//================================================
GThread::~GThread() {

}
//================================================
GThread* GThread::Instance() {
    if(m_instance == 0) {
        m_instance = new GThread;
    }
    return m_instance;
}
//================================================
void GThread::runThread() {
    STARTUPINFO m_startupInfo = {0};
    PROCESS_INFORMATION m_processInformation = {0};
    CreateProcess(m_appName, NULL, NULL, NULL, FALSE, NULL, NULL, NULL, &m_startupInfo, &m_processInformation);
    cout << "dwProcessId: " << m_processInformation.dwProcessId << "\n";
    system("pause");
}
//================================================
