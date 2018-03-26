//===============================================
#include "GSingleton.h"
//===============================================
void setData(const string& data) {
    GSingleton::Instance()->setData(data);
}
//===============================================
void showData() {
    GSingleton::Instance()->showData();
}
//===============================================
int main(int argc, char** argv) {
	showData();
    setData("Bonjour Singleton");
    showData();
	return 0;
}
//===============================================
