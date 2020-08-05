//===============================================
#include "GProcessConnection.h"
//===============================================
GProcessConnection* GProcessConnection::m_instance = 0;
//===============================================
GProcessConnection::GProcessConnection() {

}
//===============================================
GProcessConnection::~GProcessConnection() {

}
//===============================================
GProcessConnection* GProcessConnection::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessConnection;
    }
    return m_instance;
}
//===============================================
void GProcessConnection::run() {
    QPushButton* lButton = new QPushButton("Quitter");
    connect(lButton, SIGNAL(clicked()), qApp, SLOT(quit()));
    lButton->show();
}
//===============================================
