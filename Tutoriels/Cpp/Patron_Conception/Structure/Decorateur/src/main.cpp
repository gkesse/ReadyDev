//===============================================
#include "GWindow.h"
#include "GSimple.h"
#include "GHorizontal.h"
#include "GVertical.h"
//===============================================
int main(int argc, char** argv) {
    GWindow* m_window = new GSimple;
    m_window = new GHorizontal(m_window);
    m_window = new GVertical(m_window);
    shared_ptr<GWindow> m_pWindow(m_window);
    m_pWindow->printDescription();
}
//===============================================
