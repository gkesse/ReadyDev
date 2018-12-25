//===============================================
#include "GProcessFileStorage.h"
#include "GFile.h"
#include "GPrint.h"
#include "GVector.h"
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
void GProcessFileStorage::run(int argc, char** argv) {
    GFile::Instance()->open("res/data/data.xml", cv::FileStorage::WRITE);
    GFile::Instance()->write("width", 640);
    GFile::Instance()->write("height", 480);
    GFile::Instance()->write("matrix", (cv::Mat_<int>(3,2) << 10, 20, 30, 40, 50, 60));
    double lDouble[] = {10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90};
    vector<double> lVector;
    GVector::Instance()->set(lVector, lDouble, 10);
    GFile::Instance()->write("array", lDouble, 10);
    map<string,string> lImage = {
        {"src", "res/img/image.png"},
        {"width", "640"},
        {"height", "480"}
    };
    GFile::Instance()->write("image", lImage);
    GFile::Instance()->release();

    int lWidth;
    int lHeight;
    cv::Mat lMatrix;
    GFile::Instance()->open("res/data/data.xml", cv::FileStorage::READ);
    GFile::Instance()->read("width", lWidth);
    GPrint::Instance()->print(lWidth, "Width");
    GFile::Instance()->read("height", lHeight);
    GPrint::Instance()->print(lHeight, "Height");
    GFile::Instance()->read("matrix", lMatrix);
    GPrint::Instance()->print(lMatrix, "Matrix");
    GFile::Instance()->release();
}
//===============================================
