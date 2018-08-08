//===============================================
#include "GProcessSettingPixel.h"
#include "GDraw.h"
#include "GConfig.h"
//===============================================
GProcessSettingPixel* GProcessSettingPixel::m_instance = 0;
//===============================================
GProcessSettingPixel::GProcessSettingPixel() {

}
//===============================================
GProcessSettingPixel::~GProcessSettingPixel() {

}
//===============================================
GProcessSettingPixel* GProcessSettingPixel::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessSettingPixel;
    }
    return m_instance;
}
//===============================================
void GProcessSettingPixel::run() {
    cv::namedWindow("Image Originale | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Image Niveau Gris | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Modification Pixel Image RGB | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Modification Pixel Image Niveau Gris | ReadyDev", cv::WINDOW_AUTOSIZE);

    cv::Mat lImgRgb = cv::imread("res/img/fruits.jpg",-1);
    cv::imshow("Image Originale | ReadyDev", lImgRgb);

    cv::Mat lImgGray;
    cv::cvtColor(lImgRgb, lImgGray, cv::COLOR_BGR2GRAY);
    cv::imshow("Image Niveau Gris | ReadyDev", lImgGray);
    //===============================================
    cv::Size lSize = lImgRgb.size();
    int lWidth = lSize.width;
    int lHeight = lSize.height;
    int lCenterX = lWidth/2;
    int lCenterY = lHeight/2;

    cout << "\n### Information Image\n\n";
    cout << "Taille: [" << lWidth << " x " << lHeight << "]\n";
    cout << "Point Central: (" << lCenterX << " ; " << lCenterY << ")\n";
    //===============================================
    GConfig::Instance()->setData("IMAGE_TYPE", "RGB");
    GDraw::Instance()->cercle(lImgRgb, lCenterX, lCenterY, 100);
    cv::imshow("Modification Pixel Image RGB | ReadyDev", lImgRgb);
    //===============================================
    GConfig::Instance()->setData("IMAGE_TYPE", "GRAY");
    GDraw::Instance()->cercle(lImgGray, lCenterX, lCenterY, 100);
    cv::imshow("Modification Pixel Image Niveau Gris | ReadyDev", lImgGray);
    //===============================================
    cv::waitKey(0);
}
//===============================================
