//===============================================
#include "GProcessFileStorage.h"
#include "GVision.h"
#include "GPrint.h"
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
    GVision::Instance()->createFileStorage("STORAGE", "res/data/data.xml", cv::FileStorage::WRITE);
    GVision::Instance()->setFileStorageData("STORAGE", "WIDTH", 640);
    GVision::Instance()->setFileStorageData("STORAGE", "HEIGHT", 480);
    GVision::Instance()->setFileStorageData("STORAGE", "MATRIX", (cv::Mat_<double>(2,3) << 1, 2, 3, 4, 5, 6));
    vector<string> lAuthor;
    lAuthor.push_back("Gerard KESSE");
    lAuthor.push_back("gerard.kesse@readydev.com");
    GVision::Instance()->setFileStorageData("STORAGE", "AUTHOR", lAuthor);
    GVision::Instance()->releaseFileStorage("STORAGE");

    GVision::Instance()->createFileStorage("STORAGE", "res/data/data.xml", cv::FileStorage::READ);
    int lWidth = GVision::Instance()->getFileStorageDataInt("STORAGE", "WIDTH");
    int lHeight = GVision::Instance()->getFileStorageDataInt("STORAGE", "HEIGHT");
    cv::Mat lMatrix = GVision::Instance()->getFileStorageDataMat("STORAGE", "MATRIX");
    vector<string> lAuthorMap = GVision::Instance()->getFileStorageDataList("STORAGE", "AUTHOR");
    GVision::Instance()->releaseFileStorage("STORAGE");

    GPrint::Instance()->print(lWidth, "WIDTH");
    GPrint::Instance()->print(lHeight, "HEIGHT");
    GPrint::Instance()->print(lMatrix, "MATRIX");
    GPrint::Instance()->print(lAuthorMap, "AUTHOR");
}
//===============================================
