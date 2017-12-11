//===============================================
#include "GDeveloper.h"
#include "GDesigner.h"
#include "GAdaptor.h"
//===============================================
int main(int argc, char** argv) {
    shared_ptr<GDeveloper> m_designer(new GDesigner);
    shared_ptr<GDeveloper> m_architect(new GAdaptor);
    m_designer->writeCode();
    m_architect->writeCode();
}
//===============================================
