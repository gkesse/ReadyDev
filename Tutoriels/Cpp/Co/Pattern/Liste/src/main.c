//===============================================
#include "GList.h"
//===============================================
int main(int argc, char** argv) {
    printf("\n### Liste Chainee\n\n");
    int* lData = 0;
    lData = (int*)malloc(sizeof(int));*lData = 10;
    GList_Instance()->Add((int*)lData);
    lData = (int*)malloc(sizeof(int));*lData = 20;
    GList_Instance()->Add((int*)lData);
    lData = (int*)malloc(sizeof(int));*lData = 30;
    GList_Instance()->Add((int*)lData);
    GList_Instance()->Show();
    return 0;
}
//===============================================
