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
	LIBS
	GManager
)
include_directories(${INCLUDEPATH})
add_executable(${TARGET} ${SOURCES})
target_link_libraries(${TARGET} ${LIBS})
