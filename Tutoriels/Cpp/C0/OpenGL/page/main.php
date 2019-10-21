<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation 3D en C avec OpenGL</div></a></div></div><div class="Body2 Orange"><b>OpenGL</b> est une bibliothèque de programmation 3D.<br>Le but de ce tutoriel est de vous apprendre la programmation 3D en <b>C</b> avec <b>OpenGL</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation 3D en C avec OpenGL, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- GLFW, comme outil de gestion des fenêtres OpenGL.<br>- MinGW, comme compilateur.<br>- Eclipse, comme environnement de développement intégré.<br>- Java, comme machine virtuelle.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger GLFW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.glfw.org/download.html">http://www.glfw.org/download.html</a><br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Télécharger Eclipse</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://projects.eclipse.org/releases">https://projects.eclipse.org/releases</a><br><br><h3 class="Title8 GTitle3">Télécharger Java</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://www.oracle.com/technetwork/java/archive-139210.html">https://www.oracle.com/technetwork/java/archive-139210.html</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tracer un repère"><a class="Link3" href="#">Tracer un repère</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Tracer un repère </span>avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1571357877776"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1571357877776");</script></div><br><h2 class="Title7 GTitle2" id="Tracer un repère-Résultat"><a class="Link9" href="#Tracer un repère">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Grid.png" alt="img/Grid.png"></div><br><h2 class="Title7 GTitle2" id="Tracer un repère-Tracer un repère"><a class="Link9" href="#Tracer un repère">Tracer un repère</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenGL_DrawGrid(sGGrid obj) {
#if defined(__WIN32)
	double lWidth = obj.width;
	double lHeight = obj.hight;
	double lGridDiv = obj.gridDiv;
	double lGridLine = obj.gridLine;
	sGColor lGridColor = obj.gridColor;
	double lAxisLine = obj.axisLine;
	sGColor lAxisColor = obj.axisColor;

	for(double y = -lHeight; y &lt;= lHeight; y += lGridDiv) {
		sGLine lLine = {
				{{-lWidth, y, 0.0}, {lWidth, y, 0.0}},
				lGridColor, lGridLine,
				1.0, 1.0, 1.0, 0.0
		};
		GOpenGL_DrawLine(lLine);
	}
	for(double x = -lWidth; x &lt;= lWidth; x += lGridDiv) {
		sGLine lLine = {
				{{x, -lHeight, 0.0}, {x, lHeight, 0.0}},
				lGridColor,	lGridLine,
				1.0, 1.0, 1.0, 0.0
		};
		GOpenGL_DrawLine(lLine);
	}
	sGLine lAxisX = {
			{{-lWidth, 0.0, 0.0}, {lWidth, 0.0, 0.0}},
			lAxisColor, lAxisLine,
			1.0, 1.0, 1.0, 0.0
	};
	GOpenGL_DrawLine(lAxisX);

	sGLine lAxisY = {
			{{0.0, -lHeight, 0.0}, {0.0, lHeight, 0.0}},
			lAxisColor,	lAxisLine,
			1.0, 1.0, 1.0, 0.0
	};
	GOpenGL_DrawLine(lAxisY);
#endif
}
//===============================================</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tracer un point"><a class="Link3" href="#">Tracer un point</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Tracer un point</span> avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1571359940709"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1571359940709");</script></div><br><h2 class="Title7 GTitle2" id="Tracer un point-Résultat"><a class="Link9" href="#Tracer un point">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Point.png" alt="img/Point.png"></div><br><h2 class="Title7 GTitle2" id="Tracer un point-Tracer un point"><a class="Link9" href="#Tracer un point">Tracer un point</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenGL_DrawPoint(sGPoint obj) {
#if defined(__WIN32)
	double lSize = obj.size;
	glPointSize(lSize);
	glBegin(GL_POINTS);
	sGVertexDiv lVertexDiv = {obj.vertex , obj.gridDiv, obj.xDiv, obj.yDiv, obj.zDiv};
	sGVertex lVertex = GOpenGL_VertexDiv(lVertexDiv);
	sGColor lColor = obj.color;
	glColor4d(lColor.r, lColor.g, lColor.b, lColor.a);
	glVertex3d(lVertex.x, lVertex.y, lVertex.z);
	glEnd();
