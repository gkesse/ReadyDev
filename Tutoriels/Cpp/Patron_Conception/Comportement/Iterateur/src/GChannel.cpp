//===============================================
#include "GChannel.h"
//===============================================
GChannel::GChannel() {
    string m_list[] = {"TF1", "France 2", "France 3", "Canal +", "Arte"};
    m_size = sizeof(m_list) / sizeof(string);
    for(int i = 0; i < m_size; i++) m_channel[i] = m_list[i];
    m_index = -1;
}
//===============================================
GChannel::~GChannel() {

}
//===============================================
void GChannel::reset() {
    m_index = -1;
}
//===============================================
bool GChannel::next() {
    if(m_index + 1 >= m_size) return false;
    m_index += 1;
    return true;
}
//===============================================
string GChannel::current() {
    return m_channel[m_index];
}
//===============================================
