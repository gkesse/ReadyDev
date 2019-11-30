<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la vision par ordinateur en C avec OpenCV</div></a></div></div><div class="Body2 Orange"><b>OpenCV</b> est une bibliothèque pour la vision par ordinateur.<br>Le but de ce tutoriel est de vous apprendre la vision par ordinateur en <b>C</b> avec <b>OpenCV</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la vision par ordinateur en C++ avec OpenCV, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- OpenCV, comme bibliothèque de vision par ordinateur.<br>-    MinGW, comme compilateur.<br>- CMake, comme outil de construction.<br>- Eclipse, comme environnement de développement intégré.<br>- Java, comme machine virtuelle.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger OpenCV</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://opencv.org/">https://opencv.org/</a><br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Télécharger Eclipse</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://projects.eclipse.org/releases">https://projects.eclipse.org/releases</a><br><br><h3 class="Title8 GTitle3">Télécharger Java</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/technetwork/java/archive-139210.html">https://www.oracle.com/technetwork/java/archive-139210.html</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Afficher une image"><a class="Link3" href="#">Afficher une image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Afficher une image</span> avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1574639813691"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1574639813691");</script></div><br><h2 class="Title7 GTitle2" id="Afficher une image-Résultat"><a class="Link9" href="#Afficher une image">Résultat</a></h2><br><h3 class="Title8 GTitle3">Cas de l'image de Lena</h3><div class="Img3 GImage"><img src="img/Lena.png" alt="img/Lena.png"></div><br><h3 class="Title8 GTitle3">Cas de l'image des Fruits</h3><div class="Img3 GImage"><img src="img/Fruits.png" alt="img/Fruits.png"></div><br><h2 class="Title7 GTitle2" id="Afficher une image-Charger l'image"><a class="Link9" href="#Afficher une image">Charger l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_Load(char* imgName, char* imgFile, int color) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = cvLoadImage(imgFile, color);
	if(lImg == 0) {printf("[ GImage ] Error GImage_Load: %s\n", imgFile); exit(0);}
	lImgMap-&gt;SetData(lImgMap, imgName, lImg, GImage_MapEqual);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Afficher une image-Afficher l'image"><a class="Link9" href="#Afficher une image">Afficher l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_Show(char* imgName, char* windowName) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	cvShowImage(windowName, lImg);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Afficher une image-Programme principal"><a class="Link9" href="#Afficher une image">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Load() {
	GImage()-&gt;Load("LENA", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;Load("FRUITS", "./data/img/fruits.jpg", CV_LOAD_IMAGE_COLOR);
	GWindow()-&gt;Create("LENA", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("FRUITS", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("LENA", "LENA");
	GImage()-&gt;Show("FRUITS", "FRUITS");
	GEvent()-&gt;Loop();
	GImage()-&gt;Remove("LENA");
	GImage()-&gt;Remove("FRUITS");
	GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une image en niveau de gris"><a class="Link3" href="#">Créer une image en niveau de gris</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Créer une image en niveau de gris </span>avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1574640981916"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1574640981916");</script></div><br>Le niveau de gris est une variation des pixels d'une image du blanc au noir. <br><br><h2 class="Title7 GTitle2" id="Créer une image en niveau de gris-Résultat"><a class="Link9" href="#Créer une image en niveau de gris">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Gray.png" alt="img/Gray.png"></div><br><h2 class="Title7 GTitle2" id="Créer une image en niveau de gris-Créer l'image en niveau de gris"><a class="Link9" href="#Créer une image en niveau de gris">Créer l'image en niveau de gris</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_CreateGray(char* imgName, char* outName) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	CvSize lSize = cvGetSize(lImg);
	int lDeth = lImg-&gt;depth;
	int lChannels = 1;
	IplImage* lOut = cvCreateImage(lSize, lDeth, lChannels);
	if(lOut == 0) {printf("[ GImage ] Error GImage_CreateGray\n"); exit(0);}
	lImgMap-&gt;SetData(lImgMap, outName, lOut, GImage_MapEqual);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une image en niveau de gris-Convertir l'image en niveau de gris"><a class="Link9" href="#Créer une image en niveau de gris">Convertir l'image en niveau de gris</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_Gray(char* imgName, char* outName) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	IplImage* lOut = lImgMap-&gt;GetData(lImgMap, outName, GImage_MapEqual);
	cvCvtColor(lImg, lOut, CV_BGR2GRAY);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une image en niveau de gris-Programme principal"><a class="Link9" href="#Créer une image en niveau de gris">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Gray() {
	GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;CreateGray("IMAGE", "GRAY");
	GImage()-&gt;Gray("IMAGE", "GRAY");
	GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("GRAY", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("IMAGE", "IMAGE");
	GImage()-&gt;Show("GRAY", "GRAY");
	GWaitKey()-&gt;Loop();
	GImage()-&gt;Remove("IMAGE");
	GImage()-&gt;Remove("GRAY");
	GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Détecter des contours dans une image"><a class="Link3" href="#">Détecter des contours dans une image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Détecter des contours dans une image </span>avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1574811068061"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1574811068061");</script></div><br><h2 class="Title7 GTitle2" id="Détecter des contours dans une image-Résultat"><a class="Link9" href="#Détecter des contours dans une image">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Canny.png" alt="img/Canny.png"></div><br><h2 class="Title7 GTitle2" id="Détecter des contours dans une image-Détecter les contours dans l'image"><a class="Link9" href="#Détecter des contours dans une image">Détecter les contours dans l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_Canny(char* imgName, char* outName, int low, int high, int size) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	IplImage* lOut = lImgMap-&gt;GetData(lImgMap, outName, GImage_MapEqual);
	cvCanny(lImg, lOut, low, high, size);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Détecter des contours dans une image-Programme principal"><a class="Link9" href="#Détecter des contours dans une image">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Canny() {
	GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;CreateGray("IMAGE", "CANNY");
	GImage()-&gt;Gray("IMAGE", "CANNY");
	GImage()-&gt;Canny("CANNY", "CANNY", 10, 100, 3);
	GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("CANNY", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("IMAGE", "IMAGE");
	GImage()-&gt;Show("CANNY", "CANNY");
	GEvent()-&gt;Loop();
	GImage()-&gt;Remove("IMAGE");
	GImage()-&gt;Remove("CANNY");
	GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Lisser une image"><a class="Link3" href="#">Lisser une image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Lisser une image </span>avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1574642504180"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1574642504180");</script></div><br>Le lissage est une attenuation des pertubations des pixels d'une image.<br>La pertubation est une variation brutale des piexels.<br><br><h2 class="Title7 GTitle2" id="Lisser une image-Résultat"><a class="Link9" href="#Lisser une image">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Smooth.png" alt="img/Smooth.png"></div><br><h2 class="Title7 GTitle2" id="Lisser une image-Lisser l'image"><a class="Link9" href="#Lisser une image">Lisser l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_Smooth(char* imgName, char* outName) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	IplImage* lOut = lImgMap-&gt;GetData(lImgMap, outName, GImage_MapEqual);
	cvSmooth(lImg, lOut, CV_GAUSSIAN, 3, 3, 0, 0);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Lisser une image-Programme principal"><a class="Link9" href="#Lisser une image">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Smooth() {
	GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;CreateParams("IMAGE", "SMOOTH");
	GImage()-&gt;Smooth("IMAGE", "SMOOTH");
	GImage()-&gt;Smooth("SMOOTH", "SMOOTH");
	GImage()-&gt;Smooth("SMOOTH", "SMOOTH");
	GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("SMOOTH", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("IMAGE", "IMAGE");
	GImage()-&gt;Show("SMOOTH", "SMOOTH");
	GWaitKey()-&gt;Loop();
	GImage()-&gt;Remove("IMAGE");
	GImage()-&gt;Remove("SMOOTH");
	GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer une pyramide d'images"><a class="Link3" href="#">Créer une pyramide d'images</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Créer une pyramide d'images </span>avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br>La pyramide d'images est une représentation d'une image sous plusieurs résolutions.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1574643464439"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1574643464439");</script></div><br><h2 class="Title7 GTitle2" id="Créer une pyramide d'images-Résultat"><a class="Link9" href="#Créer une pyramide d'images">Résultat</a></h2><br><h3 class="Title8 GTitle3">Cas d'une division par 2</h3><div class="Img3 GImage"><img src="img/PyrDown.png" alt="img/PyrDown.png"></div><br><h3 class="Title8 GTitle3">Cas d'une division par 4</h3><div class="Img3 GImage"><img src="img/PyrDown_02.png" alt="img/PyrDown_02.png"></div><br><h2 class="Title7 GTitle2" id="Créer une pyramide d'images-Créer la pyramide d'images"><a class="Link9" href="#Créer une pyramide d'images">Créer la pyramide d'images</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_PyrDown(char* imgName, char* outName) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	IplImage* lOut = lImgMap-&gt;GetData(lImgMap, outName, GImage_MapEqual);
	cvPyrDown(lImg, lOut, CV_GAUSSIAN_5x5);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer une pyramide d'images-Programme principal"><a class="Link9" href="#Créer une pyramide d'images">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_PyrDown() {
	GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;CreateHalf("IMAGE", "PYRDOWN");
	GImage()-&gt;CreateHalf("PYRDOWN", "PYRDOWN_2");
	GImage()-&gt;PyrDown("IMAGE", "PYRDOWN");
	GImage()-&gt;PyrDown("PYRDOWN", "PYRDOWN_2");
	GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("PYRDOWN", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("PYRDOWN_2", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("IMAGE", "IMAGE");
	GImage()-&gt;Show("PYRDOWN", "PYRDOWN");
	GImage()-&gt;Show("PYRDOWN_2", "PYRDOWN_2");
	GWaitKey()-&gt;Loop();
	GImage()-&gt;Remove("IMAGE");
	GImage()-&gt;Remove("PYRDOWN");
	GImage()-&gt;Remove("PYRDOWN_2");
	GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Saturer une image"><a class="Link3" href="#">Saturer une image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Saturer une image </span>avec OpenCV.<br>Produit par <b>Gérard KESSE</b>.<br><br>La saturation est une mise en évidence d'un ou plusieurs canaux des pixels d'une image.<br>Elle est réalisée en fixant un ou plusieurs canaux à une valeur donnée.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1574644314850"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1574644314850");</script></div><br><h2 class="Title7 GTitle2" id="Saturer une image-Résultat"><a class="Link9" href="#Saturer une image">Résultat</a></h2><br><h3 class="Title8 GTitle3">Cas d'une annulation de la couleur rouge</h3><div class="Img3 GImage"><img src="img/Saturate.png" alt="img/Saturate.png"></div><br><h3 class="Title8 GTitle3">Cas d'une annulation de la couleur vert</h3><div class="Img3 GImage"><img src="img/Saturate_02.png" alt="img/Saturate_02.png"></div><br><h3 class="Title8 GTitle3">Cas d'une annulation de la couleur bleu</h3><div class="Img3 GImage"><img src="img/Saturate_03.png" alt="img/Saturate_03.png"></div><br><h2 class="Title7 GTitle2" id="Saturer une image-Saturer l'image"><a class="Link9" href="#Saturer une image">Saturer l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_Saturate(char* imgName, sGSaturate* saturate) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	sGSaturateItem* lRed = &saturate-&gt;red;
	sGSaturateItem* lGreen = &saturate-&gt;green;
	sGSaturateItem* lBlue = &saturate-&gt;blue;
	for(int j = 0; j &lt; lImg-&gt;height; j++) {
		for(int i = 0; i &lt; lImg-&gt;width; i++) {
			if(lRed-&gt;flag == 1) GImage()-&gt;SetPixelChannel(imgName, i, j, 2, lRed-&gt;color);
			if(lGreen-&gt;flag == 1) GImage()-&gt;SetPixelChannel(imgName, i, j, 1, lGreen-&gt;color);
			if(lBlue-&gt;flag == 1) GImage()-&gt;SetPixelChannel(imgName, i, j, 0, lBlue-&gt;color);
		}
	}
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Saturer une image-Programme principal"><a class="Link9" href="#Saturer une image">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Saturate() {
	sGSaturate lSaturate = (sGSaturate){
		{1, 0}, {0, 0}, {0, 0}
	};
	sGSaturate lSaturate2 = (sGSaturate){
		{0, 0}, {1, 0}, {0, 0}
	};
	sGSaturate lSaturate3 = (sGSaturate){
		{0, 0}, {0, 0}, {1, 0}
	};

	GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;CreateParams("IMAGE", "SATURATE");
	GImage()-&gt;CreateParams("IMAGE", "SATURATE_2");
	GImage()-&gt;CreateParams("IMAGE", "SATURATE_3");
	GImage()-&gt;Copy("IMAGE", "SATURATE");
	GImage()-&gt;Copy("IMAGE", "SATURATE_2");
	GImage()-&gt;Copy("IMAGE", "SATURATE_3");
	GImage()-&gt;Saturate("SATURATE", &lSaturate);
	GImage()-&gt;Saturate("SATURATE_2", &lSaturate2);
	GImage()-&gt;Saturate("SATURATE_3", &lSaturate3);
	GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("SATURATE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("SATURATE_2", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("SATURATE_3", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("IMAGE", "IMAGE");
	GImage()-&gt;Show("SATURATE", "SATURATE");
	GImage()-&gt;Show("SATURATE_2", "SATURATE_2");
	GImage()-&gt;Show("SATURATE_3", "SATURATE_3");
	GWaitKey()-&gt;Loop();
	GImage()-&gt;Remove("IMAGE");
	GImage()-&gt;Remove("SATURATE");
	GImage()-&gt;Remove("SATURATE_2");
	GImage()-&gt;Remove("SATURATE_3");
	GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Traiter un échantillon d'image"><a class="Link3" href="#">Traiter un échantillon d'image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Traiter un échantillon d'image </span>avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le ROI est une région d'intérêt d'une image.<br>Il permet de travailler localement sur une zone de l'image.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1574808138264"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1574808138264");</script></div><br><h2 class="Title7 GTitle2" id="Traiter un échantillon d'image-Résultat"><a class="Link9" href="#Traiter un échantillon d'image">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Roi.png" alt="img/Roi.png"></div><br><h2 class="Title7 GTitle2" id="Traiter un échantillon d'image-Récupérer l'échantillon d'image"><a class="Link9" href="#Traiter un échantillon d'image">Récupérer l'échantillon d'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_SetRoi(char* imgName, CvRect rect) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	cvSetImageROI(lImg, rect);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Traiter un échantillon d'image-Restaurer l'échantillon d'image"><a class="Link9" href="#Traiter un échantillon d'image">Restaurer l'échantillon d'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_ResetRoi(char* imgName) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	cvResetImageROI(lImg);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Traiter un échantillon d'image-Programme principal"><a class="Link9" href="#Traiter un échantillon d'image">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Roi() {
	CvRect lRoi = {
			100, 100, 200, 200
	};
	GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;CreateParams("IMAGE", "ROI");
	GImage()-&gt;Copy("IMAGE", "ROI");
	GImage()-&gt;SetRoi("ROI", lRoi);
	GImage()-&gt;Not("ROI", "ROI");
	GImage()-&gt;ResetRoi("ROI");
	GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("ROI", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("IMAGE", "IMAGE");
	GImage()-&gt;Show("ROI", "ROI");
	GEvent()-&gt;Loop();
	GImage()-&gt;Remove("IMAGE");
	GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un échantillon d'image"><a class="Link3" href="#">Créer un échantillon d'image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Créer un échantillon d'image </span>avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1574809343912"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1574809343912");</script></div><br><h2 class="Title7 GTitle2" id="Créer un échantillon d'image-Résultat"><a class="Link9" href="#Créer un échantillon d'image">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Header.png" alt="img/Header.png"></div><br><h2 class="Title7 GTitle2" id="Créer un échantillon d'image-Créer l'échantillon d'image"><a class="Link9" href="#Créer un échantillon d'image">Créer l'échantillon d'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_CreateHeader(char* imgName, char* outName, CvRect rect) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	CvSize lSize = cvSize(rect.width, rect.height);
	int lDeth = lImg-&gt;depth;
	int lChannels = lImg-&gt;nChannels;
	IplImage* lOut = cvCreateImageHeader(lSize, lDeth, lChannels);
	lOut-&gt;origin = lImg-&gt;origin;
	lOut-&gt;widthStep = lImg-&gt;widthStep;

	int lX = rect.x;
	int lY = rect.y;

	int k = 0;
	k += lX*lChannels;
	k += lY*lImg-&gt;widthStep;

	lOut-&gt;imageData = &lImg-&gt;imageData[k];

	if(lOut == 0) {printf("[ GImage ] Error GImage_CreateGray\n"); exit(0);}
	lImgMap-&gt;SetData(lImgMap, outName, lOut, GImage_MapEqual);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Créer un échantillon d'image-Programme principal"><a class="Link9" href="#Créer un échantillon d'image">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Header() {
	CvRect lRoi = {
			150, 150, 150, 150
	};
	GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;CreateParams("IMAGE", "ROI");
	GImage()-&gt;Copy("IMAGE", "ROI");
	GImage()-&gt;CreateHeader("ROI", "HEADER", lRoi);
	GImage()-&gt;Not("HEADER", "HEADER");
	GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("ROI", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("HEADER", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("IMAGE", "IMAGE");
	GImage()-&gt;Show("ROI", "ROI");
	GImage()-&gt;Show("HEADER", "HEADER");
	GEvent()-&gt;Loop();
	GImage()-&gt;Remove("IMAGE");
	GImage()-&gt;Remove("ROI");
	GImage()-&gt;Remove("HEADER");
	GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Mélanger des d'échantillons d'images"><a class="Link3" href="#">Mélanger des d'échantillons d'images</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Mélanger des d'échantillons d'images </span>avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1574810201467"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1574810201467");</script></div><br><h2 class="Title7 GTitle2" id="Mélanger des d'échantillons d'images-Résultat"><a class="Link9" href="#Mélanger des d'échantillons d'images">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Blend.png" alt="img/Blend.png"></div><br><h2 class="Title7 GTitle2" id="Mélanger des d'échantillons d'images-Programme principal"><a class="Link9" href="#Mélanger des d'échantillons d'images">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Blend() {
	CvRect lRoi = {
			150, 150, 150, 150
	};
	CvRect lRoi2 = {
			150, 150, lRoi.width, lRoi.height
	};
	sGImgWeight lImgWeight = {
			0.5, 0.9, 0.0
	};
	GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;Load("IMAGE_2", "./data/img/fruits.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;CreateParams("IMAGE", "BLEND");
	GImage()-&gt;Copy("IMAGE", "BLEND");
	GImage()-&gt;SetRoi("BLEND", lRoi);
	GImage()-&gt;SetRoi("IMAGE_2", lRoi2);
	GImage()-&gt;AddWeight("BLEND", "IMAGE_2", "BLEND", lImgWeight);
	GImage()-&gt;ResetRoi("BLEND");
	GImage()-&gt;ResetRoi("IMAGE_2");
	GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("IMAGE_2", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("BLEND", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("IMAGE", "IMAGE");
	GImage()-&gt;Show("IMAGE_2", "IMAGE_2");
	GImage()-&gt;Show("BLEND", "BLEND");
	GEvent()-&gt;Loop();
	GImage()-&gt;Remove("IMAGE");
	GImage()-&gt;Remove("IMAGE_2");
	GImage()-&gt;Remove("BLEND");
	GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Décomposer une image"><a class="Link3" href="#">Décomposer une image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Décomposer une image </span>avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Split est une décomposition d'une image RGB en trois images en niveau de gris formées chacunes des valeurs sur chaque canal.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1575095847637"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1575095847637");</script></div><br><h2 class="Title7 GTitle2" id="Décomposer une image-Résultat"><a class="Link9" href="#Décomposer une image">Résultat</a></h2><br><h3 class="Title8 GTitle3">Image sur le canal rouge</h3><div class="Img3 GImage"><img src="img/SplitRed.png" alt="img/SplitRed.png"></div><br><h3 class="Title8 GTitle3">Image sur le canal vert</h3><div class="Img3 GImage"><img src="img/SplitGreen.png" alt="img/SplitGreen.png"></div><br><h3 class="Title8 GTitle3">Image sur le canal bleu</h3><div class="Img3 GImage"><img src="img/SplitBlue.png" alt="img/SplitBlue.png"></div><br><h2 class="Title7 GTitle2" id="Décomposer une image-Décomposer l'image"><a class="Link9" href="#Décomposer une image">Décomposer l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_Split(char* imgName, char* redName, char* greenName, char* blueName) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	IplImage* lRed = lImgMap-&gt;GetData(lImgMap, redName, GImage_MapEqual);
	IplImage* lGreen = lImgMap-&gt;GetData(lImgMap, greenName, GImage_MapEqual);
	IplImage* lBlue = lImgMap-&gt;GetData(lImgMap, blueName, GImage_MapEqual);
	cvSplit(lImg, lRed, lGreen, lBlue, 0);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Décomposer une image-Programme principal"><a class="Link9" href="#Décomposer une image">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Split() {
	GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;CreateGray("IMAGE", "RED");
	GImage()-&gt;CreateGray("IMAGE", "GREEN");
	GImage()-&gt;CreateGray("IMAGE", "BLUE");
	GImage()-&gt;Split("IMAGE", "RED", "GREEN", "BLUE");
	GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("RED", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("GREEN", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("BLUE", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("IMAGE", "IMAGE");
	GImage()-&gt;Show("RED", "RED");
	GImage()-&gt;Show("GREEN", "GREEN");
	GImage()-&gt;Show("BLUE", "BLUE");
	GEvent()-&gt;Loop();
	GImage()-&gt;Remove("IMAGE");
	GImage()-&gt;Remove("RED");
	GImage()-&gt;Remove("GREEN");
	GImage()-&gt;Remove("BLUE");
	GWindow()-&gt;RemoveAll();
}
//===============================================
</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Reconstituer une image"><a class="Link3" href="#">Reconstituer une image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Reconstituer une image </span>avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Merge est une reconstitution d'une image RGB à partir de trois images en niveau de gris.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1575096849161"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1575096849161");</script></div><br><h2 class="Title7 GTitle2" id="Reconstituer une image-Résultat"><a class="Link9" href="#Reconstituer une image">Résultat</a></h2><br><h3 class="Title8 GTitle3">Image RGB reconstituée</h3><div class="Img3 GImage"><img src="img/Merge.png" alt="img/Merge.png"></div><br><h2 class="Title7 GTitle2" id="Reconstituer une image-Reconstituer l'image"><a class="Link9" href="#Reconstituer une image">Reconstituer l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_Merge(char* imgName, char* redName, char* greenName, char* blueName) {
#if defined(G_USE_OPENCV_ON)
	GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
	IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
	IplImage* lRed = lImgMap-&gt;GetData(lImgMap, redName, GImage_MapEqual);
	IplImage* lGreen = lImgMap-&gt;GetData(lImgMap, greenName, GImage_MapEqual);
	IplImage* lBlue = lImgMap-&gt;GetData(lImgMap, blueName, GImage_MapEqual);
	cvMerge(lRed, lGreen, lBlue, 0, lImg);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Reconstituer une image-Programme principal"><a class="Link9" href="#Reconstituer une image">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Merge() {
	GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
	GImage()-&gt;CreateGray("IMAGE", "RED");
	GImage()-&gt;CreateGray("IMAGE", "GREEN");
	GImage()-&gt;CreateGray("IMAGE", "BLUE");
	GImage()-&gt;CreateParams("IMAGE", "MERGE");
	GImage()-&gt;Split("IMAGE", "RED", "GREEN", "BLUE");
	GImage()-&gt;Merge("MERGE", "RED", "GREEN", "BLUE");
	GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("RED", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("GREEN", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("BLUE", CV_WINDOW_AUTOSIZE);
	GWindow()-&gt;Create("MERGE", CV_WINDOW_AUTOSIZE);
	GImage()-&gt;Show("IMAGE", "IMAGE");
	GImage()-&gt;Show("RED", "RED");
	GImage()-&gt;Show("GREEN", "GREEN");
	GImage()-&gt;Show("BLUE", "BLUE");
	GImage()-&gt;Show("MERGE", "MERGE");
	GEvent()-&gt;Loop();
	GImage()-&gt;Remove("IMAGE");
	GImage()-&gt;Remove("RED");
	GImage()-&gt;Remove("GREEN");
	GImage()-&gt;Remove("BLUE");
	GImage()-&gt;Remove("MERGE");
	GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Additionner des images"><a class="Link3" href="#">Additionner des images</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Additionner des images </span>avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1575100867222"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1575100867222");</script></div><br><h2 class="Title7 GTitle2" id="Additionner des images-Résultat"><a class="Link9" href="#Additionner des images">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/AddWeight.png" alt="img/AddWeight.png"></div><br><h2 class="Title7 GTitle2" id="Additionner des images-Additionner les images"><a class="Link9" href="#Additionner des images">Additionner les images</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_AddWeight(char* imgName, char* img2Name, char* outName, sGImgWeight weight) {
#if defined(G_USE_OPENCV_ON)
    GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
    IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
    IplImage* lImg2 = lImgMap-&gt;GetData(lImgMap, img2Name, GImage_MapEqual);
    IplImage* lOut = lImgMap-&gt;GetData(lImgMap, outName, GImage_MapEqual);
    double lApha = weight.alpha;
    double lBeta = weight.beta;
    double lGamma = weight.gamma;
    cvAddWeighted(lImg, lApha, lImg2, lBeta, lGamma, lOut);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Additionner des images-Programme principal"><a class="Link9" href="#Additionner des images">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_AddWeight() {
    sGImgWeight lImgWeight = (sGImgWeight){
        0.5, 0.5, 0.0
    };

    GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
    GImage()-&gt;Load("IMAGE_2", "./data/img/fruits.jpg", CV_LOAD_IMAGE_COLOR);
    GImage()-&gt;CreateParams("IMAGE", "ADD_WEIGHT");
    GImage()-&gt;AddWeight("IMAGE", "IMAGE_2", "ADD_WEIGHT", lImgWeight);
    GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
    GWindow()-&gt;Create("IMAGE_2", CV_WINDOW_AUTOSIZE);
    GWindow()-&gt;Create("ADD_WEIGHT", CV_WINDOW_AUTOSIZE);
    GImage()-&gt;Show("IMAGE", "IMAGE");
    GImage()-&gt;Show("IMAGE_2", "IMAGE_2");
    GImage()-&gt;Show("ADD_WEIGHT", "ADD_WEIGHT");
    GEvent()-&gt;Loop();
    GImage()-&gt;Remove("IMAGE");
    GImage()-&gt;Remove("IMAGE_2");
    GImage()-&gt;Remove("ADD_WEIGHT");
    GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Seuiller une image"><a class="Link3" href="#">Seuiller une image</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Seuiller une image </span>avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br>Le Threshold est une segmentation d'une image en niveau de gris en plusieurs classes.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1575101727163"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1575101727163");</script></div><br><h2 class="Title7 GTitle2" id="Seuiller une image-Résultat"><a class="Link9" href="#Seuiller une image">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Threshold.png" alt="img/Threshold.png"></div><br><h2 class="Title7 GTitle2" id="Seuiller une image-Seuiller l'image"><a class="Link9" href="#Seuiller une image">Seuiller l'image</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GImage_Threshold(char* imgName, char* outName, sGThreshold thres) {
#if defined(G_USE_OPENCV_ON)
    GMapO(GImage, GCHAR_PTR, GVOID_PTR)* lImgMap = m_GImageO-&gt;m_imgMap;
    IplImage* lImg = lImgMap-&gt;GetData(lImgMap, imgName, GImage_MapEqual);
    IplImage* lOut = lImgMap-&gt;GetData(lImgMap, outName, GImage_MapEqual);
    cvThreshold(lImg, lOut, thres.thres, thres.max, thres.type);
#endif
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Seuiller une image-Programme principal"><a class="Link9" href="#Seuiller une image">Programme principal</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenCVImage_Threshold() {
    sGThreshold lThres = (sGThreshold){
        100, 255, CV_THRESH_BINARY
    };
    GImage()-&gt;Load("IMAGE", "./data/img/lena.jpg", CV_LOAD_IMAGE_COLOR);
    GImage()-&gt;CreateGray("IMAGE", "THRESHOLD");
    GImage()-&gt;Gray("IMAGE", "THRESHOLD");
    GImage()-&gt;Threshold("THRESHOLD", "THRESHOLD", lThres);
    GWindow()-&gt;Create("IMAGE", CV_WINDOW_AUTOSIZE);
    GWindow()-&gt;Create("THRESHOLD", CV_WINDOW_AUTOSIZE);
    GImage()-&gt;Show("IMAGE", "IMAGE");
    GImage()-&gt;Show("THRESHOLD", "THRESHOLD");
    GEvent()-&gt;Loop();
    GImage()-&gt;Remove("IMAGE");
    GImage()-&gt;Remove("THRESHOLD");
    GWindow()-&gt;RemoveAll();
}
//===============================================</xmp></pre></div><br></div></div></div></div><br>