include(C:\Users\sabine\Downloads\Gerard\boost_1_68_0\boost_1_68_0\GBoost.pri)

LIBS +=\
    -lboost_program_options-mgw81-mt-x64-1_68

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GProcess.h \
    $$PWD/GInclude.h \
    $$PWD/GProcessHelloWorld.h \
    $$PWD/GProcessStructuralProgramming.h \
    $$PWD/GProcessFunctionalProgramming.h \
    $$PWD/GProcessObjectOrientedProgramming.h \
    $$PWD/GProcessInheritance.h \
    $$PWD/GProcessPolymorphism.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GProcess.cpp \
    $$PWD/GProcessHelloWorld.cpp \
    $$PWD/GProcessStructuralProgramming.cpp \
    $$PWD/GProcessFunctionalProgramming.cpp \
    $$PWD/GProcessObjectOrientedProgramming.cpp \
    $$PWD/GProcessInheritance.cpp \
    $$PWD/GProcessPolymorphism.cpp