#endif
}
//===============================================</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tracer une ligne"><a class="Link3" href="#">Tracer une ligne</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Tracer une ligne</span> avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1571359957956"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1571359957956");</script></div><br><h2 class="Title7 GTitle2" id="Tracer une ligne-Résultat"><a class="Link9" href="#Tracer une ligne">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Line.png" alt="img/Line.png"></div><br><h2 class="Title7 GTitle2" id="Tracer une ligne-Tracer une ligne"><a class="Link9" href="#Tracer une ligne">Tracer une ligne</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenGL_DrawLine(sGLine obj) {
#if defined(__WIN32)
	double lWidth = obj.width;
	sGColor lColor = obj.color;

	glLineWidth(lWidth);

	glBegin(GL_LINES);
	glColor4d(lColor.r, lColor.g, lColor.b, lColor.a);
	for(int i = 0; i &lt; 2; i++) {
		sGVertexDiv lVertexDiv = {obj.vertex[i], obj.gridDiv, obj.xDiv, obj.yDiv, obj.zDiv};
		sGVertex lVertex = GOpenGL_VertexDiv(lVertexDiv);
		glVertex3d(lVertex.x, lVertex.y, lVertex.z);
	}
	glEnd();
#endif
}
//===============================================</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tracer un triangle"><a class="Link3" href="#">Tracer un triangle</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Tracer un triangle</span> avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><h2 class="Title7 GTitle2" id="Tracer un triangle-Résultat"><a class="Link9" href="#Tracer un triangle">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Triangle.png" alt="img/Triangle.png"></div><br><h2 class="Title7 GTitle2" id="Tracer un triangle-Tracer un triangle"><a class="Link9" href="#Tracer un triangle">Tracer un triangle</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenGL_DrawTriangle(sGTriangle obj) {
#if defined(__WIN32)
	sGColor lColor = obj.color;
	glBegin(GL_TRIANGLES);
	glColor4d(lColor.r, lColor.g, lColor.b, lColor.a);
	for(int i = 0; i &lt; 3; i++) {
		sGVertexDiv lVertexDiv = {obj.vertex[i] , obj.gridDiv, obj.xDiv, obj.yDiv, obj.zDiv};
		sGVertex lVertex = GOpenGL_VertexDiv(lVertexDiv);
		glVertex3d(lVertex.x, lVertex.y, lVertex.z);
	}
	glEnd();
