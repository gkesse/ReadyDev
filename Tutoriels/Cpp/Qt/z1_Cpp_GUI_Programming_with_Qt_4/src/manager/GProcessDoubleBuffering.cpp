//===============================================
#include "GProcessDoubleBuffering.h"
#include "GPlotter.h"
//===============================================
GProcessDoubleBuffering* GProcessDoubleBuffering::m_instance = 0;
//===============================================
GProcessDoubleBuffering::GProcessDoubleBuffering() {

}
//===============================================
GProcessDoubleBuffering::~GProcessDoubleBuffering() {

}
//===============================================
GProcessDoubleBuffering* GProcessDoubleBuffering::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDoubleBuffering;
    }
    return m_instance;
}
//===============================================
void GProcessDoubleBuffering::run() {
    GPlotter *plotter = new GPlotter;
    plotter->setWindowTitle(QObject::tr("Jambi Plotter"));
#if 0
    readFlightCurves(plotter, ":/data/in1.txt");
#else
    int numPoints = 100;
    QVector<QPointF> points0;
    QVector<QPointF> points1;
    for (int x = 0; x < numPoints; ++x) {
        points0.append(QPointF(x, uint(qrand()) % 100));
        points1.append(QPointF(x, uint(qrand()) % 100));
    }
    plotter->setCurveData(0, points0);
    plotter->setCurveData(1, points1);

    GPlotSettings settings;
    settings.minX = 0.0;
    settings.maxX = 100.0;
    settings.minY = 0.0;
    settings.maxY = 100.0;
    plotter->setPlotSettings(settings);
#endif
    plotter->show();
}
//===============================================
