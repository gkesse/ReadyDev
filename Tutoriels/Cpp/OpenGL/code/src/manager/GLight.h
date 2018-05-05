//================================================
#ifndef _GLight_
#define _GLight_
//================================================
#include "GInclude.h"
//================================================
class GLight {
public:
    GLight();
    ~GLight();
	
public:
    static GLight* Instance();
    virtual void draw(GLuint program, const glm::mat4& view) = 0;

private:
    static GLight* m_instance;
};
//================================================
#endif
//================================================
