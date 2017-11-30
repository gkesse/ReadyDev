//===============================================
#include "GErrorLogger.h"
//===============================================
GErrorLogger::GErrorLogger(const int& level) {
    m_level = level;
    m_next = 0;
}
//===============================================
GErrorLogger::~GErrorLogger() {

}
//===============================================
void GErrorLogger::writeMessage(const string& msg) {
    cout << "Error Logger : " << msg << "\n";
}
//===============================================
