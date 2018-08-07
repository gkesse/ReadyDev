<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la vision par ordinateur en C++ avec OpenCV</div></a></div></div><div class="Body2 Orange"><b>OpenCV</b> est une bibliothèque pour la vision par ordinateur.<br>Le but de ce tutoriel est de vous apprendre la vision par ordinateur d'interfaces en C++ avec <b>OpenCV</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la vision par ordinateur en C++ avec OpenCV, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>La&nbsp; vision par ordinateur en C++ avec OpenCV nécessite le téléchargement et l'installation de la bibliothèque OpenCV, un éditeur de texte pour l'édition de nos programmes et un compilateur pour la compilation de nos programmes.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- OpenCV, comme bibliothèque de vision par ordinateur.<br>-    MinGW, comme compilateur.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger OpenCV</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://opencv.org/">https://opencv.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" href="http://mingw.org/">http://mingw.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher une image"><a class="Link3" href="#">Afficher une image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">afficher une image</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Afficher une image</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Image_Originale.png" alt="img/Image_Originale.png"></div><br><div class="Img3 GImage"><img src="img/Image_Pyramid.png" alt="img/Image_Pyramid.png"></div><br><div class="Img3 GImage"><img src="img/Image_Pyramid_02.png" alt="img/Image_Pyramid_02.png"></div></div></div></div></div><br>