#endif
}
//===============================================</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tracer une fonction 2D"><a class="Link3" href="#">Tracer une fonction 2D</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Tracer une fonction 2D</span> avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1571360372197"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1571360372197");</script></div><br><h2 class="Title7 GTitle2" id="Tracer une fonction 2D-Résultat"><a class="Link9" href="#Tracer une fonction 2D">Résultat</a></h2><br><h3 class="Title8 GTitle3">Cas de la fonction sinus</h3><div class="Img3 GImage"><img src="img/Sinus.png" alt="img/Sinus.png"></div><br><h3 class="Title8 GTitle3">Cas de la fonction gaussienne</h3><div class="Img3 GImage"><img src="img/Gaussian.png" alt="img/Gaussian.png"></div><br><h2 class="Title7 GTitle2" id="Tracer une fonction 2D-Modeliser une fonction 2D"><a class="Link9" href="#Tracer une fonction 2D">Modeliser une fonction 2D</a></h2><br><h3 class="Title8 GTitle3">Cas de la fonction sinus</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static double GFunction_Sinus(double x, void* params) {
	sGSinus* lParams = (sGSinus*)params;
	double lYmax = lParams-&gt;yMax;
	double lFreq = lParams-&gt;freq;
	double lPhi0 = lParams-&gt;phi0;
	double lOmega = 2*M_PI*lFreq;
	double lPhi = lOmega*x - lPhi0;
	double lY = lYmax*sin(lPhi);
	return lY;
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Cas de la fonction gaussienne</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static double GFunction_Gaussian(double x, void* params) {
	sGGaussian* lParams = (sGGaussian*)params;
	double lSigma = lParams-&gt;sigma;
	double lMu = lParams-&gt;mu;
	double lYmax = 1.0/(lSigma*sqrt(2*M_PI));
	double lA = pow((x - lMu), 2)/(2*pow(lSigma, 2));
	double lY = lYmax*exp(-lA);
	return lY;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracer une fonction 2D-Calculer une fonction 2D"><a class="Link9" href="#Tracer une fonction 2D">Calculer une fonction 2D</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GFunction_Compute(sGFunction* func) {
	double lXmin = func-&gt;xMin;
	double lXmax = func-&gt;xMax;
	int lNmax = func-&gt;nMax;
	double lDx = (lXmax - lXmin)/(lNmax - 1);
	func-&gt;data = (sGVertex*)malloc(sizeof(sGVertex)*(lNmax + 1));
	double lXi = lXmin;

	for(int i = 0; i &lt; lNmax; i++) {
		func-&gt;data[i].x = lXi;
		func-&gt;data[i].y = func-&gt;func(lXi, func-&gt;params);
		lXi += lDx;
	}
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracer une fonction 2D-Tracer une fonction 2D"><a class="Link9" href="#Tracer une fonction 2D">Tracer une fonction 2D</a></h2><br><h3 class="Title8 GTitle3">Tracer de lignes</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenGL_DrawLines(sGData obj) {
#if defined(__WIN32)
	double lLineWidth = obj.lineWidth;
	sGColor lColor = obj.lineColor;
	int lNmax = obj.nMax;

	glLineWidth(lLineWidth);

	glBegin(GL_LINE_STRIP);
	glColor4d(lColor.r, lColor.g, lColor.b, lColor.a);
	for(int i = 0; i &lt; lNmax; i++) {
		sGVertexDiv lVertexDiv = {obj.data[i] , obj.gridDiv, obj.xDiv, obj.yDiv, obj.zDiv};
		sGVertex lVertex = GOpenGL_VertexDiv(lVertexDiv);
		glVertex3d(lVertex.x, lVertex.y, lVertex.z);
	}
	glEnd();
#endif
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Tracer de points</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenGL_DrawPoints(sGData obj) {
#if defined(__WIN32)
	sGColor lColor = obj.pointColor;
	int lNmax = obj.nMax;
	double lPointSize = obj.pointSize;

	glPointSize(lPointSize);

	glBegin(GL_POINTS);
	glColor4d(lColor.r, lColor.g, lColor.b, lColor.a);
	for(int i = 0; i &lt; lNmax; i++) {
		sGVertexDiv lVertexDiv = {obj.data[i] , obj.gridDiv, obj.xDiv, obj.yDiv, obj.zDiv};
		sGVertex lVertex = GOpenGL_VertexDiv(lVertexDiv);
		glVertex3d(lVertex.x, lVertex.y, lVertex.z);
	}
	glEnd();
#endif
}
//===============================================</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tracer une carte de chaleur"><a class="Link3" href="#">Tracer une carte de chaleur</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Tracer une carte de chaleur</span> avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1571362003491"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1571362003491");</script></div><br><h2 class="Title7 GTitle2" id="Tracer une carte de chaleur-Résultat"><a class="Link9" href="#Tracer une carte de chaleur">Résultat</a></h2><br><h3 class="Title8 GTitle3">Cas de la fonction gaussienne</h3><div class="Img3 GImage"><img src="img/HeatMap.png" alt="img/HeatMap.png"></div><br><h2 class="Title7 GTitle2" id="Tracer une carte de chaleur-Modéliser une carte de chaleur"><a class="Link9" href="#Tracer une carte de chaleur">Modéliser une carte de chaleur</a></h2><br><h3 class="Title8 GTitle3">Cas de la focntion gaussienne</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static double GFunction_Gaussian2D(double x, double y, void* params) {
	sGGaussian2D* lParams = (sGGaussian2D*)params;
	double lSigmaX = lParams-&gt;sigmaX;
	double lSigmaY = lParams-&gt;sigmaY;
	double lX0 = lParams-&gt;x0;
	double lY0 = lParams-&gt;y0;
	double lZmax = 1.0/(lSigmaX*lSigmaY*sqrt(2*M_PI));
	double lAx = pow((x - lX0), 2)/(2*pow(lSigmaX, 2));
	double lAy = pow((y - lY0), 2)/(2*pow(lSigmaY, 2));
	double lA = lAx + lAy;
	double lZ = lZmax*exp(-lA);
	return lZ;
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracer une carte de chaleur-Calculer une carte de chaleur"><a class="Link9" href="#Tracer une carte de chaleur">Calculer une carte de chaleur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GFunction_Compute2D(sGFunction2D* func) {
	double lXmin = func-&gt;xMin;
	double lXmax = func-&gt;xMax;
	double lYmin = func-&gt;yMin;
	double lYmax = func-&gt;yMax;
	int lxNmax = func-&gt;xNmax;
	int lyNmax = func-&gt;yNmax;
	int lNmax = lxNmax*lyNmax;
	double lDx = (lXmax - lXmin)/(lxNmax - 1);
	double lDy = (lYmax - lYmin)/(lyNmax - 1);
	func-&gt;data = (sGVertex*)malloc(sizeof(sGVertex)*lNmax);
	double lXi = lXmin;
	int k = 0;
	for(int i = 0; i &lt; lxNmax; i++) {
		double lYi = lYmin;
		for(int j = 0; j &lt; lyNmax; j++) {
			double lZi = func-&gt;func(lXi, lYi, func-&gt;params);
			func-&gt;data[k].x = lXi;
			func-&gt;data[k].y = lYi;
			func-&gt;data[k].z = lZi;
			lYi += lDy;
			k++;
		}
		lXi += lDx;
	}
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tracer une carte de chaleur-Tracer une carte de chaleur"><a class="Link9" href="#Tracer une carte de chaleur">Tracer une carte de chaleur</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenGL_DrawHeatMap(sGData2D obj) {
#if defined(__WIN32)
	int lxNmax = obj.xNmax;
	int lyNmax = obj.yNmax;
	int lNmax = lxNmax*lyNmax;
	double lZmin = GFunction()-&gt;Min(obj.data, lNmax, 2);
	double lZmax = GFunction()-&gt;Max(obj.data, lNmax, 2);
	double lZavg = (lZmin + lZmax) / 2;

	double lPointSize = obj.pointSize;

	glPointSize(lPointSize);

	glBegin(GL_POINTS);
	for(int i = 0; i &lt; lNmax; i++) {
		double lZ = obj.data[i].z;
		double lRed = lZ/lZavg - 1.0;
		double lBlue = 1.0 - lZ/lZavg;
		if(lRed &lt; 0) lRed = 0;
		if(lBlue &lt; 0) lBlue = 0;
		double lGreen = 1.0 - lRed - lBlue;

		sGVertexDiv lVertexDiv = {obj.data[i] , obj.gridDiv, obj.xDiv, obj.yDiv, obj.zDiv};
		sGVertex lVertex = GOpenGL_VertexDiv(lVertexDiv);
		glColor4d(lRed, lGreen, lBlue, 0.5);
		glVertex3d(lVertex.x, lVertex.y, 0.0);
	}
	glEnd();
#endif
}
//===============================================</xmp></pre></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tracer des données ECG"><a class="Link3" href="#">Tracer des données ECG</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">Tracer des données ECG</span> avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1571361948688"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1571361948688");</script></div><br><h2 class="Title7 GTitle2" id="Tracer des données ECG-Résultat"><a class="Link9" href="#Tracer des données ECG">Résultat</a></h2><br><div class="Img3 GImage"><img src="img/Ecg.png" alt="img/Ecg.png"></div><br><h2 class="Title7 GTitle2" id="Tracer des données ECG-Tracer des données ECG"><a class="Link9" href="#Tracer des données ECG">Tracer des données ECG</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GOpenGL_DrawDataTab(sGDataTab obj) {
#if defined(__WIN32)
	double lxMin = obj.xMin;
	double lxMax = obj.xMax;
	int lNmax = obj.nMax;
	double lDx = (lxMax - lxMin) / (lNmax - 1);
	sGColor lColor = obj.lineColor;
	double lLineWidth = obj.lineWidth;

	glLineWidth(lLineWidth);

	glBegin(GL_LINE_STRIP);
	glColor4d(lColor.r, lColor.g, lColor.b, lColor.a);
	double lX = lxMin;
	for(int i = 0; i &lt; lNmax; i++) {
		double lY = obj.data[i] + obj.yOffset;
		sGVertex lData = {lX, lY, 0.0};
		sGVertexDiv lVertexDiv = {lData, obj.gridDiv, obj.xDiv, obj.yDiv, obj.zDiv};
		sGVertex lVertex = GOpenGL_VertexDiv(lVertexDiv);
		glVertex3d(lVertex.x, lVertex.y, lVertex.z);
		lX += lDx;
	}
	glEnd();
#endif
}
//===============================================</xmp></pre></div></div></div></div></div><br>