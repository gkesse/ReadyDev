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
add_library(${TARGET} SHARED ${SOURCES} ${HEADERS})
set_target_properties(${TARGET} PROPERTIES DEFINE_SYMBOL DLL_APP)
