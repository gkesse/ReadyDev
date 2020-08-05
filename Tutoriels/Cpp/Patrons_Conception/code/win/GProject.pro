TEMPLATE = app
TARGET = GProject
DESTDIR = bin
OBJECTS_DIR = build
MOC_DIR = build
UI_DIR = build
RCC_DIR = build
CONFIG += release console
QT += widgets sql

include(../src/GMain.pri)

RESOURCES += \
    resource.qrc

