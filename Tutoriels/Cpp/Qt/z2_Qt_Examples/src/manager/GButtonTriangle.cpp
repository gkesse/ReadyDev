//===============================================
#include "GButtonTriangle.h"
//===============================================
const char* gColorNameMap[] = {
    "red", "green", "blue", "orange", "cyan"
};
const char* gButtonNameMap[] = {
    "Créer", "Lire", "Modifier", "Supprimer"
};
//===============================================
GButtonTriangle::GButtonTriangle(QWidget *parent) :
    QWidget(parent) {
    colors.append(Qt::red);
    colors.append(Qt::blue);
    colors.append(Qt::green);

    m_buttonCount = sizeof(gButtonNameMap) / sizeof(char*);
    int lColorCount = sizeof(gColorNameMap) / sizeof(char*);

    for(int i = 0; i < m_buttonCount; i++) {
        QPushButton* lButton = new QPushButton(gButtonNameMap[i], this);
        int lX = G_FIRST_BUTTON_X + (G_BUTTON_WIDTH + G_TRIANGLE_WIDTH)*i;
        int lY = G_FIRST_BUTTON_Y;
        int lW = G_BUTTON_WIDTH;
        int lH = G_BUTTON_HEIGHT;

        lButton->setGeometry(lX, lY, lW, lH);
        lButton->setStyleSheet(QString("background-color: %1;").arg(gColorNameMap[i % lColorCount]));
        m_buttonMap.append(lButton);
    }
}
//===============================================
GButtonTriangle::~GButtonTriangle() {

}
//===============================================
void GButtonTriangle::paintEvent(QPaintEvent *event) {
    for(int i = 0; i < m_buttonCount; i++) {
        int lX = m_buttonMap.at(i)->pos().x();

        int lX2 = lX + G_BUTTON_WIDTH;
        int lY2 = G_FIRST_BUTTON_Y;
        int lW2 = G_TRIANGLE_WIDTH;
        int lH2 = G_BUTTON_HEIGHT;

        QRect lRect(lX2, lY2, lW2, lH2);

        QPainter lPainter(this);

        qreal lPoint1X = lX + G_BUTTON_WIDTH;
        qreal lPoint1Y = G_FIRST_BUTTON_Y;
        qreal lPoint2X = lX + G_BUTTON_WIDTH;
        qreal lPoint2Y = G_FIRST_BUTTON_Y + G_BUTTON_HEIGHT;
        qreal lPoint3X = lX + G_BUTTON_WIDTH + G_TRIANGLE_WIDTH;
        qreal lPoint3Y = G_FIRST_BUTTON_Y + G_BUTTON_HEIGHT/2;

        QPainterPath lPainterPath;
        lPainterPath.moveTo (lPoint1X, lPoint1Y);
        lPainterPath.lineTo (lPoint2X, lPoint2Y);
        lPainterPath.lineTo (lPoint3X, lPoint3Y);

        lPainter.setPen (Qt :: NoPen);

        if(i < m_buttonCount - 1) {
            lPainter.fillRect(lRect, QBrush(gColorNameMap[i + 1]));
        }

        lPainter.fillPath (lPainterPath, QBrush(gColorNameMap[i]));
    }
}
//===============================================
