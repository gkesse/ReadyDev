//================================================
#include "GPromotedClass.h"
//================================================
GPromotedClass::GPromotedClass(QWidget *parent)
    : QSpinBox(parent) {
    setRange(0, 255);
    validator = new QRegExpValidator(QRegExp("[0-9A-Fa-f]{1,8}"), this);
}
//================================================
QValidator::State GPromotedClass::validate(QString &text, int &pos) const {
    return validator->validate(text, pos);
}
//================================================
int GPromotedClass::valueFromText(const QString &text) const {
    bool ok;
    return text.toInt(&ok, 16);
}
//================================================
QString GPromotedClass::textFromValue(int value) const {
    return QString::number(value, 16).toUpper();
}
//================================================
