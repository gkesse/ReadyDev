include(C:\Users\sabine\Downloads\Gerard\SDL2-devel-2.0.8-mingw\SDL2-2.0.8\i686-w64-mingw32\GSDL.pri)

LIBS += \
    -lmingw32 \
    -lSDL2main -lSDL2

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GWindow.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GWindow.cpp
