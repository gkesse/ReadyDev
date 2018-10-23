TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console

include(../src/GMain.pri)

DEFINES += \
    G_WIN_MAIN_ON
