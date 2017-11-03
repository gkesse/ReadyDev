TEMPLATE = lib
TARGET = Hello
DESTDIR = lib
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console
DEFINES += DLL_APP

include(manager/GManager.pri)
