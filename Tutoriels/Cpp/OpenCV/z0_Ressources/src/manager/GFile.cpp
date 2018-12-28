//================================================
#include "GFile.h"
//================================================
GFile* GFile::m_instance = 0;
//================================================
GFile::GFile() {

}
//================================================
GFile::~GFile() {

}
//================================================
GFile* GFile::Instance() {
    if(m_instance == 0) {
        m_instance = new GFile;
    }
    return m_instance;
}
//================================================
void GFile::open(const string& file, const int& flags) {
    m_fs.open(file, flags);
}
//================================================
void GFile::write(const string& name, const int& data) {
    m_fs << name << data;
}
//================================================
void GFile::write(const string& name, const cv::Mat& data) {
    m_fs << name << data;
}
//================================================
void GFile::write(const string& name, double* data, const int& size) {
    m_fs << name << "[";
    for(int i = 0; i < size; i++) {
        m_fs << data[i];
    }
    m_fs << "]";
}
//================================================
void GFile::write(const string& name, map<string,string>& data) {
    m_fs << name << "[" << "{";
    for(auto& dataI : data) {
        m_fs << dataI.first << dataI.second;
    }
    m_fs << "}" << "]";
}
//================================================
void GFile::read(const string& name, int& data) {
    m_fs[name] >> data;
}
//================================================
void GFile::read(const string& name, cv::Mat& data) {
    m_fs[name] >> data;
}
//================================================
void GFile::release() {
    m_fs.release();
}
//================================================
