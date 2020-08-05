//===============================================
#ifndef _GAddressOpenFileDialog_
#define _GAddressOpenFileDialog_
//===============================================
#include "GAddress.h"
//===============================================
class GAddressOpenFileDialog : public GAddress {
    Q_OBJECT

public:
    GAddressOpenFileDialog(QWidget *parent = 0);
    ~GAddressOpenFileDialog();
    void updateAddress(const QStringList &dataList);
    void removeAddress(QLayout* layout);

public slots:
    void slotUpdateAddress();
    void slotRangeChanged(const int& min, const int& max);
    void slotAddressClicked();

private:
    QHBoxLayout* m_mainLayout;
    QScrollArea* m_scrollArea;
    QWidget* m_scrollWidget;
};
//===============================================
#endif
//===============================================
