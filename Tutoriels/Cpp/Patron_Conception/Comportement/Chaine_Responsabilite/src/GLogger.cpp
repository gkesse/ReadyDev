//===============================================
#include "GLogger.h"
//===============================================
GLogger* GLogger::setNext(GLogger* next) {
    m_next = next;
    return m_next;
}
//===============================================
void GLogger::message(const string& msg, const int& priority) {
    if(m_level <= priority) {writeMessage(msg);}
    if(m_next != 0) {m_next->message(msg, priority);}
}
//===============================================
