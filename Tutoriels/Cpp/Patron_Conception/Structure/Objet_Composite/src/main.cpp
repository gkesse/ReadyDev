//===============================================
#include "GDocument.h"
#include "GFile.h"
#include "GFolder.h"
//===============================================
int main(int argc, char** argv) {
    GFile* m_mainFile = new GFile("main.cpp");
    GFile* m_headerHppFile = new GFile("GHeader.h");
    GFile* m_headerCppFile = new GFile("GHeader.cpp");

    GFolder* m_srcDir = new GFolder("src");
    GFolder* m_managerDir = new GFolder("manager");

    m_managerDir->addDoc(m_headerHppFile);
    m_managerDir->addDoc(m_headerCppFile);
    m_srcDir->addDoc(m_mainFile);
    m_srcDir->addDoc(m_managerDir);

    shared_ptr<GDocument> m_pDocument(m_srcDir);
    m_pDocument->printInfo();
}
//===============================================
