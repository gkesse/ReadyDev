//================================================
#ifndef _GLightAds_
#define _GLightAds_
//================================================
#include "GLight.h"
//================================================
class GLightAds : public GLight {
public:
    GLightAds();
    ~GLightAds();
	
public:
    static GLightAds* Instance();
    void initLight(GLuint program);
    void draw(GLuint program, const glm::mat4& view);

private:
    static GLightAds* m_instance;
};
//================================================
#endif
//================================================
