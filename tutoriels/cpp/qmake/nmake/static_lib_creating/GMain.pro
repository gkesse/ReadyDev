TEMPLATE = lib
TARGET = Hello
DESTDIR = lib
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console staticlib

include(manager/GManager.pri)
