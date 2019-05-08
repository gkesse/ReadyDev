//===============================================
#ifndef _GProcessPushButton_
#define _GProcessPushButton_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessPushButton : public GProcess {
    Q_OBJECT

public:
    GProcessPushButton();
    ~GProcessPushButton();

public:
    static GProcessPushButton* Instance();
    void run(int argc, char **argv);

public slots:
    void slotCreateButtonClicked();
    void slotReadButtonClicked();
    void slotUpdateButtonClicked();
    void slotDeleteButtonClicked();

private:
    static GProcessPushButton* m_instance;
};
//===============================================
#endif
//===============================================
