set(TARGET GManager)
set(
	SOURCES
	GProcess.cpp
)
set(
	HEADERS
	GProcess.h
)
set(
    INCLUDEPATH
    ../lib/hello
)
set(
    LIBPATH
    ../lib/hello
)
set(
    LIBS
    Hello
)
include_directories(${INCLUDEPATH})
link_directories(${LIBPATH})
add_library(${TARGET} ${SOURCES} ${HEADERS})
target_link_libraries(${TARGET} ${LIBS})
