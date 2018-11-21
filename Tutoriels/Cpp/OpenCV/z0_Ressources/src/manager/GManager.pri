include(C:\Users\sabine\Downloads\Gerard\OpenCV-MinGW-Build-OpenCV-3.4.1\OpenCV-MinGW-Build-OpenCV-3.4.1\GOpenCV.pri)

LIBS += \
    -lopencv_core341 -lopencv_highgui341 -lopencv_imgcodecs341 \
    -lopencv_videoio341 -lopencv_imgproc341 -lopengl32

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GProcess.h \
    $$PWD/GSetting.h \
    $$PWD/GConfig.h \
    $$PWD/GInclude.h \
    $$PWD/GProcessImageLoad.h \
    $$PWD/GProcessVideoPlay.h \
    $$PWD/GProcessTrackbarSlider.h \
    $$PWD/GTrackbar.h \
    $$PWD/GImage.h \
    $$PWD/GVideo.h \
    $$PWD/GWindow.h \
    $$PWD/GDelay.h \
    $$PWD/GSmooth.h \
    $$PWD/GProcessSmooth.h \
    $$PWD/GProcessHalfImage.h \
    $$PWD/GHalf.h \
    $$PWD/GProcessEdge.h \
    $$PWD/GConvert.h \
    $$PWD/GEdge.h \
    $$PWD/GProcessPyramid.h \
    $$PWD/GPyramid.h \
    $$PWD/GProcessPixel.h \
    $$PWD/GPixel.h \
    $$PWD/GCircle.h \
    $$PWD/GProcessVideoCamera.h \
    $$PWD/GProcessVideoWrite.h \
    $$PWD/GVideoWriter.h \
    $$PWD/GProcessImageBlend.h \
    $$PWD/GBlend.h \
    $$PWD/GRoi.h \
    $$PWD/GPrint.h \
    $$PWD/GProcessVideoCodec.h \
    $$PWD/GProcessFileStorage.h \
    $$PWD/GFile.h \
    $$PWD/GVector.h \
    $$PWD/GProcessMouse.h \
    $$PWD/GMouse.h \
    $$PWD/GProcessOpenGL.h \
    $$PWD/GOpenGL.h \
    $$PWD/GProcessQt.h \
    $$PWD/GMoviePlayer.h \
    $$PWD/GProcessImageSplit.h \
    $$PWD/GProcessImageThreshold.h \
    $$PWD/GProcessImageEqualize.h \
    $$PWD/GProcessImageAccumulate.h

SOURCES += \
    $$PWD/GProcess.cpp \
    $$PWD/GSetting.cpp \
    $$PWD/GConfig.cpp \
    $$PWD/GProcessImageLoad.cpp \
    $$PWD/GProcessVideoPlay.cpp \
    $$PWD/GProcessTrackbarSlider.cpp \
    $$PWD/GTrackbar.cpp \
    $$PWD/GImage.cpp \
    $$PWD/GVideo.cpp \
    $$PWD/GWindow.cpp \
    $$PWD/GDelay.cpp \
    $$PWD/GSmooth.cpp \
    $$PWD/GProcessSmooth.cpp \
    $$PWD/GProcessHalfImage.cpp \
    $$PWD/GHalf.cpp \
    $$PWD/GProcessEdge.cpp \
    $$PWD/GConvert.cpp \
    $$PWD/GEdge.cpp \
    $$PWD/GProcessPyramid.cpp \
    $$PWD/GPyramid.cpp \
    $$PWD/GProcessPixel.cpp \
    $$PWD/GPixel.cpp \
    $$PWD/GCircle.cpp \
    $$PWD/GProcessVideoCamera.cpp \
    $$PWD/GProcessVideoWrite.cpp \
    $$PWD/GVideoWriter.cpp \
    $$PWD/GProcessImageBlend.cpp \
    $$PWD/GBlend.cpp \
    $$PWD/GRoi.cpp \
    $$PWD/GPrint.cpp \
    $$PWD/GProcessVideoCodec.cpp \
    $$PWD/GProcessFileStorage.cpp \
    $$PWD/GFile.cpp \
    $$PWD/GVector.cpp \
    $$PWD/GProcessMouse.cpp \
    $$PWD/GMouse.cpp \
    $$PWD/GProcessOpenGL.cpp \
    $$PWD/GOpenGL.cpp \
    $$PWD/GProcessQt.cpp \
    $$PWD/GMoviePlayer.cpp \
    $$PWD/GProcessImageSplit.cpp \
    $$PWD/GProcessImageThreshold.cpp \
    $$PWD/GProcessImageEqualize.cpp \
    $$PWD/GProcessImageAccumulate.cpp

FORMS += \
    $$PWD/GMoviePlayer.ui
