//===============================================
#include "GWinFactory.h"
#include "GWinButton.h"
//===============================================
GWinFactory::GWinFactory() {

}
//===============================================
GWinFactory::~GWinFactory() {

}
//===============================================
GButton* GWinFactory::createButton() {
    return new GWinButton;
}
//===============================================
