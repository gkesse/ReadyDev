//===============================================
#ifndef _GPicto_
#define _GPicto_
//===============================================
#include "GInclude.h"
//===============================================
class GPicto {
public:
    GPicto();
    ~GPicto();

public:
    static GPicto* Instance();
    void setColor(const QColor& color);
    QIcon getPicto(const int& picto) const;
    QIcon getPicto(const QString& picto) const;

private:
    static GPicto* m_instance;
    QtAwesome* m_picto;
    QColor m_color;
};
//===============================================
#endif
//===============================================
