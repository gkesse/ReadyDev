cmake_minimum_required(VERSION 3.0)
project(GMain)
set(TARGET main)
set(
	SOURCES
	main.cpp
)
set(
    INCLUDEPATH
    lib/hello
)
set(
    LIBPATH
    lib/hello
)
set(
    LIBS
    Hello
)
include_directories(${INCLUDEPATH})
link_directories(${LIBPATH})
add_executable(${TARGET} ${SOURCES})
target_link_libraries(${TARGET} ${LIBS})

