//================================================
#ifndef _GFile_
#define _GFile_
//================================================
#include <iostream>
#include <string>
//================================================
using namespace std;
//================================================
class GFile {
public:
	GFile();
	~GFile();
	
public:
	static GFile* Instance();
	char* getFileContent(const string& filename);
	
private:
	static GFile* m_instance;
};
//================================================
#endif
//================================================
