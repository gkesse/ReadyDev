//================================================
#ifndef _GDrawTextureReduceMove_
#define _GDrawTextureReduceMove_
//================================================
#include "GDraw.h"
#include "GInclude.h"
//================================================
class GDrawTextureReduceMove : public GDraw {
public:
    GDrawTextureReduceMove();
    ~GDrawTextureReduceMove();

public:
    static GDrawTextureReduceMove* Instance();
    void initDraw();
    void draw();

private:
    static GDrawTextureReduceMove* m_instance;
};
//================================================
#endif
//================================================
