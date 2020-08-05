//===============================================
#include "GProcessLayout.h"
//===============================================
GProcessLayout* GProcessLayout::m_instance = 0;
//===============================================
GProcessLayout::GProcessLayout() {

}
//===============================================
GProcessLayout::~GProcessLayout() {

}
//===============================================
GProcessLayout* GProcessLayout::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessLayout;
    }
    return m_instance;
}
//===============================================
void GProcessLayout::run() {
    QWidget* lWindow = new QWidget;
    lWindow->setWindowTitle("Qt | ReadyDev");

    QSpinBox* lSpinBox = new QSpinBox;
    lSpinBox->setRange(0, 130);

    QSlider* lSlider = new QSlider(Qt::Horizontal);
    lSlider->setRange(0, 130);

    connect(lSpinBox, SIGNAL(valueChanged(int)), lSlider, SLOT(setValue(int)));
    connect(lSlider, SIGNAL(valueChanged(int)), lSpinBox, SLOT(setValue(int)));

    lSpinBox->setValue(35);

    QHBoxLayout* lLayout = new QHBoxLayout;
    lLayout->addWidget(lSpinBox);
    lLayout->addWidget(lSlider);

    lWindow->setLayout(lLayout);
    lWindow->show();
}
//===============================================
