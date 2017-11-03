set(GTARGET GManager)
set(GSOURCES GShow.cpp GMath.cpp)
set(GHEADERS GShow.h GMath.h)
add_library(${GTARGET} ${GSOURCES} ${GHEADERS})
