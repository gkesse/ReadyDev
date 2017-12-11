//===============================================
#include "GFolder.h"
//===============================================
GFolder::GFolder() {
    m_name = "";
}
//===============================================
GFolder::GFolder(const string& name) {
    m_name = name;
}
//===============================================
GFolder::~GFolder() {
    for(int i = 0; i < m_docMap.size(); i++) {
        GDocument* m_doc = m_docMap[i];
        delete m_doc;
    }
}
//===============================================
void GFolder::addDoc(GDocument* doc) {
    m_docMap.push_back(doc);
}
//===============================================
void GFolder::printInfo() {
    cout << "Folder : " << m_name << " | ";
    cout << "Content : " << m_docMap.size() << " ...\n";
    for(int i = 0; i < m_docMap.size(); i++) {
        GDocument* m_doc = m_docMap[i];
        m_doc->printInfo();
    }
}
//===============================================
