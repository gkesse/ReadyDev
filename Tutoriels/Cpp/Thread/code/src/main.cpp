//===============================================
#include "GThread.h"
#include "GConfig.h"
//===============================================
int main(int argc, char** argv) {
    GConfig::Instance()->setData("PROCESS_ID_SHOW_FLAG", "TRUE");
    GConfig::Instance()->setData("LIBRARY_LOAD_FLAG", "TRUE");
    GThread::Instance()->runThread();
    return 0;
}
//===============================================
