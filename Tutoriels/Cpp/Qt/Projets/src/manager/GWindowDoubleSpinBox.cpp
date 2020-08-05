//===============================================
#include "GWindowSlider.h"
#include "GPicto.h"
//===============================================
GWindowSlider::GWindowSlider(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowSlider");
    setWindowFlags(Qt::Widget);

    QDial* lDial = new QDial;
    lDial->setNotchesVisible(true);
    lDial->setWrapping(false);
    lDial->setTracking(false);
    lDial->setMinimum(0);
    lDial->setMaximum(100);

    QTabWidget* lTabWidget = new QTabWidget;
    lTabWidget->tabBar()->setObjectName("GDial");
    lTabWidget->setUsesScrollButtons(true);
    lTabWidget->addTab(lDial, "Dial");

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(lTabWidget);

    setLayout(lMainLayout);
    resize(500, 500);
}
//===============================================
GWindowSlider::~GWindowSlider() {

}
//===============================================
