//===============================================
#include "GModuleVideo.h"
#include "GPicto.h"
//===============================================
int GModuleVideo::m_moduleCount = 0;
//===============================================
GModuleVideo::GModuleVideo(QWidget *parent) :
    GModule(parent) {
    setObjectName("GModuleVideo");
    setAttribute(Qt::WA_StyledBackground, true);

    m_pixmap = 0;
    m_moduleCount++;
    m_oneOnlyFlag = true;
    m_moduleSelectFlag = false;
    m_moduleName = QString("Video %1").arg(m_moduleCount);

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
GModuleVideo::~GModuleVideo() {

}
//===============================================
void GModuleVideo::setModuleSelectFlag(const bool &arg) {
    if(m_moduleSelectFlag != arg) {
        m_moduleSelectFlag = arg;
    }
}
//===============================================
bool GModuleVideo::getModuleSelectFlag() {
    return m_moduleSelectFlag;
}
//===============================================
void GModuleVideo::createPixmap() {
    if(m_pixmap != 0) delete m_pixmap;
    m_pixmap = new QPixmap(size());
    m_pixmap->fill(Qt::transparent);
}
//===============================================
void GModuleVideo::drawPixmap() {
    QPainter lPainter(m_pixmap);
    lPainter.setPen(QPen(QColor("white")));
    GPicto::Instance()->setColor(QColor("white"));
    QPixmap lPixmap = GPicto::Instance()->getPicto(fa::videocamera).pixmap(QSize(20, 20));
    lPainter.drawPixmap(QRect(15, 15, 20, 20), lPixmap);
    lPainter.drawText(QRect(0, 0, width(), height() - 2), Qt::AlignHCenter | Qt::AlignBottom, m_moduleName);
    QString lToolTip = QString("Module %1").arg(m_moduleName);
    setToolTip(lToolTip);
}
//===============================================
void GModuleVideo::createMenu() {
    m_moduleMenu = new QMenu(this);
    m_moduleMenu->setCursor(Qt::PointingHandCursor);

    // lAction
    QAction* lAction = new QAction(this);
    lAction->setText(tr("Charger un fichier image"));
    lAction->setIcon(GPicto::Instance()->getPicto(fa::pictureo));
    m_moduleMenu->addAction(lAction);
    connect(lAction, SIGNAL(hovered()), this, SLOT(slotStatusBar()));
    connect(lAction, SIGNAL(triggered()), this, SLOT(slotVideoLoadFile()));
}
//===============================================
void GModuleVideo::slotStatusBar() {
    QAction* lAction = qobject_cast<QAction*>(sender());
    QString lStatusBar = lAction->text();
    emit emitStatusBar(lStatusBar);
}
//===============================================
void GModuleVideo::slotModuleSettingMenu() {
    QPoint lPos = QCursor::pos();
    m_moduleMenu->exec(lPos);
}
//===============================================
void GModuleVideo::slotModuleSelect(const bool &arg) {
    if(arg == true) m_selectButton->setToolTip(tr("Désélectionner le module"));
    else m_selectButton->setToolTip(tr("Sélectionner le module"));
    setProperty("ModuleSelectFlag", arg);
    style()->unpolish(this);
    style()->polish(this);
    update();
}
//===============================================
void GModuleVideo::slotVideoLoadFile() {

}
//===============================================
void GModuleVideo::resizeEvent(QResizeEvent *event) {
    if(m_oneOnlyFlag == true) {
        createPixmap();
        drawPixmap();
        m_settingButton->setGeometry(width() - 18 , 0, 18, 18);
        m_selectButton->setGeometry(2 , 0, 16, 16);
        m_oneOnlyFlag = false;
    }
}
//===============================================
void GModuleVideo::paintEvent(QPaintEvent *event) {
    if(m_pixmap != 0) {
        QPainter lPainter(this);
        lPainter.drawPixmap(0, 0, *m_pixmap);
    }
}
//===============================================
void GModuleVideo::mousePressEvent(QMouseEvent *event) {
    if(event->button() == Qt::LeftButton) {
        emit emitWorkspaceView(m_moduleId);
        emit emitModuleClick(this);
    }
    QWidget::mousePressEvent(event);
}
//===============================================
