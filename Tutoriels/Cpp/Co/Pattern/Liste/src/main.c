//===============================================
#include "GList.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Liste Chainee\n\n");
    int lData[] = {10,20,30,40,50};
    GList_Instance()->Add(&lData[0]);
    GList_Instance()->Add(&lData[1]);
    GList_Instance()->Add(&lData[2]);
    GList_Instance()->Show();
    return 0;
}
//===============================================
