#ifndef GDIALOGGOTOCELL_H
#define GDIALOGGOTOCELL_H

#include <QDialog>

namespace Ui {
class GDialogGoToCell;
}

class GDialogGoToCell : public QDialog
{
    Q_OBJECT

public:
    explicit GDialogGoToCell(QWidget *parent = 0);
    ~GDialogGoToCell();

private:
    Ui::GDialogGoToCell *ui;
};

#endif // GDIALOGGOTOCELL_H
