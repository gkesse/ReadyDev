//===============================================
#include "GProcessPluginDesigner.h"
//===============================================
GProcessPluginDesigner* GProcessPluginDesigner::m_instance = 0;
//===============================================
GProcessPluginDesigner::GProcessPluginDesigner() {

}
//===============================================
GProcessPluginDesigner::~GProcessPluginDesigner() {

}
//===============================================
GProcessPluginDesigner* GProcessPluginDesigner::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessPluginDesigner;
    }
    return m_instance;
}
//===============================================
void GProcessPluginDesigner::run() {
    QLabel* lLabel = new QLabel("Bonjour tout le monde");
    lLabel->show();
}
//===============================================
