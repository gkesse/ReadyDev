LIBS +=\
    -lgdi32

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GProcess.h \
    $$PWD/GProcessMainWindow.h \
    $$PWD/GProcessControlMessage.h \
    $$PWD/GProcessOrderNotification.h \
    $$PWD/GProcessResource.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GProcess.cpp \
    $$PWD/GProcessMainWindow.cpp \
    $$PWD/GProcessControlMessage.cpp \
    $$PWD/GProcessOrderNotification.cpp \
    $$PWD/GProcessResource.cpp

