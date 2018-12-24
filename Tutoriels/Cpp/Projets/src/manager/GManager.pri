include (C:\Users\sabine\Downloads\Gerard\QtAwesome-master\QtAwesome-master\QtAwesome\GQtAwesome.pri)
include (C:\Users\sabine\Downloads\Gerard\OpenCV-MinGW-Build-OpenCV-3.4.1\OpenCV-MinGW-Build-OpenCV-3.4.1\GOpenCV.pri)

LIBS += \
    -lopencv_core341 -lopencv_highgui341 -lopencv_imgcodecs341 \
    -lopencv_videoio341 -lopencv_imgproc341 -lopengl32

INCLUDEPATH += \
    $$PWD

SOURCES += \
    $$PWD/GConfig.cpp \
    $$PWD/GPrint.cpp \
    $$PWD/GProcess.cpp \
    $$PWD/GSetting.cpp \
    $$PWD/GProcessReadyVision.cpp \
    $$PWD/GStyle.cpp \
    $$PWD/GPicto.cpp \
    $$PWD/GMenu.cpp \
    $$PWD/GSection.cpp \
    $$PWD/GModule.cpp \
    $$PWD/GModuleImage.cpp \
    $$PWD/GModuleVideo.cpp \
    $$PWD/GDialog.cpp \
    $$PWD/GProcessOpenFileDialog.cpp \
    $$PWD/GButton.cpp \
    $$PWD/GButtonOpenFileDialog.cpp \
    $$PWD/GDialogOpenFile.cpp \
    $$PWD/GTitle.cpp \
    $$PWD/GWindow.cpp \
    $$PWD/GMenuReadyVision.cpp \
    $$PWD/GStatusReadyVision.cpp \
    $$PWD/GStatus.cpp \
    $$PWD/GSectionReadyVision.cpp \
    $$PWD/GFileSystem.cpp \
    $$PWD/GWorkspace.cpp \
    $$PWD/GWorkspaceOpenFileDialog.cpp \
    $$PWD/GMenuOpenFileDialog.cpp \
    $$PWD/GAddress.cpp \
    $$PWD/GAddressOpenFileDialog.cpp \
    $$PWD/GWindowFullScreen.cpp \
    $$PWD/GWindowShape.cpp \
    $$PWD/GTitleWindowShape.cpp \
    $$PWD/GTitleWindowFullScreen.cpp \
    $$PWD/GDialogNormal.cpp \
    $$PWD/GDialogShape.cpp \
    $$PWD/GTitleDialogNormal.cpp \
    $$PWD/GWindowReadyVision.cpp \
    $$PWD/GWindowMaximized.cpp \
    $$PWD/GWorkspaceReadyVision.cpp \
    $$PWD/GPage.cpp \
    $$PWD/GPageReadyVision.cpp

HEADERS += \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GPrint.h \
    $$PWD/GProcess.h \
    $$PWD/GSetting.h \
    $$PWD/GProcessReadyVision.h \
    $$PWD/GStyle.h \
    $$PWD/GPicto.h \
    $$PWD/GMenu.h \
    $$PWD/GSection.h \
    $$PWD/GModule.h \
    $$PWD/GModuleImage.h \
    $$PWD/GModuleVideo.h \
    $$PWD/GDialog.h \
    $$PWD/GProcessOpenFileDialog.h \
    $$PWD/GButton.h \
    $$PWD/GButtonOpenFileDialog.h \
    $$PWD/GDialogOpenFile.h \
    $$PWD/GTitle.h \
    $$PWD/GWindow.h \
    $$PWD/GMenuReadyVision.h \
    $$PWD/GStatusReadyVision.h \
    $$PWD/GStatus.h \
    $$PWD/GSectionReadyVision.h \
    $$PWD/GFileSystem.h \
    $$PWD/GWorkspace.h \
    $$PWD/GWorkspaceOpenFileDialog.h \
    $$PWD/GMenuOpenFileDialog.h \
    $$PWD/GAddress.h \
    $$PWD/GAddressOpenFileDialog.h \
    $$PWD/GWindowFullScreen.h \
    $$PWD/GWindowShape.h \
    $$PWD/GTitleWindowShape.h \
    $$PWD/GTitleWindowFullScreen.h \
    $$PWD/GDialogNormal.h \
    $$PWD/GDialogShape.h \
    $$PWD/GTitleDialogNormal.h \
    $$PWD/GWindowReadyVision.h \
    $$PWD/GWindowMaximized.h \
    $$PWD/GWorkspaceReadyVision.h \
    $$PWD/GPage.h \
    $$PWD/GPageReadyVision.h

FORMS += \
    $$PWD/GButtonOpenFileDialog.ui \
    $$PWD/GMenuReadyVision.ui \
    $$PWD/GSectionReadyVision.ui \
    $$PWD/GWorkspaceOpenFileDialog.ui \
    $$PWD/GMenuOpenFileDialog.ui \
    $$PWD/GTitleWindowShape.ui \
    $$PWD/GTitleWindowFullScreen.ui \
    $$PWD/GTitleDialogNormal.ui
