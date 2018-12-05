//===============================================
#include "GModuleImage.h"
#include "GDialog.h"
#include "GPicto.h"
#include "GPrint.h"
//===============================================
int GModuleImage::m_moduleCount = 0;
//===============================================
GModuleImage::GModuleImage(QWidget *parent) :
    GModule(parent) {
    m_pixmap = 0;
    m_moduleCount++;
    m_oneOnlyFlag = true;
    m_moduleSelectFlag = false;
    m_moduleName = QString("Image %1").arg(m_moduleCount);

    // m_settingButton
    GPicto::Instance()->setColor(QColor("white"));
    m_settingButton = new QToolButton(this);
    m_settingButton->setIcon(GPicto::Instance()->getPicto(fa::cog));
    m_settingButton->setIconSize(QSize(16, 16));
    m_settingButton->setToolTip(tr("Accéder aux paramètres"));
    connect(m_settingButton, SIGNAL(clicked()), this, SLOT(slotSettingMenu()));

    createMenu();
}
//===============================================
GModuleImage::~GModuleImage() {

}
//===============================================
void GModuleImage::setModuleSelectFlag(bool arg) {
    if(m_moduleSelectFlag != arg) {
        m_moduleSelectFlag = arg;
    }
}
//===============================================
bool GModuleImage::getModuleSelectFlag() {
    return m_moduleSelectFlag;
}
//===============================================
void GModuleImage::createPixmap() {
    if(m_pixmap != 0) delete m_pixmap;
    m_pixmap = new QPixmap(size());
    m_pixmap->fill(Qt::transparent);
}
//===============================================
void GModuleImage::drawPixmap() {
    QPainter lPainter(m_pixmap);
    lPainter.setPen(QPen(QColor("white")));
    GPicto::Instance()->setColor(QColor("white"));
    QPixmap lPixmap = GPicto::Instance()->getPicto(fa::cameraretro).pixmap(QSize(20, 20));
    lPainter.drawPixmap(QRect(15, 15, 20, 20), lPixmap);
    lPainter.drawText(QRect(0, 0, width(), height() - 2), Qt::AlignHCenter | Qt::AlignBottom, m_moduleName);
    setToolTip(m_moduleName);
}
//===============================================
void GModuleImage::createMenu() {
    m_moduleMenu = new QMenu(this);
    m_moduleMenu->setCursor(Qt::PointingHandCursor);

    // lAction
    QAction* lAction = new QAction(this);
    lAction->setText(tr("Charger un fichier image"));
    lAction->setIcon(GPicto::Instance()->getPicto(fa::pictureo));
    m_moduleMenu->addAction(lAction);
    connect(lAction, SIGNAL(hovered()), this, SLOT(slotStatusBar()));
    connect(lAction, SIGNAL(triggered()), this, SLOT(slotLoadImage()));
}
//===============================================
void GModuleImage::slotStatusBar() {
    QAction* lAction = qobject_cast<QAction*>(sender());
    QString lStatusBar = lAction->text();
    emit emitStatusBar(lStatusBar);
}
//===============================================
void GModuleImage::slotSettingMenu() {
    QPoint lPos = QCursor::pos();
    m_moduleMenu->exec(lPos);
}
//===============================================
void GModuleImage::slotLoadImage() {
    GDialog* lDialog = GDialog::Create("OPEN_FILE_DIALOG");
    lDialog->setWindowTitle(tr("Ouvrir un fichier image | rVision"));
    int lOk = lDialog->exec();
    if(lOk == QDialog::Accepted) {
        GPrint::Instance()->print("Accepted...");
    }
    else {
        GPrint::Instance()->print("Rejected...");
    }
    delete lDialog;
}
//===============================================
void GModuleImage::resizeEvent(QResizeEvent *event) {
    if(m_oneOnlyFlag == true) {
        createPixmap();
        drawPixmap();
        m_settingButton->setGeometry(width() - 18 , 0, 18, 18);
        m_oneOnlyFlag = false;
    }
}
//===============================================
void GModuleImage::paintEvent(QPaintEvent *event) {
    if(m_pixmap != 0) {
        QPainter lPainter(this);
        lPainter.drawPixmap(0, 0, *m_pixmap);
    }
}
//===============================================
void GModuleImage::mousePressEvent(QMouseEvent *event) {
    if(event->button() == Qt::LeftButton) {
        bool lModuleSelectFlag = !m_moduleSelectFlag;
        setProperty("ModuleSelectFlag", lModuleSelectFlag);
        style()->unpolish(this);
        style()->polish(this);
        update();
    }
    QWidget::mousePressEvent(event);
}
//===============================================
