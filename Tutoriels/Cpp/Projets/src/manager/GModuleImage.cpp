//===============================================
#include "GModuleImage.h"
#include "GDialog.h"
#include "GPicto.h"
#include "GFileSystem.h"
#include "GPrint.h"
//===============================================
int GModuleImage::m_moduleCount = 0;
//===============================================
GModuleImage::GModuleImage(QWidget *parent) :
    GModule(parent) {
    setObjectName("GModuleImage");
    setAttribute(Qt::WA_StyledBackground, true);

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
    connect(m_settingButton, SIGNAL(clicked()), this, SLOT(slotModuleSettingMenu()));

    // m_selectButton
    m_selectButton = new QCheckBox(this);
    m_selectButton->setToolTip(tr("Sélectionner le module"));
    connect(m_selectButton, SIGNAL(clicked(bool)), this, SLOT(slotModuleSelect(bool)));

    createMenu();
}
//===============================================
GModuleImage::~GModuleImage() {

}
//===============================================
void GModuleImage::setModuleSelectFlag(const bool& arg) {
    if(m_moduleSelectFlag != arg) {
        m_moduleSelectFlag = arg;
    }
}
//===============================================
bool GModuleImage::getModuleSelectFlag() const {
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
    QPixmap lPixmap = GPicto::Instance()->getPicto(fa::camera).pixmap(QSize(20, 20));
    lPainter.drawPixmap(QRect(15, 15, 20, 20), lPixmap);
    lPainter.drawText(QRect(0, 0, width(), height() - 2), Qt::AlignHCenter | Qt::AlignBottom, m_moduleName);
    QString lToolTip = QString("Module %1").arg(m_moduleName);
    setToolTip(lToolTip);
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
    connect(lAction, SIGNAL(triggered()), this, SLOT(slotImageLoadFile()));
}
//===============================================
void GModuleImage::slotStatusBar() {
    QAction* lAction = qobject_cast<QAction*>(sender());
    QString lStatusBar = lAction->text();
    emit emitStatusBar(lStatusBar);
}
//===============================================
void GModuleImage::slotModuleSettingMenu() {
    QPoint lPos = QCursor::pos();
    m_moduleMenu->exec(lPos);
}
//===============================================
void GModuleImage::slotModuleSelect(const bool &arg) {
    if(arg == true) m_selectButton->setToolTip(tr("Désélectionner le module"));
    else m_selectButton->setToolTip(tr("Sélectionner le module"));
    setProperty("ModuleSelectFlag", arg);
    style()->unpolish(this);
    style()->polish(this);
    update();
}
//===============================================
void GModuleImage::slotImageLoadFile() {
    GFileSystem::Instance()->setNameFilters("*.png;*.jpg;*.jpeg;*.bmp");
    GDialog* lDialog = GDialog::Create("DIALOG_OPEN_FILE");
    lDialog->setWindowTitle(tr("Ouvrir un fichier image | rVision"));
    int lOk = lDialog->exec();
    if(lOk == QDialog::Accepted) {
        QString lFileName = GFileSystem::Instance()->getFilePath();
        m_image = cv::imread(lFileName.toStdString());
        emit emitWorkspaceShowImage(m_moduleId, m_image);
    }
    delete lDialog;
}
//===============================================
void GModuleImage::resizeEvent(QResizeEvent *event) {
    if(m_oneOnlyFlag == true) {
        createPixmap();
        drawPixmap();
        m_settingButton->setGeometry(width() - 18 , 0, 18, 18);
        m_selectButton->setGeometry(2 , 0, 16, 16);
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
        emit emitWorkspaceView(m_moduleId);
        emit emitModuleClick(this);
    }
    QWidget::mousePressEvent(event);
}
//===============================================
