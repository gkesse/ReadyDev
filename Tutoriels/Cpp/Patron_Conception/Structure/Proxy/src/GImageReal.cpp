//===============================================
#include "GImageReal.h"
//===============================================
GImageReal::GImageReal() {
    m_filename = "";
}
//===============================================
GImageReal::GImageReal(const string& filename) {
    m_filename = filename;
    loadImage();
}
//===============================================
GImageReal::~GImageReal() {

}
//===============================================
void GImageReal::loadImage() {
    cout << "Image : Load... | ";
    cout << m_filename << "\n";
}
//===============================================
void GImageReal::displayImage() {
    cout << "Image : Display | ";
    cout << m_filename << "\n";
}
//===============================================
