cmake_minimum_required(VERSION 3.0)
project(GProject)
set(GTARGET ${PROJECT_NAME})
set(
	GSOURCES
	main.cpp
)
add_executable(${GTARGET} ${GSOURCES})
