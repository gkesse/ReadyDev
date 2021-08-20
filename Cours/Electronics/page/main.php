<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre l'électronique<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre l'<b>électronique </b>appliquée aux sciences de l'ingénieur.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Introduction">Introduction</a></div><div class="Item4"><span class="Icon10 fa fa-book"></span><a class="Link4" href="#Circuit-RC">Circuit RC</a></div></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><br>L'<b>Électronique</b> est une branche de la physique appliquée, utilisant l'électricité comme support pour le traitement, la transmission et le stockage d'informations au sens large (son, image, commande). <br><br><div class="Img3 GImage"><img alt="/Cours/Electronics/img/b_electronics.png" class="lazy entered loaded" data-src="/Cours/Electronics/img/b_electronics.png" data-ll-status="loaded" src="/Cours/Electronics/img/b_electronics.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Circuit-RC"><a class="Link3" href="#">Circuit RC</a></h1><div class="Body3"><br>Un <b>circuit RC</b> est un circuit électrique, composé d'une résistance et d'un condensateur montés en série ou en parallèle. Dans leur configuration série, les circuits RC permettent de réaliser des filtres électroniques passe-bas ou passe-haut. La constante de temps $\tau$  d'un circuit RC est donnée par le produit de la valeur de ces deux éléments.<br><br><div class="Content0 GSummary2"><div class="Row26">Summary 2</div></div><br><h2 class="Title7 GTitle2" id="Circuit-RC-Etude-d-un-circuit-RC-serie-en-regime-transitoire"><a class="Link9" href="#Circuit-RC">Étude d'un circuit RC série en régime transitoire</a></h2><br><h3 class="Title8 GTitle3">Schéma électrique</h3><br><div class="Img3 GImage"><img alt="/Cours/Electronics/img/i_circuit_rc.png" class="lazy entered loaded" data-src="/Cours/Electronics/img/i_circuit_rc.png" data-ll-status="loaded" src="/Cours/Electronics/img/i_circuit_rc.png"></div><br><h3 class="Title8 GTitle3">Equation différentielle</h3><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
v_R &amp;=&amp; Ri\\
i &amp;=&amp; C\dfrac{dv_C}{dt}\\
v_R+v_C &amp;=&amp; v_E\\
Ri+v_C &amp;=&amp; v_E\\
RC\dfrac{dv_C}{dt}+v_C &amp;=&amp; v_E\\
\tau &amp;=&amp; RC\\
\tau\dfrac{dv_C}{dt}+v_C &amp;=&amp; v_E\\
\end{eqnarray}</div></div><br><h3 class="Title8 GTitle3">Jacobienne</h3><br><div class="Formula GFormula1"><div class="Formula2">\begin{eqnarray}
\tau v_{C}'+v_C &amp;=&amp; v_E\\
v_{C}' &amp;=&amp; -\dfrac{1}{\tau}v_C + \dfrac{1}{\tau}v_E\\
f_{0} &amp;=&amp; -\dfrac{1}{\tau}v_C + \dfrac{1}{\tau}v_E\\
\mathbb{J}_F &amp;=&amp; \begin{pmatrix}
\dfrac{\partial f_0}{\partial v_C}\\
\end{pmatrix}\\
\mathbb{J}_F &amp;=&amp; \begin{pmatrix}
-\dfrac{1}{\tau}\\
\end{pmatrix}
\end{eqnarray}</div></div><br><h3 class="Title8 GTitle3">GCircuitRC.cpp</h3><br><div class="GCode1"><div class="Code2"><pre class="AceCode" data-state="off" data-mode="c_cpp">//===============================================
#include "GCircuitRC.h"
//===============================================
typedef struct _sGParams sGParams;
//===============================================
struct _sGParams {
    double R;
    double C;
    double Ve;
    double dVc;
    double Tmin;
    double Tmax;
    double Nmax;
};
//===============================================
GCircuitRC::GCircuitRC(QWidget* parent) : GElectronicsUi(parent) {
    init();

    sGParams* lParams = (sGParams*)m_params;

    QLabel* lRLabel = new QLabel;
    lRLabel-&gt;setText("R (\u03A9) :");
    QLineEdit* lREdit = new QLineEdit;
    m_REdit = lREdit;
    lREdit-&gt;setText(QString("%1").arg(lParams-&gt;R, 0, 'e', 0));
    lREdit-&gt;setStyleSheet("QLineEdit {max-width:50px;}");

    QLabel* lCLabel = new QLabel;
    lCLabel-&gt;setText("C (F) :");
    QLineEdit* lCEdit = new QLineEdit;
    m_CEdit = lCEdit;
    lCEdit-&gt;setText(QString("%1").arg(lParams-&gt;C));
    lCEdit-&gt;setStyleSheet("QLineEdit {max-width:50px;}");

    QLabel* lVeLabel = new QLabel;
    lVeLabel-&gt;setText("Ve (V) :");
    QLineEdit* lVeEdit = new QLineEdit;
    m_VeEdit = lVeEdit;
    lVeEdit-&gt;setText(QString("%1").arg(lParams-&gt;Ve));
    lVeEdit-&gt;setStyleSheet("QLineEdit {max-width:50px;}");

    QLabel* lTminLabel = new QLabel;
    lTminLabel-&gt;setText("Tmin (s) :");
    QLineEdit* lTminEdit = new QLineEdit;
    m_TminEdit = lTminEdit;
    lTminEdit-&gt;setText(QString("%1").arg(lParams-&gt;Tmin));
    lTminEdit-&gt;setStyleSheet("QLineEdit {max-width:50px;}");

    QLabel* lTmaxLabel = new QLabel;
    lTmaxLabel-&gt;setText("Tmax (s) :");
    QLineEdit* lTmaxEdit = new QLineEdit;
    m_TmaxEdit = lTmaxEdit;
    lTmaxEdit-&gt;setText(QString("%1").arg(lParams-&gt;Tmax, 0, 'e', 0));
    lTmaxEdit-&gt;setStyleSheet("QLineEdit {max-width:50px;}");

    QPushButton* lRunButton = new QPushButton;
    lRunButton-&gt;setText("Run");
    lRunButton-&gt;setStyleSheet("QPushButton {padding:5px;}");

    QHBoxLayout* lParamsLayout = new QHBoxLayout;
    lParamsLayout-&gt;addWidget(lRLabel);
    lParamsLayout-&gt;addWidget(lREdit);
    lParamsLayout-&gt;addWidget(lCLabel);
    lParamsLayout-&gt;addWidget(lCEdit);
    lParamsLayout-&gt;addWidget(lVeLabel);
    lParamsLayout-&gt;addWidget(lVeEdit);
    lParamsLayout-&gt;addWidget(lTminLabel);
    lParamsLayout-&gt;addWidget(lTminEdit);
    lParamsLayout-&gt;addWidget(lTmaxLabel);
    lParamsLayout-&gt;addWidget(lTmaxEdit);
    lParamsLayout-&gt;addStretch(1);
    lParamsLayout-&gt;addWidget(lRunButton);

    QCustomPlot* lPlot = new QCustomPlot;
    m_plot = lPlot;
    lPlot-&gt;addGraph();
    lPlot-&gt;addGraph();
    lPlot-&gt;addGraph();

    lPlot-&gt;graph(0)-&gt;setPen(QPen(QColor(0, 0, 180)));
    lPlot-&gt;graph(1)-&gt;setPen(QPen(QColor(0, 180, 0)));
    lPlot-&gt;graph(2)-&gt;setPen(QPen(QColor(180, 0, 0)));

    lPlot-&gt;graph(0)-&gt;setName("Vc");
    lPlot-&gt;graph(1)-&gt;setName("Vr");
    lPlot-&gt;graph(2)-&gt;setName("Ve");

    lPlot-&gt;legend-&gt;setVisible(true);
    lPlot-&gt;xAxis-&gt;setLabel("Temps (s)");
    lPlot-&gt;yAxis-&gt;setLabel("Tension (V)");

    QVBoxLayout* lMainLayout = new QVBoxLayout;
    lMainLayout-&gt;addLayout(lParamsLayout);
    lMainLayout-&gt;addWidget(lPlot, 1);

    setLayout(lMainLayout);

    compute();

    connect(lRunButton, SIGNAL(clicked()), this, SLOT(onEvent()));
}
//===============================================
GCircuitRC::~GCircuitRC() {

}
//===============================================
void GCircuitRC::resize() {
    QFrame::resize(500,  300);
}
//===============================================
void GCircuitRC::init() {
    sGParams* lParams = new sGParams;
    m_params = lParams;
    lParams-&gt;R = 1e3;
    lParams-&gt;C = 1e-6;
    lParams-&gt;Ve = 5.0;
    lParams-&gt;Tmin = 0.0;
    lParams-&gt;Tmax = 5e-3;
    lParams-&gt;Nmax = 101;
}
//===============================================
void GCircuitRC::compute() {
    sGParams* lParams = (sGParams*)m_params;

    double R = lParams-&gt;R;
    double C = lParams-&gt;C;
    double Ve = lParams-&gt;Ve;

    gsl_odeiv2_system lSys = {onFunction, onJacobian, 1, lParams};

    gsl_odeiv2_driver* lOdeDriver = gsl_odeiv2_driver_alloc_y_new (
            &amp;lSys, gsl_odeiv2_step_rk8pd, 1e-6, 1e-6, 0.0);

    double Tmin = lParams-&gt;Tmin;
    double Tmax = lParams-&gt;Tmax;
    double Nmax = lParams-&gt;Nmax;
    double dT = (Tmax - Tmin)/(Nmax - 1);
    double Ts = 0.0;
    double Yi[1] = {0.0};
    bool lOneOnly = true;
    double Vmin = 0.0;
    double Vmax = 0.0;

    m_Ts.clear();
    m_Vc.clear();
    m_Vr.clear();
    m_Ve.clear();

    for(double Ti = Tmin; Ti &lt;= Tmax; Ti += dT) {
        int lStatus = gsl_odeiv2_driver_apply (lOdeDriver, &amp;Ts, Ti, Yi);

        if (lStatus != GSL_SUCCESS) {
            printf ("[error] calcul incorrect : code erreur = %d\n", lStatus);
            break;
        }

        double Vc = Yi[0];
        double dVc = lParams-&gt;dVc;
        double I = C*dVc;
        double Vr = R*I;

        m_Ts.push_back(Ts);
        m_Vc.push_back(Vc);
        m_Vr.push_back(Vr);
        m_Ve.push_back(Ve);

        if(lOneOnly == true) {
            Vmin = Vc;
            Vmax = Vc;
            lOneOnly = false;
        }

        if(Vc &lt; Vmin) {Vmin = Vc;}
        if(Vc &gt; Vmax) {Vmax = Vc;}
        if(Vr &lt; Vmin) {Vmin = Vr;}
        if(Vr &gt; Vmax) {Vmax = Vr;}
        if(Ve &lt; Vmin) {Vmin = Ve;}
        if(Ve &gt; Vmax) {Vmax = Ve;}
    }

    m_plot-&gt;graph(0)-&gt;setData(m_Ts, m_Vc);
    m_plot-&gt;graph(1)-&gt;setData(m_Ts, m_Vr);
    m_plot-&gt;graph(2)-&gt;setData(m_Ts, m_Ve);

    m_plot-&gt;xAxis-&gt;setRange(Tmin, Tmax);
    m_plot-&gt;yAxis-&gt;setRange(Vmin, Vmax);

    m_plot-&gt;replot();
}
//===============================================
int GCircuitRC::onFunction (double t, const double y[], double f[], void *params) {
    sGParams* lParams = (sGParams*)params;
    double R = lParams-&gt;R;
    double C = lParams-&gt;C;
    double Ve = lParams-&gt;Ve;
    double Tau = R*C;
    f[0] = -(1/Tau)*y[0] + (1/Tau)*Ve;
    lParams-&gt;dVc = f[0];
    return GSL_SUCCESS;
}
//===============================================
int GCircuitRC::onJacobian (double t, const double y[], double *dfdy, double dfdt[], void *params) {
    sGParams* lParams = (sGParams*)params;
    double R = lParams-&gt;R;
    double C = lParams-&gt;C;
    double Tau = R*C;
    gsl_matrix_view dfdy_mat = gsl_matrix_view_array (dfdy, 1, 1);
    gsl_matrix* m = &amp;dfdy_mat.matrix;
    gsl_matrix_set (m, 0, 0, -(1/Tau));
    dfdt[0] = 0.0;
    return GSL_SUCCESS;
}
//===============================================
void GCircuitRC::onEvent() {
    sGParams* lParams = (sGParams*)m_params;
    lParams-&gt;R = m_REdit-&gt;text().toDouble();
    lParams-&gt;C = m_CEdit-&gt;text().toDouble();
    lParams-&gt;Ve = m_VeEdit-&gt;text().toDouble();
    lParams-&gt;Tmin = m_TminEdit-&gt;text().toDouble();
    lParams-&gt;Tmax = m_TmaxEdit-&gt;text().toDouble();
    compute();
}
//===============================================</pre></div></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><div class="Img3 GImage"><img src="/Cours/Electronics/img/i_circuit_rc_02.png" alt="/Cours/Electronics/img/i_circuit_rc_02.png"></div><br></div></div></div></div><br>