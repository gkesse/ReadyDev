<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre la programmation 3D en C++ avec OpenGL</div></a></div></div><div class="Body2 Orange"><b>OpenGL</b> est une bibliothèque de programmation 3D.<br>Le but de ce tutoriel est de vous apprendre la programmation 3D en <b>C++</b> avec <b>OpenGL</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre la programmation 3D en C++ avec OpenGL, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- GLFW, comme outil de gestion des fenêtres OpenGL.<br>- MinGW, comme compilateur.<br>- Qt, comme environnement de développement intégré.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger GLFW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://www.glfw.org/download.html">http://www.glfw.org/download.html</a><br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Télécharger Qt</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Utilisation de GLFW"><a class="Link3" href="#">Utilisation de GLFW</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">utiliser GLFW</span>, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>GLFW est une bibliothèque de fonctions pour la gestion des fenêtres OpenGL.<br><br><h3 class="Title8 GTitle3">Utilisation de GLFW</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessGlfwApplication::run(int argc, char **argv) {
    cout << "\n### Application GLFW\n\n";
    GLFWwindow* window;

    if(!glfwInit()) {
        return;
    }

    window = glfwCreateWindow(400, 400, "OpenGL | ReadyDev", NULL, NULL);

    if(!window) {
        glfwTerminate();
        return;
    }

    glfwMakeContextCurrent(window);

    while (!glfwWindowShouldClose(window)) {
        float ratio;
        int width, height;
        glfwGetFramebufferSize(window, &width, &height);
        ratio = (float) width / (float) height;
        glViewport(0, 0, width, height);
        glClear(GL_COLOR_BUFFER_BIT);

        glMatrixMode(GL_PROJECTION);
        glLoadIdentity();
        glOrtho(-ratio, ratio, -1.f, 1.f, 1.f, -1.f);
        glMatrixMode(GL_MODELVIEW);
        glLoadIdentity();

        glRotatef((float)glfwGetTime() * 50.f, 0.f, 0.f, 1.f);
        glBegin(GL_TRIANGLES);
        glColor3f(1.f, 0.f, 0.f);
        glVertex3f(-0.6f, -0.4f, 0.f);
        glColor3f(0.f, 1.f, 0.f);
        glVertex3f(0.6f, -0.4f, 0.f);
        glColor3f(0.f, 0.f, 1.f);
        glVertex3f(0.f, 0.6f, 0.f);
        glEnd();

        glfwSwapBuffers(window);
        glfwPollEvents();
    }

    glfwDestroyWindow(window);
    glfwTerminate();
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Glfw_Application.png" alt="img/Glfw_Application.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Dessiner des points"><a class="Link3" href="#">Dessiner des points</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">dessiner des points</span> avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Dessiner des points</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessDrawingPoints::run(int argc, char **argv) {
    cout << "\n### Dessiner des points\n\n";
    GLFWwindow* window;

    if(!glfwInit()) {
        return;
    }

    window = glfwCreateWindow(400, 400, "OpenGL | ReadyDev", NULL, NULL);

    if(!window) {
        glfwTerminate();
        return;
    }

    glfwMakeContextCurrent(window);

    glEnable(GL_POINT_SMOOTH);
    glHint(GL_POINT_SMOOTH_HINT, GL_NICEST);
    glEnable(GL_BLEND);
    glBlendFunc(GL_SRC_ALPHA, GL_ONE_MINUS_SRC_ALPHA);

    while(!glfwWindowShouldClose(window)) {
        float ratio;
        int width, height;
        glfwGetFramebufferSize(window, &width, &height);
        ratio = (float) width / (float)height;
        glViewport(0, 0, width, height);
        glClear(GL_COLOR_BUFFER_BIT);

        glMatrixMode(GL_PROJECTION);
        glLoadIdentity();

        glOrtho(-ratio, ratio, -1.f, 1.f, 1.f, -1.f);
        glMatrixMode(GL_MODELVIEW);
        glLoadIdentity();
        glClear(GL_COLOR_BUFFER_BIT | GL_DEPTH_BUFFER_BIT);

        drawPointsDemo(width, height);

        glfwSwapBuffers(window);
        glfwPollEvents();
    }

    glfwDestroyWindow(window);
    glfwTerminate();
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Structure d'un point</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
struct sVertex {
    GLfloat x, y, z;
    GLfloat r, g, b, a;
};
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Fonction de dessin des points</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessDrawingPoints::drawPointsDemo(int width, int height) {
    GLfloat size=5.0f;
    for(GLfloat x = 0.0f; x<=1.0f; x+=0.2f, size+=5) {
        Vertex v1 = {x, 0.0f, 0.0f, 1.0f, 1.0f, 1.0f, 1.0f};
        drawPoint(v1, size);
    }
}
//===============================================
</xmp></pre></div><br><h3 class="Title8 GTitle3">Fonction de dessin d'un point</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessDrawingPoints::drawPoint(Vertex v1, GLfloat point_size) {
    glPointSize(point_size);
    glBegin(GL_POINTS);
    glColor4f(v1.r, v1.g, v1.b, v1.a);
    glVertex3f(v1.x, v1.y, v1.z);
    glEnd();
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Drawing_Points.png" alt="img/Drawing_Points.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Dessiner des lignes"><a class="Link3" href="#">Dessiner des lignes</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">dessiner des lignes</span> avec OpenGL.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Résultat</h3><div class="Img3 GImage"><img src="img/Drawing_Line.png" alt="img/Drawing_Line.png"></div></div></div></div></div><br> 