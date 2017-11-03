//===============================================
#include "GSingleton.h"
//===============================================
int main(int argc, char** argv) {
    GSingleton::Instance()->showData();
    GSingleton::Instance()->setData("Hello World");
    GSingleton::Instance()->showData();
    GSingleton::Instance()->setData("Welcome Singleton");
    GSingleton::Instance()->showData();
    return 0;
}
//===============================================
