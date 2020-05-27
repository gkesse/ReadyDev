<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la vision par ordinateur avec OpenCV en C++</div></a></div></div><div class="Body2 Orange"><b>OpenCV</b> est une bibliothèque pour la vision par ordinateur.<br>Le <b>C++</b> est un langage de programmation orientée objet.<br>Le but de ce tutoriel est de vous apprendre la vision par ordinateur avec <b>OpenCV</b> en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">OpenCV est une bibliothèque pour la vision par ordinateur.<br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_opencv.png" alt="/data/img/defaults/banner_opencv.png"></div><br>Dans ce tutoriel, nous utiliserons:<br>- OpenCV, comme bibliothèque de vision par ordinateur.<br>- Tesseract OCR, comme bibliothèque de reconnaissance optique de caractères.<br>- ZBar, comme bibliothèque de lecture de code-barres.<br><br><h3 class="Title8 GTitle3">Documentation sur OpenCV</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://docs.opencv.org/4.3.0/index.html">https://docs.opencv.org/4.3.0/index.html</a><br><br><h3 class="Title8 GTitle3">Documentation sur Tesseract OCR</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://fossies.org/dox/tesseract-4.1.1/">https://fossies.org/dox/tesseract-4.1.1/</a><br><br><h3 class="Title8 GTitle3">Documentation sur ZBar</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.ccoderun.ca/programming/doxygen/zbar/index.html">https://www.ccoderun.ca/programming/doxygen/zbar/index.html</a><br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Reconnaissance optique de caractères"><a class="Link3" href="#">Reconnaissance optique de caractères</a></h1><div class="Body3">La reconnaissance optique de caractères consiste à traduire des images de textes imprimés en fichier texte.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589305939833"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589305939833");</script></div><br><h2 class="Title7 GTitle2" id="Reconnaissance optique de caractères-Résultat de la reconnaissance optique de caractères"><a class="Link9" href="#Reconnaissance optique de caractères">Résultat de la reconnaissance optique de caractères</a></h2><br><div class="Img3 GImage"><img src="img/ocr.png" alt="img/ocr.png"></div><br><h2 class="Title7 GTitle2" id="Reconnaissance optique de caractères-Chargement de l'image"><a class="Link9" href="#Reconnaissance optique de caractères">Chargement de l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::loadImage(std::string imgId, std::string filename) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = new cv::Mat;
    *lImg = cv::imread(filename, -1);
    m_imgMap[imgId] = lImg;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Reconnaissance optique de caractères-Initialisation de la reconnaissance optique de caractères"><a class="Link9" href="#Reconnaissance optique de caractères">Initialisation de la reconnaissance optique de caractères</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GTesseract::createTesseract(std::string tesseractId, std::string language) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    tesseract::TessBaseAPI* lTesseract = new tesseract::TessBaseAPI();
    int lOk = lTesseract-&gt;Init(NULL, language.c_str(), tesseract::OEM_LSTM_ONLY);
    if(lOk == -1) {exit(0);}
    lTesseract-&gt;SetPageSegMode(tesseract::PSM_AUTO);
    m_tesseractMap[tesseractId] = lTesseract;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Reconnaissance optique de caractères-Initialisation de l'image"><a class="Link9" href="#Reconnaissance optique de caractères">Initialisation de l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GTesseract::setImageOpenCV(std::string tesseractId, std::string imgId, std::string dpi) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    tesseract::TessBaseAPI* lTesseract = m_tesseractMap[tesseractId];
    cv::Mat* lImg = GOpenCV::Instance()-&gt;getImage(imgId);
    lTesseract-&gt;SetImage(lImg-&gt;data, lImg-&gt;cols, lImg-&gt;rows, 3, lImg-&gt;step);
    lTesseract-&gt;SetVariable("user_defined_dpi", dpi.c_str());
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Reconnaissance optique de caractères-Reconnaissance optique de caractères"><a class="Link9" href="#Reconnaissance optique de caractères">Reconnaissance optique de caractères</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::string GTesseract::getString(std::string tesseractId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    tesseract::TessBaseAPI* lTesseract = m_tesseractMap[tesseractId];
    std::string lString = std::string(lTesseract-&gt;GetUTF8Text());;
    return lString;
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Détection faciale"><a class="Link3" href="#">Détection faciale</a></h1><div class="Body3">La détection faciale consiste à détecter un visage humain dans une image. <br>C'est un cas spécifique de détection d'objet, où l'on cherche à détecter la présence et la localisation précise d'un ou plusieurs visages dans une image.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589300324398"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589300324398");</script></div><br><h2 class="Title7 GTitle2" id="Détection faciale-Résultat de détetction de visage"><a class="Link9" href="#Détection faciale">Résultat de détetction de visage</a></h2><br><div class="Img3 GImage"><img src="img/face_detection_image.png" alt="img/face_detection_image.png"></div><br><h2 class="Title7 GTitle2" id="Détection faciale-Chargement de l'image"><a class="Link9" href="#Détection faciale">Chargement de l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::loadImage(std::string imgId, std::string filename) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = new cv::Mat;
    *lImg = cv::imread(filename, -1);
    m_imgMap[imgId] = lImg;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détection faciale-Convertion de l'image en niveau de gris"><a class="Link9" href="#Détection faciale">Convertion de l'image en niveau de gris</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::convertGrayImage(std::string imgId, std::string outId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    cv::Mat* lOut = m_imgMap[outId];
    cv::cvtColor(*lImg, *lOut, cv::COLOR_BGR2GRAY);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détection faciale-Egalisation de l'histogramme"><a class="Link9" href="#Détection faciale">Egalisation de l'histogramme</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::equalizeHistImage(std::string imgId, std::string outId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    cv::Mat* lOut = m_imgMap[outId];
    cv::equalizeHist(*lImg, *lOut);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détection faciale-Initialisation du classificateur en cascade"><a class="Link9" href="#Détection faciale">Initialisation du classificateur en cascade</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::createCascadeClassifier(std::string classifierId, std::string filename) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::CascadeClassifier* lClassifier = new cv::CascadeClassifier;
    std::vector&lt;cv::Rect&gt;* lRects = new std::vector&lt;cv::Rect&gt;;
    lClassifier-&gt;load(filename.c_str());
    m_classifierMap[classifierId] = lClassifier;
    m_rectsMap[classifierId] = lRects;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détection faciale-Détection du visage"><a class="Link9" href="#Détection faciale">Détection du visage</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::detectCascadeClassifier(std::string imgId, std::string classifierId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    cv::CascadeClassifier* lClassifier = m_classifierMap[classifierId];
    std::vector&lt;cv::Rect&gt;* lRects = m_rectsMap[classifierId];
    lClassifier-&gt;detectMultiScale(*lImg, *lRects, 1.1, 3, 0 | cv::CASCADE_SCALE_IMAGE, cv::Size(25, 25));
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détection faciale-Détection des yeux"><a class="Link9" href="#Détection faciale">Détection des yeux</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Reconnaissance faciale"><a class="Link3" href="#">Reconnaissance faciale</a></h1><div class="Body3">La reconnaissance faciale consiste à reconnaître une personne grâce à son visage de mainière automatique.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589635012225"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589635012225");</script></div><br><h2 class="Title7 GTitle2" id="Reconnaissance faciale-Résultat de la reconnaissance faciale"><a class="Link9" href="#Reconnaissance faciale">Résultat de la reconnaissance faciale</a></h2><br><div class="Img3 GImage"><img src="img/face_recognition_image.png" alt="img/face_recognition_image.png"></div><br><h2 class="Title7 GTitle2" id="Reconnaissance faciale-Chargement de l'image"><a class="Link9" href="#Reconnaissance faciale">Chargement de l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::loadImage(std::string imgId, std::string filename) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = new cv::Mat;
    *lImg = cv::imread(filename, -1);
    m_imgMap[imgId] = lImg;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Reconnaissance faciale-Chargement des données"><a class="Link9" href="#Reconnaissance faciale">Chargement des données</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
std::vector&lt;std::vector&lt;std::string&gt;&gt; GFile::getData(std::string fileId, char sep) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::ifstream* lFile = m_ifstreamMap[fileId];
    std::string lLine;
    std::vector&lt;std::vector&lt;std::string&gt;&gt; lStringsMap;
    while(getline(*lFile, lLine)) {
        lLine = GString::Instance()-&gt;trim(lLine);
        if(lLine == "") continue;
        std::vector&lt;std::string&gt; lStringMap = GString::Instance()-&gt;split(lLine, ';');
        lStringsMap.push_back(lStringMap);
    }
    return lStringsMap;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Reconnaissance faciale-Chargement des images et des étiquêtes"><a class="Link9" href="#Reconnaissance faciale">Chargement des images et des étiquêtes</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::loadOneFaceDetectionImage(std::string modelId, std::string fileId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::vector&lt;std::vector&lt;std::string&gt;&gt; lStringsMap = GFile::Instance()-&gt;getData(fileId, ';');
    std::vector&lt;cv::Mat&gt;* lImgs = m_imgsMap[modelId];
    std::vector&lt;int&gt;* lIndices = m_indicesMap[modelId];
    std::map&lt;int, std::string&gt;* lStrings = m_stringsMap[modelId];
    cv::Size* lSize = m_sizeMap[modelId];

    for(int i = 0; i &lt; lStringsMap.size(); i++) {
        std::vector&lt;std::string&gt; lStringMap = lStringsMap.at(i);
        std::string lPath = lStringMap[0];
        std::string lIndice = lStringMap[1];
        std::string lName = lStringMap[2];
        int lIndiceInt = atoi(lIndice.c_str());
        cv::Mat lImg = cv::imread(lPath, cv::IMREAD_GRAYSCALE);
        if(i == 0) {*lSize = lImg.size();}
        lImgs-&gt;push_back(lImg);
        lIndices-&gt;push_back(lIndiceInt);
        (*lStrings)[lIndiceInt] = lName;
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Reconnaissance faciale-Apprentissage automatique"><a class="Link9" href="#Reconnaissance faciale">Apprentissage automatique</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::trainFaceRecognizer(std::string modelId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Ptr&lt;cv::face::EigenFaceRecognizer&gt; lModel = m_modelMap[modelId];
    std::vector&lt;cv::Mat&gt;* lImgs =  m_imgsMap[modelId];
    std::vector&lt;int&gt;* lIndices = m_indicesMap[modelId];
    lModel-&gt;train(*lImgs, *lIndices);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Reconnaissance faciale-Détection faciale"><a class="Link9" href="#Reconnaissance faciale">Détection faciale</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::faceDetectionImage(std::string classifierId, std::string imgId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    std::string lFaceDetect = classifierId;
    std::string lGray = imgId + "lGray";
    std::string lFaceDetectFile = "data/haarcascades/haarcascade_frontalface_alt.xml";
    
    createCascadeClassifier(lFaceDetect, lFaceDetectFile);
    createImage(lGray);
    
    convertGrayImage(imgId, lGray);
    equalizeHistImage(lGray, lGray);
    detectCascadeClassifier(lGray, lFaceDetect);
        
    deleteImage(lGray);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Reconnaissance faciale-Reconnaissance faciale"><a class="Link9" href="#Reconnaissance faciale">Reconnaissance faciale</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">
//===============================================
void GOpenCV::faceRecognitionImage(std::string modelId, std::string classifierId, std::string imgId, int red, int green, int blue, int thickness) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Ptr&lt;cv::face::EigenFaceRecognizer&gt; lModel = m_modelMap[modelId];
    std::vector&lt;cv::Rect&gt;* lRects = m_rectsMap[classifierId];
    cv::Size* lSize = m_sizeMap[modelId];
    
    cv::Mat* lImg = m_imgMap[imgId];
    for(int i = 0; i &lt; lRects-&gt;size(); i++) {
        cv::Rect lRect = lRects-&gt;at(i);
        cv::Mat lFaceImg = (*lImg)(lRect);
        cv::Mat lGray, lResize;
        cv::cvtColor(lFaceImg, lGray, cv::COLOR_BGR2GRAY);
        cv::resize(lGray, lResize, *lSize);
        int lIndice; double lConfiance;
        lModel-&gt;predict(lResize, lIndice, lConfiance);
        std::map&lt;int, std::string&gt;* lStrings = m_stringsMap[modelId];
        std::string lName = (*lStrings)[lIndice];
        cv::rectangle(*lImg, lRect, cv::Scalar(blue, green, red, 0), thickness);
        
        int lTextFont = 0;
        double lTextScale = 0.5;
        int lTextThickness = 1;
        int lTextBase;
        cv::Size lTextSize = cv::getTextSize(lName, lTextFont, lTextScale, lTextThickness, &lTextBase);

        cv::Rect lNameRect;
        lNameRect.x = lRect.x;
        lNameRect.y = lRect.y + lRect.height + 10;
        lNameRect.width = lRect.width;
        lNameRect.height = 10 + lTextSize.height;
        cv::rectangle(*lImg, lNameRect, cv::Scalar(67, 0, 0, 0), -1);
        
        cv::Point lTextOrg;
        lTextOrg.x = lNameRect.x + 5;
        lTextOrg.y = lNameRect.y + lNameRect.height - 5;
        cv::putText(*lImg, lName, lTextOrg, lTextFont, lTextScale, cv::Scalar(0, 200, 100, 0), lTextThickness);
    }
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Décodage de QR-Code"><a class="Link3" href="#">Décodage de QR-Code</a></h1><div class="Body3">Le QR-Code est un type de code-barres à 2 dimensions.<br>Il est utilisé pour stocker du texte sous la forme d'une image 2D.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1589279612854"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1589279612854");</script></div><br><h2 class="Title7 GTitle2" id="Décodage de QR-Code-Résultat de décodage de QR-Code"><a class="Link9" href="#Décodage de QR-Code">Résultat de décodage de QR-Code</a></h2><br><div class="Img3 GImage"><img src="img/qrcode.png" alt="img/qrcode.png"></div><br><h2 class="Title7 GTitle2" id="Décodage de QR-Code-Script d'encodage de QR-Code"><a class="Link9" href="#Décodage de QR-Code">Script d'encodage de QR-Code</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#------------------------------------------------
# encoder qrcode
#------------------------------------------------
GTEXT="email:MY_EMAIL;password:MY_PASSWORD"
GIMG="qrcode.png"
qrencode -o $GIMG "$GTEXT"</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QR-Code-Script de décodage de QR-Code"><a class="Link9" href="#Décodage de QR-Code">Script de décodage de QR-Code</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="sh">#------------------------------------------------
# decoder qrcode
#------------------------------------------------
GIMG="qrcode.png"
zbarimg $GIMG</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QR-Code-Chargement de l'image"><a class="Link9" href="#Décodage de QR-Code">Chargement de l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::loadImage(std::string imgId, std::string filename) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = new cv::Mat;
    *lImg = cv::imread(filename, -1);
    m_imgMap[imgId] = lImg;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QR-Code-Conversion de l'image en niveau de gris"><a class="Link9" href="#Décodage de QR-Code">Conversion de l'image en niveau de gris</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::convertGrayImage(std::string imgId, std::string outId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    cv::Mat* lOut = m_imgMap[outId];
    cv::cvtColor(*lImg, *lOut, cv::COLOR_BGR2GRAY);
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QR-Code-Initialisation du décodeur"><a class="Link9" href="#Décodage de QR-Code">Initialisation du décodeur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QR-Code-Décodage du QR-Code"><a class="Link9" href="#Décodage de QR-Code">Décodage du QR-Code</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GZbar::getSymbol(std::string imageId) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    zbar::Image* lImage = m_imageMap[imageId];
    std::vector&lt;std::string&gt;* lStrings = m_stringsMap[imageId];
    for(zbar::Image::SymbolIterator lSymbol = lImage-&gt;symbol_begin(); lSymbol != lImage-&gt;symbol_end(); ++lSymbol) {
        lStrings-&gt;push_back(lSymbol-&gt;get_type_name());
        lStrings-&gt;push_back(lSymbol-&gt;get_data());
    }
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QR-Code-Détection des points de contour du QR-Code"><a class="Link9" href="#Décodage de QR-Code">Détection des points de contour du QR-Code</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
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
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décodage de QR-Code-Traçage du contour du QR-Code"><a class="Link9" href="#Décodage de QR-Code">Traçage du contour du QR-Code</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GOpenCV::drawQR-CodeImage(std::string imgId, std::string imageId, int red, int green, int blue, int thickness) {
    GDebug::Instance()-&gt;write(__CLASSNAME__, "::", __FUNCTION__, "()", _EOA_);
    cv::Mat* lImg = m_imgMap[imgId];
    std::vector&lt;cv::Point&gt;* lPoints = GZbar::Instance()-&gt;getPointsQR-Code(imageId);
    cv::RotatedRect lRotatedRect = cv::minAreaRect(*lPoints);
    cv::Rect lQR-CodeRect = lRotatedRect.boundingRect();
    cv::rectangle(*lImg, lQR-CodeRect, cv::Scalar(blue, green, red, 0), thickness);
}
//===============================================</xmp></pre></div><br></div></div></div></div><br>