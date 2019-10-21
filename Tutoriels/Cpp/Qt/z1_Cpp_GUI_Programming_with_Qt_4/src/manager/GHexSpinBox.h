//================================================
#ifndef _GHexSpinBox_
#define _GHexSpinBox_
//================================================
#include "GInclude.h"
//================================================
class GHexSpinBox : public QSpinBox {
    Q_OBJECT

public:
    GHexSpinBox(QWidget *parent = 0);

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
