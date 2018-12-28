//================================================
#ifndef _GWindow_
#define _GWindow_
//================================================
#include "GInclude.h"
//================================================
class GWindow {
public:
    GWindow();
    ~GWindow();
	
public:
    static GWindow* Instance();
    void create(const string& name, const int& flags = cv::WINDOW_AUTOSIZE);
    void show(const string& name, cv::Mat& img);
    void resize(const string& name, const int& w, const int& h);
    void destroy(const string& name);
    void destroyAll();
	
private:
    static GWindow* m_instance;
};
//================================================
#endif
//================================================
