set(TARGET Hello)
set(
	SOURCES
	GShow.cpp
    GMath.cpp
)
set(
	HEADERS
	GShow.h
    GMath.h
)
add_library(${TARGET} STATIC ${SOURCES} ${HEADERS})
