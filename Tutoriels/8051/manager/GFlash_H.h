//===============================================
#ifndef _GFlash_H_
#define _GFlash_H_
//===============================================
typedef struct GFlashO GFlashO;
typedef struct GFlashI GFlashI;
//===============================================
typedef void (*pGFlash_Init)();
typedef void (*pGFlash_Update)();
//===============================================
static GFlashO m_GFlashO;
static int m_GFlash = FALSE;
//===============================================
GFlashO GFlash_Constructor();
void GFlash_Function(GFlashO* obj);
GFlashO GFlash();
void GFlash_Strategy(const char* strategy)
void GFlash_Init();
void GFlash_Update();
//===============================================
struct GFlashI {
    pGFlash_Init Init;
    pGFlash_Update Update;
};
//===============================================
struct GFlashO {
    GFlashI I;
    void (*Strategy)(const char* strategy);
    void (*Init)();
    void (*Update)();
};
//===============================================
#endif
//===============================================
