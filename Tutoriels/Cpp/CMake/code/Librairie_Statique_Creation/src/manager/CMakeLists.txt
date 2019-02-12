set(GTARGET Hello)
set(GSOURCES GShow.cpp GMath.cpp)
set(GHEADERS GShow.h GMath.h)
add_library(${GTARGET} STATIC ${GSOURCES} ${GHEADERS})
