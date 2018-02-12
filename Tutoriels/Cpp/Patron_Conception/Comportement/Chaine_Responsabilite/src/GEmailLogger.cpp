//===============================================
#include "GEmailLogger.h"
//===============================================
GEmailLogger::GEmailLogger(const int& level) {
    m_level = level;
    m_next = 0;
}
//===============================================
GEmailLogger::~GEmailLogger() {

}
//===============================================
void GEmailLogger::writeMessage(const string& msg) {
    cout << "Email Logger : " << msg << "\n";
}
//===============================================
