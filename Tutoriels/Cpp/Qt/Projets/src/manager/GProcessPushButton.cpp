//===============================================
#include "GProcessPushButton.h"
#include "GQt.h"
#include "GPicto.h"
#include "GStyle.h"
//===============================================
GProcessPushButton* GProcessPushButton::m_instance = 0;
//===============================================
GProcessPushButton::GProcessPushButton() {

}
//===============================================
GProcessPushButton::~GProcessPushButton() {

}
//===============================================
GProcessPushButton* GProcessPushButton::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessPushButton;
    }
    return m_instance;
}
//===============================================
void GProcessPushButton::run(int argc, char **argv) {
    QApplication lApp(argc, argv);
    GStyle::Instance()->load("data/css/style.css");

    GQt::Instance()->createPushButton("CREATE", "Créer", fa::plus, this, SLOT(slotCreateButtonClicked()));
    GQt::Instance()->createPushButton("READ", "Lire", fa::filetexto, this, SLOT(slotReadButtonClicked()));
    GQt::Instance()->createPushButton("UPDATE", "Modifier", fa::refresh, this, SLOT(slotUpdateButtonClicked()));
    GQt::Instance()->createPushButton("DELETE", "Supprimer", fa::trasho, this, SLOT(slotDeleteButtonClicked()));
    GQt::Instance()->createHBoxLayout("MAIN", {"CREATE", "READ", "UPDATE", "DELETE"});

    GQt::Instance()->createWidget("WINDOW", "GWindow", "MAIN");
    GQt::Instance()->showWidget("WINDOW");

    lApp.exec();
}
//===============================================
void GProcessPushButton::slotCreateButtonClicked() {
    cout << "slotCreateButtonClicked()...\n";
}
//===============================================
void GProcessPushButton::slotReadButtonClicked() {
    cout << "slotReadButtonClicked()...\n";
}
//===============================================
void GProcessPushButton::slotUpdateButtonClicked() {
    cout << "slotUpdateButtonClicked()...\n";
}
//===============================================
void GProcessPushButton::slotDeleteButtonClicked() {
    cout << "slotDeleteButtonClicked()...\n";
}
//===============================================
