//================================================
#ifndef _GInclude_
#define _GInclude_
//================================================
#include <iostream>
//================================================
using namespace std;
//================================================
#include <SDL2/SDL.h>
#include <SDL2/SDL_image.h>
#include <SDL2/SDL_mixer.h>
//================================================
typedef struct {
    const char* id;
    const char* filename;
} GTextureInfo;
//================================================
typedef struct {
    const char* id;
    const char* filename;
    const char* type;
} GSoundInfo;
//================================================
#endif
//================================================
