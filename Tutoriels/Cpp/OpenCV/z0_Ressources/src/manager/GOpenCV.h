//================================================
#ifndef _GOpenCV_
#define _GOpenCV_
//================================================
#include "GInclude.h"
//================================================
class GOpenCV {
public:
    GOpenCV();
    ~GOpenCV();
	
public:
    static GOpenCV* Instance();
    void loadImage(const string& name);
    void playVideo(const string& name);
	
private:
    static GOpenCV* m_instance;
};
//================================================
#endif
//================================================
