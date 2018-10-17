include(C:\Users\sabine\Downloads\Gerard\boost_1_68_0\boost_1_68_0\GBoost.pri)

LIBS +=\
    -lboost_program_options-mgw81-mt-x64-1_68

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GProcess.h \
    $$PWD/GInclude.h \
    $$PWD/GProcessConfigurationOptions.h \
    $$PWD/GProcessConfigurationOptionsShort.h

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GProcess.cpp \
    $$PWD/GProcessConfigurationOptions.cpp \
    $$PWD/GProcessConfigurationOptionsShort.cpp
