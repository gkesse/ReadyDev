<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la vision par ordinateur en C++ avec OpenCV</div></a></div></div><div class="Body2 Orange"><b>OpenCV</b> est une bibliothèque pour la vision par ordinateur.<br>Le but de ce tutoriel est de vous apprendre la vision par ordinateur en <b>C++</b> avec <b>OpenCV</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la vision par ordinateur en C++ avec OpenCV, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- OpenCV, comme bibliothèque de vision par ordinateur.<br>-    MinGW, comme compilateur.<br>- CMake, comme outil de construction.<br>- Qt, comme environnement de développement intégré.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger OpenCV</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://opencv.org/">https://opencv.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Télécharger CMake</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://cmake.org/download/">https://cmake.org/download/</a><br><br><h3 class="Title8 GTitle3">Télécharger Qt</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher une image"><a class="Link3" href="#">Afficher une image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">afficher une image</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Afficher une image</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessDisplayPicture::run() {
    cv::Mat lImg = cv::imread("res/img/fruits.jpg",-1);
    if(lImg.empty()) return;
    cv::namedWindow("Afficher Image | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::imshow("Afficher Image | ReadyDev", lImg);
    cv::waitKey(0);
    cv::destroyWindow("Afficher Image | ReadyDev");
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Display_Picture.png" alt="img/Display_Picture.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Lire un fichier vidéo"><a class="Link3" href="#">Lire un fichier vidéo</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">lire un fichier vidéo</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Lire un fichier vidéo</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessReadVideo::run() {
    cv::namedWindow("Lire Vidéo | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::VideoCapture lCap;
    lCap.open("res/video/tree.avi");
    cv::Mat lFrame;

    while(1) {
        lCap >> lFrame;
        if(lFrame.empty()) break;
        cv::imshow("Lire Vidéo | ReadyDev", lFrame);
        if(cv::waitKey(33) >= 0) break;
    }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Read_Video.png" alt="img/Read_Video.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Ajouter une barre de défilement"><a class="Link3" href="#">Ajouter une barre de défilement</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">ajouter une barre de défilement</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br>Une barre de défilement (Slider) permet d'associer une position à une fonction de rappel.<br><br><h3 class="Title8 GTitle3">Ajouter une barre de défilement</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessTrackbarSlider::run() {
    cv::namedWindow("Barre Slider | ReadyDev", cv::WINDOW_AUTOSIZE);
    m_trackbar.cap.open("res/video/tree.avi");
    int lFrames = (int)m_trackbar.cap.get(cv::CAP_PROP_FRAME_COUNT);
    int lWidth = (int)m_trackbar.cap.get(cv::CAP_PROP_FRAME_WIDTH);
    int lHeight = (int)m_trackbar.cap.get(cv::CAP_PROP_FRAME_HEIGHT);

    cout << "Nombre Frames: " << lFrames << "\n";
    cout << "Dimensions Frame: (" << lWidth << ", " << lHeight << ")\n";

    cv::createTrackbar("Position", "Barre Slider | ReadyDev", &amp;m_position, lFrames, onTrackbarSlider, &amp;m_trackbar);

    cv::Mat lFrame;

    while(1) {
        if(m_trackbar.run != 0) {
            m_trackbar.cap >> lFrame;
            if(lFrame.empty()) break;
            int lCurrentPos = (int)m_trackbar.cap.get(cv::CAP_PROP_POS_FRAMES);
            m_trackbar.dontset = 1;
            cv::setTrackbarPos("Position", "Barre Slider | ReadyDev", lCurrentPos);
            cv::imshow( "Barre Slider | ReadyDev", lFrame);
            if(m_trackbar.run == 1) {m_trackbar.run = 0;};
        }
        char lChar = (char)cv::waitKey(10);
        if(lChar == 's') {m_trackbar.run = 1; cout << "Execution Pas a Pas: " << m_trackbar.run << "\n";}
        if(lChar == 'r') {m_trackbar.run = -1; cout << "Execution Mode: " << m_trackbar.run << "\n";}
        if(lChar == 27) break;
    }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Fonction de rappel</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessTrackbarSlider::onTrackbarSlider(int pos, void *params) {
    GTrackbar* lTrackbar = (GTrackbar*)params;
    lTrackbar->cap.set(cv::CAP_PROP_POS_FRAMES, pos);
    if(lTrackbar->dontset == 0) {lTrackbar->run = 1;}
    lTrackbar->dontset = 0;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Structure des paramètres</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
typedef struct {
    cv::VideoCapture cap;
    int run;
    int dontset;
} GTrackbar;
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Trackbar_Slider.png" alt="img/Trackbar_Slider.png"></div><br><div class="Img3 GImage"><img src="img/Trackbar_Slider_02.png" alt="img/Trackbar_Slider_02.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Lisser une image avec le filtre gaussien"><a class="Link3" href="#">Lisser une image avec le filtre gaussien</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">lisser une image avec le filtre gaussien</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br>Un filtre gaussien permet de flouter une image.<br><br><h3 class="Title8 GTitle3">Lisser une image avec le filtre gaussien</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessSmoothingImage::run() {
    cv::namedWindow("Image Originale | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Image Lissée | ReadyDev", cv::WINDOW_AUTOSIZE);

    cv::Mat lImage = cv::imread("res/img/fruits.jpg",-1);
    cv::imshow("Image Originale | ReadyDev", lImage);

    cv::Mat lSmooth;
    cv::GaussianBlur(lImage, lSmooth, cv::Size(5,5), 3, 3);
    cv::GaussianBlur(lSmooth, lSmooth, cv::Size(5,5), 3, 3);

    cv::imshow("Image Lissée | ReadyDev", lSmooth);

    cv::waitKey(0);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Image_Originale.png" alt="img/Image_Originale.png"></div><br><div class="Img3 GImage"><img src="img/Smoothing_Image.png" alt="img/Smoothing_Image.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une pyramide d'images"><a class="Link3" href="#">Créer une pyramide d'images</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer une pyramide d'images</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br>Une pyramide d'image permet de changer les échelles dans lesquelles une scène observée.<br><br><h3 class="Title8 GTitle3">Créer une pyramide d'images</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessImagePyramid::run() {
    cv::namedWindow("Image Originale | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Pyramide Image 01 | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Pyramide Image 02 | ReadyDev", cv::WINDOW_AUTOSIZE);

    cv::Mat lImage = cv::imread("res/img/fruits.jpg",-1);
    cv::imshow("Image Originale | ReadyDev", lImage);

    cv::Mat lPyramid;
    cv::pyrDown(lImage, lPyramid);
    cv::imshow("Pyramide Image 01 | ReadyDev", lPyramid);

    cv::Mat lPyramid2;
    cv::pyrDown(lPyramid, lPyramid2);
    cv::imshow("Pyramide Image 02 | ReadyDev", lPyramid2);

    cv::waitKey(0);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Image_Originale.png" alt="img/Image_Originale.png"></div><br><div class="Img3 GImage"><img src="img/Image_Pyramid.png" alt="img/Image_Pyramid.png"></div><br><div class="Img3 GImage"><img src="img/Image_Pyramid_02.png" alt="img/Image_Pyramid_02.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Détecter les contours avec le filtre de canny"><a class="Link3" href="#">Détecter les contours avec le filtre de canny</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">détecter les contours avec le filtre de canny</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le filtre de canny permet de détecter des contours dans une image.<br><br><h3 class="Title8 GTitle3">Détecter les contours avec le filtre de canny</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessCannyEdge::run() {
    cv::namedWindow("Image Originale | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Image Niveau Gris | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::namedWindow("Détection Contour | ReadyDev", cv::WINDOW_AUTOSIZE);

    cv::Mat lImgRgb = cv::imread("res/img/fruits.jpg",-1);
    cv::imshow("Image Originale | ReadyDev", lImgRgb);

    cv::Mat lImgGray;
    cv::cvtColor(lImgRgb, lImgGray, cv::COLOR_BGR2GRAY);
    cv::imshow("Image Niveau Gris | ReadyDev", lImgGray);

    cv::Mat lImgCanny;
    cv::Canny(lImgGray, lImgCanny, 10, 100, 3, true);
    cv::imshow("Détection Contour | ReadyDev", lImgCanny);

    cv::waitKey(0);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Image_Originale.png" alt="img/Image_Originale.png"></div><br><div class="Img3 GImage"><img src="img/Image_Niveau_Gris.png" alt="img/Image_Niveau_Gris.png"></div><br><div class="Img3 GImage"><img src="img/Canny_Edge.png" alt="img/Canny_Edge.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Lire la valeur d'un pixel"><a class="Link3" href="#">Lire la valeur d'un pixel</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">lire la valeur d'un pixel</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br>Un pixel permet de définir la couleur associée à un point de l'image.<br><br><h3 class="Title8 GTitle3">Lire la valeur d'un pixel</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
    //===============================================
    cv::waitKey(0);
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Image_Originale.png" alt="img/Image_Originale.png"></div><br><div class="Img3 GImage"><img src="img/Image_Niveau_Gris.png" alt="img/Image_Niveau_Gris.png"></div><br><div class="Img3 GImage"><img src="img/Getting_Pixel.png" alt="img/Getting_Pixel.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Modifier la valeur d'un pixel"><a class="Link3" href="#">Modifier la valeur d'un pixel</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">modifier la valeur d'un pixel</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br>Un pixel permet de définir la couleur associée à un point de l'image.<br><br><h3 class="Title8 GTitle3">Modifier la valeur d'un pixel</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Modification d'un pixel RGB</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
void GDrawRgb::cercle(cv::Mat& img, const int& xC, const int& yC, const int& r) {
    double lAngle = 0.0;
    while(1) {
        double lRad = qDegreesToRadians(lAngle);
        double xR = r*qCos(lRad);
        double yR = r*qSin(lRad);
        int x = xC + (int)xR;
        int y = yC + (int)yR;

        cv::Vec3b lColorRgb;
        lColorRgb[0] = 255;
        lColorRgb[1] = 0;
        lColorRgb[2] = 0;

        img.at<cv::Vec3b>(y, x) = lColorRgb;

        lAngle += 0.1;
        if(lAngle > 360.0) break;
    }
}
//================================================
</xmp></pre></div><br><h3 class="Title8 GTitle3">Modification d'un pixel en niveau de gris</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//================================================
void GDrawGray::cercle(cv::Mat& img, const int& xC, const int& yC, const int& r) {
    double lAngle = 0.0;
    while(1) {
        double lRad = qDegreesToRadians(lAngle);
        double xR = r*qCos(lRad);
        double yR = r*qSin(lRad);
        int x = xC + (int)xR;
        int y = yC + (int)yR;

        uchar lColorGray = 0;

        img.at<uchar>(y, x) = lColorGray;

        lAngle += 0.1;
        if(lAngle > 360.0) break;
    }
}
//================================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Setting_Pixel.png" alt="img/Setting_Pixel.png"></div><br><div class="Img3 GImage"><img src="img/Setting_Pixel_02.png" alt="img/Setting_Pixel_02.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Lire une camera USB"><a class="Link3" href="#">Lire une camera USB</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">lire une camera USB</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br>Une camera USB permet d'enregistrer des images vidéo à partir d'un port USB.<br><br><h3 class="Title8 GTitle3">Lire une camera USB</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessCameraUsb::run() {
    cv::namedWindow("Camera USB | ReadyDev", cv::WINDOW_AUTOSIZE);
    cv::VideoCapture lCap;
    lCap.open(0);
    if(lCap.isOpened() == false) return;
    cv::Mat lFrame;

    while(1) {
        lCap >> lFrame;
        if(lFrame.empty()) break;
        cv::imshow("Camera USB | ReadyDev", lFrame);
        if(cv::waitKey(33) >= 0) break;
    }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Camera_Usb.png" alt="img/Camera_Usb.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Décodage de QRcode"><a class="Link3" href="#">Décodage de QRcode</a></h1><div class="Body3">Le but de cette section est de vous apprendre le <span class="GColor1" style="color:lime;">Décodage de QRcode</span> avec OpenCV.<br><br>Le QRcode est un type de code-barres à 2 dimensions.<br>Il est utilisé pour stocker du texte sous la forme d'une image 2D.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589279612854"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589279612854");</script></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Résultat de détection de QRcode"><a class="Link9" href="#Décodage de QRcode">Résultat de détection de QRcode</a></h2><br><div class="Img3 GImage"><img src="img/QRcode.png" alt="img/QRcode.png"></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Résultat de décodage de QRcode"><a class="Link9" href="#Décodage de QRcode">Résultat de décodage de QRcode</a></h2><br><div class="Img3 GImage"><img src="img/QRcode_02.png" alt="img/QRcode_02.png"></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Script d'encodage de QRcode"><a class="Link9" href="#Décodage de QRcode">Script d'encodage de QRcode</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#------------------------------------------------
# encoder qrcode
#------------------------------------------------
GTEXT="email:MY_EMAIL;password:MY_PASSWORD"
GIMG="qrcode.png"
qrencode -o $GIMG "$GTEXT"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Script de décodage de QRcode"><a class="Link9" href="#Décodage de QRcode">Script de décodage de QRcode</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#------------------------------------------------
# decoder qrcode
#------------------------------------------------
GIMG="qrcode.png"
zbarimg $GIMG</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Chargement de l'image"><a class="Link9" href="#Décodage de QRcode">Chargement de l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::loadImage(std::string imgId, std::string filename) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = new cv::Mat;
    *lImg = cv::imread(filename, -1);
    m_imgMap[imgId] = lImg;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Conversion de l'image en niveau de gris"><a class="Link9" href="#Décodage de QRcode">Conversion de l'image en niveau de gris</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::convertGrayImage(std::string imgId, std::string outId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    cv::Mat* lOut = m_imgMap[outId];
    cv::cvtColor(*lImg, *lOut, cv::COLOR_BGR2GRAY);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Initialisation du décodeur"><a class="Link9" href="#Décodage de QRcode">Initialisation du décodeur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GZbar::createImage(std::string imageId, std::string imgId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = GOpenCV::Instance()-&gt;getImage(imgId);
    zbar::Image* lImage = new zbar::Image(lImg-&gt;cols, lImg-&gt;rows, "Y800", lImg-&gt;data, lImg-&gt;cols * lImg-&gt;rows);
    zbar::ImageScanner* lScanner = new zbar::ImageScanner;
    std::vector&lt;std::string&gt;* lStrings = new std::vector&lt;std::string&gt;;
    std::vector&lt;cv::Point&gt;* lPoints = new std::vector&lt;cv::Point&gt;;
    lScanner-&gt;set_config(zbar::ZBAR_NONE, zbar::ZBAR_CFG_ENABLE, 1);
    lScanner-&gt;scan(*lImage);
    m_imageMap[imageId] = lImage;
    m_scannerMap[imageId] = lScanner;
    m_stringsMap[imageId] = lStrings;
    m_pointsMap[imageId] = lPoints;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Décodage du QRcode"><a class="Link9" href="#Décodage de QRcode">Décodage du QRcode</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GZbar::getSymbol(std::string imageId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    zbar::Image* lImage = m_imageMap[imageId];
    std::vector&lt;std::string&gt;* lStrings = m_stringsMap[imageId];
    for(zbar::Image::SymbolIterator lSymbol = lImage-&gt;symbol_begin(); lSymbol != lImage-&gt;symbol_end(); ++lSymbol) {
        lStrings-&gt;push_back(lSymbol-&gt;get_type_name());
        lStrings-&gt;push_back(lSymbol-&gt;get_data());
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Détection des points de contour du QRcode"><a class="Link9" href="#Décodage de QRcode">Détection des points de contour du QRcode</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GZbar::getLocation(std::string imageId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    zbar::Image* lImage = m_imageMap[imageId];
    std::vector&lt;cv::Point&gt;* lPoints = m_pointsMap[imageId];
    for(zbar::Image::SymbolIterator lSymbol = lImage-&gt;symbol_begin(); lSymbol != lImage-&gt;symbol_end(); ++lSymbol) {
        for(int i = 0; i &lt; lSymbol-&gt;get_location_size(); i++) {
            cv::Point lPoint(lSymbol-&gt;get_location_x(i), lSymbol-&gt;get_location_y(i));
            lPoints-&gt;push_back(lPoint);
        }
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Traçage du contour du QRcode"><a class="Link9" href="#Décodage de QRcode">Traçage du contour du QRcode</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::drawQRcodeImage(std::string imgId, std::string imageId, int red, int green, int blue, int thickness) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    std::vector&lt;cv::Point&gt;* lPoints = GZbar::Instance()-&gt;getPointsQRcode(imageId);
    cv::RotatedRect lRotatedRect = cv::minAreaRect(*lPoints);
    cv::Rect lQRcodeRect = lRotatedRect.boundingRect();
    cv::rectangle(*lImg, lQRcodeRect, cv::Scalar(blue, green, red, 0), thickness);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br>