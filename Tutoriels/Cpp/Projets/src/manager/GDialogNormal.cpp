//===============================================
#include "GDialogNormal.h"
#include "GTitle.h"
//===============================================
GDialogNormal::GDialogNormal(QWidget *parent) :
    GDialog(parent) {
    setObjectName("GDialogNormal");
    setWindowFlags(Qt::FramelessWindowHint);

    GTitle* lTitle = GTitle::Create("DIALOG_NORMAL");

    m_mainLayout = new QGridLayout;
    m_mainLayout->addWidget(lTitle, 0, 0, Qt::AlignTop);
    m_mainLayout->addWidget(lTitle, 0, 0, Qt::AlignTop);
    m_mainLayout->setContentsMargins(8, 8, 8, 8);
    m_mainLayout->setSpacing(10);

    setLayout(m_mainLayout);

    connect(lTitle, SIGNAL(emitReject()), this, SLOT(reject()));

    connect(this, SIGNAL(windowIconChanged(QIcon)), lTitle, SIGNAL(emitWindowIconChanged(QIcon)));
    connect(this, SIGNAL(windowTitleChanged(QString)), lTitle, SIGNAL(emitWindowTitleChanged(QString)));
}
//===============================================
GDialogNormal::~GDialogNormal() {
    if(m_pixmap != 0) delete m_pixmap;
}
//===============================================
void GDialogNormal::resizeEvent(QResizeEvent *event) {
    if(m_pixmap != 0) delete m_pixmap;
    m_pixmap = new QPixmap(size());
    m_pixmap->fill(Qt::transparent);

    QPainter lPainter(m_pixmap);

    QPolygon lBackground;
    lBackground << QPoint(0, 0)
                << QPoint(width(), 0)
                << QPoint(width(), height())
                << QPoint(0, height());

    lPainter.setPen(Qt::NoPen);
    lPainter.setBrush(QBrush(QColor("#343449")));
    lPainter.drawPolygon(lBackground);

    QPolygon lPolygon;
    lPolygon << QPoint(4, 4)
             << QPoint(width() - 4, 4)
             << QPoint(width() - 4, height() - 4)
             << QPoint(4, height() - 4);

    lPainter.setPen(QPen(QColor("white")));
    lPainter.setBrush(Qt::NoBrush);
    lPainter.drawPolygon(lPolygon);
}
//===============================================
void GDialogNormal::paintEvent(QPaintEvent *event) {
    QPainter lPainter(this);
    lPainter.drawPixmap(0, 0, *m_pixmap);
}
//===============================================
