//===============================================
#include "GWindowLabel.h"
#include "GPicto.h"
//===============================================
GWindowLabel::GWindowLabel(QWidget *parent) :
    GWindow(parent) {
    setObjectName("GWindowLabel");
    setWindowFlags(Qt::Widget);

    QLabel* lLabel = new QLabel;
    lLabel->setText("Bonjour tout le monde");
    lLabel->setAlignment(Qt::AlignCenter);

    QLabel* lLabel2 = new QLabel;
    lLabel2->setText("ReadyDev est une Plateforme de Développement Continu. "
                     "C'est un site web développé en PHP et maintenu par Gérard KESSE. "
                     "Vous trouverez sur ce site des cours et des tutoriels adaptés aux sciences de l'ingénieur.");
    lLabel2->setAlignment(Qt::AlignVCenter | Qt::AlignJustify);
    lLabel2->setWordWrap(true);

    QLabel* lLabel3 = new QLabel;
    lLabel3->setText("<b style='color:cyan'>ReadyDev</b> est une Plateforme de Développement Continu. "
                     "C'est un site web développé en <b style='color:cyan'>PHP</b> et maintenu par <b style='color:cyan'>Gérard KESSE</b>. "
                     "Vous trouverez sur ce site des <b style='color:cyan'>cours</b> et des <b style='color:cyan'>tutoriels</b> adaptés aux sciences de l'ingénieur.<br><br>"
                     "Accédez au site officiel <a style='font-style: italic; color:lime;' href='http://localhost:8800/'>http://www.readydev.com</a>");
    lLabel3->setAlignment(Qt::AlignVCenter | Qt::AlignJustify);
    lLabel3->setWordWrap(true);
    lLabel3->setOpenExternalLinks(true);

    QLabel* lLabel4 = new QLabel;
    QPixmap lPixmap("data/img/gopro.png");
    lLabel4->setPixmap(lPixmap.scaledToWidth(350));
    lLabel4->setAlignment(Qt::AlignCenter);

    QTabWidget* lTabWidget = new QTabWidget;
    lTabWidget->addTab(lLabel, "Label");
    lTabWidget->addTab(lLabel2, "WordWrap");
    lTabWidget->addTab(lLabel3, "ExternalLinks");
    lTabWidget->addTab(lLabel4, "Pixmap");
    lTabWidget->setUsesScrollButtons(false);

    QHBoxLayout* lMainLayout = new QHBoxLayout;
    lMainLayout->addWidget(lTabWidget);

    setLayout(lMainLayout);
    resize(500, 500);
}
//===============================================
GWindowLabel::~GWindowLabel() {

}
//===============================================
