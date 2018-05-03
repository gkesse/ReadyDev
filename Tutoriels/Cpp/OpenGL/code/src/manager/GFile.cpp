//================================================
#include "GFile.h"
//================================================
GFile* GFile::m_instance = 0;
//================================================
GFile::GFile() {

}
//================================================
GFile::~GFile() {
	
}
//================================================
GFile* GFile::Instance() {
	if(m_instance == 0) {
		m_instance = new GFile;
	}
	return m_instance;
}
//================================================
char* GFile::getFileContent(const string& filename) {
	FILE* m_pFile = fopen(filename.c_str(), "rb");
	fseek(m_pFile, 0, SEEK_END);
    int m_length = ftell(m_pFile);
    fseek(m_pFile, 0, SEEK_SET);
	char* m_content = new char[m_length + 1];
	fread(m_content, 1, m_length, m_pFile);
    fclose(m_pFile);
	m_content[m_length] = 0;
	return m_content;
}
//================================================
