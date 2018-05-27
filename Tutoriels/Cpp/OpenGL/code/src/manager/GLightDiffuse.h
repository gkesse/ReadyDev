//================================================
#ifndef _GLightDiffuse_
#define _GLightDiffuse_
//================================================
#include "GLight.h"
//================================================
class GLightDiffuse : public GLight {
public:
    GLightDiffuse();
    ~GLightDiffuse();
	
public:
    static GLightDiffuse* Instance();
    void draw(GLuint program, const glm::mat4& view);

private:
    static GLightDiffuse* m_instance;
};
//================================================
#endif
//================================================
