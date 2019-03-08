//===============================================
#include "GProcessFileStorage.h"
#include "GVision.h"
//===============================================
GProcessFileStorage* GProcessFileStorage::m_instance = 0;
//===============================================
GProcessFileStorage::GProcessFileStorage() {

}
//===============================================
GProcessFileStorage::~GProcessFileStorage() {

}
//===============================================
GProcessFileStorage* GProcessFileStorage::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessFileStorage;
    }
    return m_instance;
}
//===============================================
void GProcessFileStorage::run() {
    GVision::Instance()->createFileStorage("STORAGE", "res/data/data.yml", cv::FileStorage::WRITE);
    GVision::Instance()->setFileStorageData("STORAGE", "w", 640);
    GVision::Instance()->setFileStorageData("STORAGE", "h", 480);
    GVision::Instance()->releaseFileStorage("STORAGE");
}
//===============================================
