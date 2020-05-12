<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la vision par ordinateur en C++ avec OpenCV</div></a></div></div><div class="Body2 Orange"><b>OpenCV</b> est une bibliothèque pour la vision par ordinateur.<br>Le but de ce tutoriel est de vous apprendre la vision par ordinateur en <b>C++</b> avec <b>OpenCV</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Le but de cette section est de vous présenter les outils nécessaires pour apprendre la vision par ordinateur en C++ avec OpenCV.<br><br>Dans ce tutoriel, nous utiliserons:<br>- OpenCV, comme bibliothèque de vision par ordinateur.<br>- Tesseract OCR, comme bibliothèque de reconnaissance optique de caractères.<br>- ZBar, comme bibliothèque de lecture de code-barres.<br><br><h3 class="Title8 GTitle3">Documentation sur OpenCV</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://docs.opencv.org/4.3.0/index.html">https://docs.opencv.org/4.3.0/index.html</a><br><br><h3 class="Title8 GTitle3">Documentation sur Tesseract OCR</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://fossies.org/dox/tesseract-4.1.1/">https://fossies.org/dox/tesseract-4.1.1/</a><br><br><h3 class="Title8 GTitle3">Documentation sur ZBar</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.ccoderun.ca/programming/doxygen/zbar/index.html">https://www.ccoderun.ca/programming/doxygen/zbar/index.html</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Détetction de visage"><a class="Link3" href="#">Détetction de visage</a></h1><div class="Body3">Le but de cette section est de vous apprendre la <span class="GColor1" style="color:lime;">Détetction de visage</span> avec OpenCV.<br><br>Cette technique consiste à détecter un visage humain dans une image. C'est un cas spécifique de détection d'objet, où l'on cherche à détecter la présence et la localisation précise d'un ou plusieurs visages dans une image.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589300324398"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589300324398");</script></div><br><h2 class="Title7 GTitle2" id="Détetction de visage-Résultat de détetction de visage"><a class="Link9" href="#Détetction de visage">Résultat de détetction de visage</a></h2><br><div class="Img3 GImage"><img src="img/face_detection_image.png" alt="img/face_detection_image.png"></div><br><h2 class="Title7 GTitle2" id="Détetction de visage-Chargement de l'image"><a class="Link9" href="#Détetction de visage">Chargement de l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::loadImage(std::string imgId, std::string filename) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = new cv::Mat;
    *lImg = cv::imread(filename, -1);
    m_imgMap[imgId] = lImg;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détetction de visage-Convertion de l'image en niveau de gris"><a class="Link9" href="#Détetction de visage">Convertion de l'image en niveau de gris</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::convertGrayImage(std::string imgId, std::string outId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    cv::Mat* lOut = m_imgMap[outId];
    cv::cvtColor(*lImg, *lOut, cv::COLOR_BGR2GRAY);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détetction de visage-Egalisation de l'histogramme"><a class="Link9" href="#Détetction de visage">Egalisation de l'histogramme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::equalizeHistImage(std::string imgId, std::string outId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    cv::Mat* lOut = m_imgMap[outId];
    cv::equalizeHist(*lImg, *lOut);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détetction de visage-Initialisation du classificateur en cascade"><a class="Link9" href="#Détetction de visage">Initialisation du classificateur en cascade</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::createCascadeClassifier(std::string classifierId, std::string filename) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::CascadeClassifier* lClassifier = new cv::CascadeClassifier;
    std::vector&lt;cv::Rect&gt;* lRects = new std::vector&lt;cv::Rect&gt;;
    lClassifier-&gt;load(filename.c_str());
    m_classifierMap[classifierId] = lClassifier;
    m_rectsMap[classifierId] = lRects;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détetction de visage-Détection du visage"><a class="Link9" href="#Détetction de visage">Détection du visage</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::detectCascadeClassifier(std::string imgId, std::string classifierId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    cv::CascadeClassifier* lClassifier = m_classifierMap[classifierId];
    std::vector&lt;cv::Rect&gt;* lRects = m_rectsMap[classifierId];
    lClassifier-&gt;detectMultiScale(*lImg, *lRects, 1.1, 3, 0 | cv::CASCADE_SCALE_IMAGE, cv::Size(25, 25));
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détetction de visage-Détection des yeux"><a class="Link9" href="#Détetction de visage">Détection des yeux</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::detectCascadeClassifier(std::string imgId, std::string eyeClassifierId, std::string faceClassifierId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    cv::CascadeClassifier* lEyeClassifier = m_classifierMap[eyeClassifierId];
    std::vector&lt;cv::Rect&gt;* lEyeRects = m_rectsMap[eyeClassifierId];
    std::vector&lt;cv::Rect&gt;* lFaceRects = m_rectsMap[faceClassifierId];
    for(int i = 0; i &lt; lFaceRects-&gt;size(); i++) {
        cv::Rect lFaceRect = lFaceRects-&gt;at(i);
        cv::Mat lRoiImg = (*lImg)(lFaceRect);
        std::vector&lt;cv::Rect&gt; lRects;
        lEyeClassifier-&gt;detectMultiScale(lRoiImg, lRects, 1.1, 3, 0 | cv::CASCADE_SCALE_IMAGE, cv::Size(25, 25));
        for(int j = 0; j &lt; lRects.size(); j++) {
            cv::Rect lRect = lRects[j];
            lRect.x += lFaceRect.x;
            lRect.y += lFaceRect.y;
            lEyeRects-&gt;push_back(lRect);
        }
    }
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Décodage de QRcode"><a class="Link3" href="#">Décodage de QRcode</a></h1><div class="Body3">Le but de cette section est de vous apprendre le <span class="GColor1" style="color:lime;">Décodage de QRcode</span> avec OpenCV.<br><br>Le QRcode est un type de code-barres à 2 dimensions.<br>Il est utilisé pour stocker du texte sous la forme d'une image 2D.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589279612854"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589279612854");</script></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Résultat de détection de QRcode"><a class="Link9" href="#Décodage de QRcode">Résultat de détection de QRcode</a></h2><br><div class="Img3 GImage"><img src="img/qrcode.png" alt="img/qrcode.png"></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Résultat de décodage de QRcode"><a class="Link9" href="#Décodage de QRcode">Résultat de décodage de QRcode</a></h2><br><div class="Img3 GImage"><img src="img/qrcode_02.png" alt="img/qrcode_02.png"></div><br><h2 class="Title7 GTitle2" id="Décodage de QRcode-Script d'encodage de QRcode"><a class="Link9" href="#Décodage de QRcode">Script d'encodage de QRcode</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#------------------------------------------------
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