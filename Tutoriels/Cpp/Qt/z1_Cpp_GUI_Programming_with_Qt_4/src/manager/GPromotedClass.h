//================================================
#ifndef _GPromotedClass_
#define _GPromotedClass_
//================================================
#include "GInclude.h"
//================================================
class GPromotedClass : public QSpinBox {
    Q_OBJECT

public:
    GPromotedClass(QWidget *parent = 0);

protected:
    QValidator::State validate(QString &text, int &pos) const;
    int valueFromText(const QString &text) const;
    QString textFromValue(int value) const;

private:
    QRegExpValidator *validator;
};
//================================================
#endif
//================================================
