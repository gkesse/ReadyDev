//===============================================
#include "GProcess.h"
#include "GProcessWindow.h"
#include "GProcessBackgroundColor.h"
#include "GProcessPushButton.h"
#include "GProcessSplitter.h"
#include "GProcessSplitterCustom.h"
#include "GProcessWindowHint.h"
#include "GConfig.h"
//===============================================
GProcess::GProcess() {

}
//===============================================
GProcess::~GProcess() {

}
//===============================================
GProcess* GProcess::Instance() {
    string lProcess = GConfig::Instance()->getData("PROCESS");
    if(lProcess == "WINDOW") return GProcessWindow::Instance();
    if(lProcess == "BACKGROUND_COLOR") return GProcessBackgroundColor::Instance();
    if(lProcess == "PUSH_BUTTON") return GProcessPushButton::Instance();
    if(lProcess == "SPLITTER") return GProcessSplitter::Instance();
    if(lProcess == "SPLITTER_CUSTOM") return GProcessSplitterCustom::Instance();
    if(lProcess == "WINDOW_HINT") return GProcessWindowHint::Instance();
    return GProcessWindow::Instance();
}
//===============================================
