//================================================
#include "GThread.h"
#include "GConfig.h"
//================================================
GThread* GThread::m_instance = 0;
//================================================
GThread::GThread() {
    m_appName = TEXT("C:\\Windows\\notepad.exe");
    m_libName = TEXT("C:\\Windows\\System32\\ntdll.dll");
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
    CreateProcess(m_appName, NULL, NULL, NULL, FALSE, NULL, NULL, NULL, &m_startupInfo, &m_processInformation);
    showProcessId();
    loadLibrary();
    system("pause");
}
//================================================
void GThread::showProcessId() {
    QString m_flag = GConfig::Instance()->getData("PROCESS_ID_SHOW_FLAG");
    if(m_flag != "TRUE") return;
    cout << "PROCESS_ID: " << m_processInformation.dwProcessId << "\n";
}
//================================================
void GThread::loadLibrary() {
    QString m_flag = GConfig::Instance()->getData("LIBRARY_LOAD_FLAG");
    if(m_flag != "TRUE") return;
    PROCESS_BASIC_INFORMATION m_processBasicInformation;
    HMODULE m_libPtr = LoadLibrary(m_libName);
    QEURYINFORMATIONPROCESS m_queryInformationProcess = (QEURYINFORMATIONPROCESS)GetProcAddress(m_libPtr, "NtQueryInformationProcess");
    NTSTATUS ntStatus = QueryInformationProcess(
    processInformation.hProcess,
    PROCESSINFOCLASS::ProcessBasicInformation,
    &pbi, sizeof(pbi), &uLength);
}
//================================================
