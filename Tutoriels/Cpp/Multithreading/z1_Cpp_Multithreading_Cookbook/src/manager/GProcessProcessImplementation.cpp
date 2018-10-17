//===============================================
#include "GProcessProcessImplementation.h"
//===============================================
GProcessProcessImplementation* GProcessProcessImplementation::m_instance = 0;
//===============================================
typedef NTSTATUS (NTAPI* QEURYINFORMATIONPROCESS)(
        IN HANDLE ProcessHandle,
        IN PROCESSINFOCLASS ProcessInformationClass,
        OUT PVOID ProcessInformation,
        IN ULONG ProcessInformationLength,
        OUT PULONG ReturnLength OPTIONAL
        );
//===============================================
GProcessProcessImplementation::GProcessProcessImplementation() {

}
//===============================================
GProcessProcessImplementation::~GProcessProcessImplementation() {

}
//===============================================
GProcessProcessImplementation* GProcessProcessImplementation::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessProcessImplementation;
    }
    return m_instance;
}
//===============================================
void GProcessProcessImplementation::run(int argc, char **argv) {
    cout << "\n### Implementation de processus\n\n";
    STARTUPINFO lStartupInfo = {0};
    PROCESS_INFORMATION lProcessInformation = {0};
    BOOL lCreateProcess = CreateProcess(
                TEXT("C:\\Windows\\notepad.exe"), NULL, NULL,
                NULL, FALSE, NULL, NULL, NULL, &lStartupInfo,
                &lProcessInformation);

    if(lCreateProcess) {
        cout << "Demarrage du processus\n";
        cout << "ID du processus: " << lProcessInformation.dwProcessId << "\n";
        PROCESS_BASIC_INFORMATION lPbi;
        ULONG lLength = 0;
        HMODULE lLoadLibrary = LoadLibrary(TEXT("C:\\Windows\\System32\\ntdll.dll"));

        if(lLoadLibrary) {
            QEURYINFORMATIONPROCESS lQueryInformationProcess = (QEURYINFORMATIONPROCESS)GetProcAddress(
                        lLoadLibrary, "NtQueryInformationProcess");

            if(lQueryInformationProcess) {
                NTSTATUS lNtStatus = lQueryInformationProcess(
                            lProcessInformation.hProcess,
                            PROCESSINFOCLASS::ProcessBasicInformation,
                            &lPbi, sizeof(lPbi), &lLength);

                if(NT_SUCCESS(lNtStatus)) {
                    cout << "ID du processus (via PCB): " << lPbi.UniqueProcessId << "\n";
                }
                else {
                    cout << "Erreur demarrage PCB: " << GetLastError() << "\n";
                }
            }
            else {
                cout << "Erreur lecture fonction NtQueryInformationProcess: " << GetLastError() << "\n";
            }
            FreeLibrary(lLoadLibrary);
        }
        else
        {
            cout << "Erreur chargement librairie ntdll.dll: " << GetLastError() << "\n";
        }
    }
    else {
        cout << "Erreur demarrage processus: " << GetLastError() << "\n";
    }
}
//===============================================
