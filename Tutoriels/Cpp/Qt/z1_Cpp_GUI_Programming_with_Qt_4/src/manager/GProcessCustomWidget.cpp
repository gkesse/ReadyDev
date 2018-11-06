//===============================================
#include "GProcessCustomWidget.h"
#include "GHexSpinBox.h"
//===============================================
GProcessCustomWidget* GProcessCustomWidget::m_instance = 0;
//===============================================
GProcessCustomWidget::GProcessCustomWidget() {

}
//===============================================
GProcessCustomWidget::~GProcessCustomWidget() {

}
//===============================================
GProcessCustomWidget* GProcessCustomWidget::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessCustomWidget;
    }
    return m_instance;
}
//===============================================
void GProcessCustomWidget::run() {
    GHexSpinBox *spinBox = new GHexSpinBox;
    spinBox->setWindowTitle(QObject::tr("Hex Spin Box"));
    spinBox->show();
}
//===============================================
