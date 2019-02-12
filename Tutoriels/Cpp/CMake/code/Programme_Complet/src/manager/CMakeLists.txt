set(GTARGET GManager)
set(GSOURCES GProcess.cpp)
set(GHEADERS GProcess.h)
set(GINCLUDEPATH ../../win/lib/Hello/include)
include_directories(${GINCLUDEPATH})
add_library(${GTARGET} ${GSOURCES} ${GHEADERS})
 