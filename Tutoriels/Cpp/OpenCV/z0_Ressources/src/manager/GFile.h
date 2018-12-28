//================================================
#ifndef _GFile_
#define _GFile_
//================================================
#include "GInclude.h"
//================================================
class GFile {
public:
    GFile();
    ~GFile();
	
public:
    static GFile* Instance();
    void open(const string& file, const int& flags);
    void write(const string& name, const int& data);
    void write(const string& name, const cv::Mat& data);
    void write(const string& name, double* data, const int& size);
    void write(const string& name, map<string, string> &data);
    void read(const string& name, int& data);
    void read(const string& name, cv::Mat& data);
    void release();

private:
    static GFile* m_instance;
    cv::FileStorage m_fs;
};
//================================================
#endif
//================================================
