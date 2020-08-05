//================================================
#include "GStyle.h"
#include <QApplication>
//================================================
GStyle* GStyle::m_instance = 0;
//================================================
GStyle::GStyle() {

}
//================================================
GStyle::~GStyle() {
	
}
//================================================
GStyle* GStyle::Instance() {
	if(m_instance == 0) {
        m_instance = new GStyle;
	}
	return m_instance;
}
//================================================
void GStyle::load(const string& file) {
    QFile lFile(QString::fromStdString(file));
    lFile.open(QFile::ReadOnly);
    QString lStyle(lFile.readAll());
    lFile.close();
    qApp->setStyleSheet(lStyle);
}
//================================================
