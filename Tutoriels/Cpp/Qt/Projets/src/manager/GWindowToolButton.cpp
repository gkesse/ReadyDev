//===============================================
#include "GWindowToolButton.h"
#include "GPicto.h"
//===============================================
GWindowToolButton::GWindowToolButton(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowToolButton");
    setWindowFlags(Qt::Widget);

    QToolButton* lFacebook = new QToolButton;
    lFacebook->setIcon(GPicto::Instance()->getPicto(fa::facebook));
    lFacebook->setIconSize(QSize(30, 30));
    lFacebook->setToolTip("Facebook");
    lFacebook->setCursor(Qt::PointingHandCursor);
    connect(lFacebook, SIGNAL(clicked()), this, SLOT(slotFacebookButtonClicked()));

    QToolButton* lSkype = new QToolButton;
    lSkype->setIcon(GPicto::Instance()->getPicto(fa::skype));
    lSkype->setIconSize(QSize(30, 30));
    lSkype->setToolTip("Skype");
    lSkype->setCursor(Qt::PointingHandCursor);
    connect(lSkype, SIGNAL(clicked()), this, SLOT(slotSkypeButtonClicked()));

    QToolButton* lGithub = new QToolButton;
    lGithub->setIcon(GPicto::Instance()->getPicto(fa::github));
    lGithub->setIconSize(QSize(30, 30));
    lGithub->setToolTip("GitHub");
    lGithub->setCursor(Qt::PointingHandCursor);
    connect(lGithub, SIGNAL(clicked()), this, SLOT(slotGithubButtonClicked()));

    QToolButton* lLinkedin = new QToolButton;
    lLinkedin->setIcon(GPicto::Instance()->getPicto(fa::linkedin));
    lLinkedin->setIconSize(QSize(30, 30));
    lLinkedin->setToolTip("LinkedIn");
    lLinkedin->setCursor(Qt::PointingHandCursor);
    connect(lLinkedin, SIGNAL(clicked()), this, SLOT(slotLinkedinButtonClicked()));

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->setAlignment(Qt::AlignLeft | Qt::AlignTop);
    lMainLayout->addWidget(lFacebook);
    lMainLayout->addWidget(lSkype);
    lMainLayout->addWidget(lGithub);
    lMainLayout->addWidget(lLinkedin);

    setLayout(lMainLayout);
}
//===============================================
GWindowToolButton::~GWindowToolButton() {

}
//===============================================
void GWindowToolButton::slotFacebookButtonClicked() {
    cout << "slotFacebookButtonClicked()...\n";
}
//===============================================
void GWindowToolButton::slotSkypeButtonClicked() {
    cout << "slotSkypeButtonClicked()...\n";
}
//===============================================
void GWindowToolButton::slotGithubButtonClicked() {
    cout << "slotGithubButtonClicked()...\n";
}
//===============================================
void GWindowToolButton::slotLinkedinButtonClicked() {
    cout << "slotLinkedinButtonClicked()...\n";
}
//===============================================
