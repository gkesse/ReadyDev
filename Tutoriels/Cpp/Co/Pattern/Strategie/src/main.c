//===============================================
#include "GSingleton.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Strategie\n\n");
    GSingleton_Instance()->Print();
    GSingleton_Instance()->Set_Data("Bonjour tout le monde");
    GSingleton_Instance()->Print();
    GSingleton_Instance()->Set_Data("Bonjour Gerard");
    GSingleton_Instance()->Print();
    return 0;
}
//===============================================