//===============================================
#include "GProcessGettingPixel.h"
//===============================================
GProcessGettingPixel* GProcessGettingPixel::m_instance = 0;
//===============================================
GProcessGettingPixel::GProcessGettingPixel() {

}
//===============================================
GProcessGettingPixel::~GProcessGettingPixel() {

}
//===============================================
GProcessGettingPixel* GProcessGettingPixel::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessGettingPixel;
    }
    return m_instance;
}
//===============================================
void GProcessGettingPixel::run() {
    cv::namedWindow("Image Originale | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Image Niveau Gris | ReadyDev", cv::WINDOW_AUTOSIZE);

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
    int x = lCenterX;
    int y = lCenterY;

    cv::Vec3b lPixelRgb = lImgRgb.at<cv::Vec3b>(y, x);
    uchar lBlue = lPixelRgb[0];
    uchar lGreen = lPixelRgb[1];
    uchar lRed = lPixelRgb[2];

    cout << "\n### Lecture Pixel Image RGB\n\n";
    cout << "Pixel(" << x << " ; " << y << ") = ";
    cout << "RGB(" << (int)lRed << " ; " << (int)lGreen << " ; " << (int)lBlue << ")\n";
    //===============================================
    uchar lPixelGray = lImgGray.at<uchar>(y, x);

    cout << "\n### Lecture Pixel Image Niveau Gris\n\n";
    cout << "Pixel(" << x << " ; " << y << ") = " << (int)lPixelGray << "\n";

    cv::waitKey(0);
}
//===============================================
