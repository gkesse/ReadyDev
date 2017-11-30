//===============================================
#include "GDebugLogger.h"
//===============================================
GDebugLogger::GDebugLogger(const int& level) {
    m_level = level;
    m_next = 0;
}
//===============================================
GDebugLogger::~GDebugLogger() {

}
//===============================================
void GDebugLogger::writeMessage(const string& msg) {
    cout << "Debug Logger : " << msg << "\n";
}
//===============================================
