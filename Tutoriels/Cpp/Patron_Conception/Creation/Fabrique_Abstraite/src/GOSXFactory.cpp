//===============================================
#include "GOSXFactory.h"
#include "GOSXButton.h"
//===============================================
GOSXFactory::GOSXFactory() {

}
//===============================================
GOSXFactory::~GOSXFactory() {

}
//===============================================
GButton* GOSXFactory::createButton() {
    return new GOSXButton;
}
//===============================================
