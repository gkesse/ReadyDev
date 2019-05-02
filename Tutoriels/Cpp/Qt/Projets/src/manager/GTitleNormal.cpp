//===============================================
#include "GTitleNormal.h"
#include "GPicto.h"
//===============================================
GTitleNormal::GTitleNormal(QWidget *parent) :
    GTitle(parent) {
    setObjectName("GTitleNormal");

    m_icon = new QLabel;
    m_icon->setObjectName("GIcon");
    m_icon->setAlignment(Qt::AlignCenter);

    QLabel* lTitle = new QLabel;
    lTitle->setText("Title");

    QToolButton* lMinimize = new QToolButton;
    lMinimize->setIcon(GPicto::Instance()->getPicto(fa::windowminimize));
    lMinimize->setIconSize(QSize(20, 20));
    lMinimize->setCursor(Qt::PointingHandCursor);

    QToolButton* lMaximize = new QToolButton;
    lMaximize->setIcon(GPicto::Instance()->getPicto(fa::windowmaximize));
    lMaximize->setIconSize(QSize(20, 20));
    lMaximize->setCursor(Qt::PointingHandCursor);

    QToolButton* lClose = new QToolButton;
    lClose->setIcon(GPicto::Instance()->getPicto(fa::windowclose));
    lClose->setIconSize(QSize(20, 20));
    lClose->setCursor(Qt::PointingHandCursor);

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(m_icon, 0);
    lMainLayout->addWidget(lTitle, 1);
    lMainLayout->addWidget(lMinimize, 0);
    lMainLayout->addWidget(lMaximize, 0);
    lMainLayout->addWidget(lClose, 0);
    lMainLayout->setMargin(0);

    setLayout(lMainLayout);

    connect(this, SIGNAL(emitWindowTitle(QString)), lTitle, SLOT(setText(QString)));
    connect(this, SIGNAL(emitWindowIcon(QIcon)), this, SLOT(slotWidowIcon(QIcon)));
    connect(lMinimize, SIGNAL(clicked()), this, SIGNAL(emitWindowMinimize()));
    connect(lMaximize, SIGNAL(clicked()), this, SIGNAL(emitWindowMaximize()));
    connect(lClose, SIGNAL(clicked()), this, SIGNAL(emitWindowClose()));
}
//===============================================
GTitleNormal::~GTitleNormal() {

}
//===============================================
void GTitleNormal::slotWidowIcon(const QIcon& icon) {
    m_icon->setPixmap(icon.pixmap(25, 25));
}
//===============================================
