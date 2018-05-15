
LIBS += \
    -lmingw32

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GWindowSimple.h \
    $$PWD/GWindow.h \
    $$PWD/GWindowStyleDesigner.h \
    $$PWD/GWindowStyleDesignerGlobal.h \
    $$PWD/GWindowStyleDesignerProperty.h \
    $$PWD/GWindowQml.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GWindowSimple.cpp \
    $$PWD/GWindow.cpp \
    $$PWD/GWindowStyleDesigner.cpp \
    $$PWD/GWindowStyleDesignerGlobal.cpp \
    $$PWD/GWindowStyleDesignerProperty.cpp \
    $$PWD/GWindowQml.cpp

FORMS += \
    $$PWD/GWindowSimple.ui \
    $$PWD/GWindowStyleDesigner.ui \
    $$PWD/GWindowStyleDesignerGlobal.ui \
    $$PWD/GWindowStyleDesignerProperty.ui

