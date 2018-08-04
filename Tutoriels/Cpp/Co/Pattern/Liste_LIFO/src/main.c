//===============================================
#include "GList.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Liste Chainee\n\n");
    GList_Instance()->Add("Un");
    GList_Instance()->Add("Deux");
    GList_Instance()->Add("Trois");
    GList_Instance()->Add("Quatre");
    GList_Instance()->Add("Cinq");
    GList_Instance()->Show();
    return 0;
}
//===============================================
