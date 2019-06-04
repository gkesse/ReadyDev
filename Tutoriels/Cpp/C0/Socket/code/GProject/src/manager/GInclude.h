//===============================================
#ifndef _GInclude_
#define _GInclude_
//===============================================
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <ctype.h>
//===============================================
#if defined(__WIN32)
#include <winsock2.h>
#define G_PLATEFORM_OS "WINDOWS"
#elif defined(__unix)
#define G_PLATEFORM_OS "UNIX"
#define FALSE (0)
#define TRUE (!FALSE)
#endif
//===============================================
typedef unsigned char uchar;
typedef unsigned int uint;
typedef unsigned long ulong;
//===============================================
#endif
//===============================================
