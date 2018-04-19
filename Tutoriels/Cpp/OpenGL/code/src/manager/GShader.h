//================================================
#ifndef _GShader_
#define _GShader_
//================================================
#include <iostream>
//================================================
#include "GInclude.h"
//================================================
using namespace std;
//================================================
class GShader {
public:
	GShader();
	~GShader();
	
public:
	static GShader* Instance();
    void setAttribInfo(GAttribInfo* attribInfo);
    virtual GLuint loadShader(GShaderInfo* shaderInfo) = 0;

private:
	static GShader* m_instance;

protected:
    GAttribInfo* m_attribInfo;
};
//================================================
#endif
//================================================
