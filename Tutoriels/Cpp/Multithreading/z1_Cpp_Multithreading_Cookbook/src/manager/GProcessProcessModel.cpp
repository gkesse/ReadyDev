//===============================================
#include "GProcessProcessModel.h"
//===============================================
GProcessProcessModel* GProcessProcessModel::m_instance = 0;
//===============================================
GProcessProcessModel::GProcessProcessModel() {

}
//===============================================
GProcessProcessModel::~GProcessProcessModel() {

}
//===============================================
GProcessProcessModel* GProcessProcessModel::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessProcessModel;
    }
    return m_instance;
}
//===============================================
void GProcessProcessModel::run(int argc, char **argv) {
    cout << "\n### Modele de processus\n\n";
    STARTUPINFO lStartupInfo = {0};
    PROCESS_INFORMATION lProcessInformation = {0};
    BOOL lCreateProcess = CreateProcess(
                TEXT("C:\\Program Files (x86)\\Notepad++\\notepad++.exe"), NULL, NULL,
                NULL, FALSE, NULL, NULL, NULL, &lStartupInfo,
                &lProcessInformation);
    if (lCreateProcess) {
        cout << "Demarrage du processus\n"
             << "ID du processus: " << lProcessInformation.dwProcessId << "\n";
    }
    else {
        cout << "Erreur demarrage processus\n"
             << "Code d'erreur: " << GetLastError() << "\n";
    }
}
//===============================================
