cmake_minimum_required(VERSION 3.0)
project(GMain)
add_subdirectory(manager)
set(TARGET main)
set(
	SOURCES
	main.cpp
)
set(
    INCLUDEPATH
    manager
)
set(
    LIBPATH
    lib/hello
)
set(
    LIBS
    GManager
    Hello
)
include_directories(${INCLUDEPATH})
link_directories(${LIBPATH})
add_executable(${TARGET} ${SOURCES})
target_link_libraries(${TARGET} ${LIBS})
