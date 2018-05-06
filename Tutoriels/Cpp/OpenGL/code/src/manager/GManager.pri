include(C:\Users\sabine\Downloads\Gerard\freeglut-3.0.0\freeglut-3.0.0\GFreeGLUT.pri)
include(C:\Users\sabine\Downloads\Gerard\glew-2.1.0-win32\glew-2.1.0\GGLEW.pri)
include(C:\Users\sabine\Downloads\Gerard\SDL2-devel-2.0.8-mingw\SDL2-2.0.8\i686-w64-mingw32\GSDL.pri)
include(C:\Users\sabine\Downloads\Gerard\bullet3-master\bullet3-master\GBullet.pri)
include(C:\Users\sabine\Downloads\Gerard\glfw-3.2.1\glfw-3.2.1\GGLFW.pri)
include(C:\Users\sabine\Downloads\Gerard\glm-master\glm-master\GGLM.pri)
include(C:\Users\sabine\Downloads\Gerard\SDL2_image-devel-2.0.3-mingw\SDL2_image-2.0.3\i686-w64-mingw32\GSDLImage.pri)
include(C:\Users\sabine\Downloads\Gerard\SDL2_gfx-1.0.4\SDL2_gfx-1.0.4\GSDLGfx.pri)

LIBS += \
     -lopengl32 -lmingw32 -lfreeglut.dll -lSDL2main -lSDL2 -lSDL2_image.dll -lglew32 -lglfw3 -lgdi32

INCLUDEPATH += \
    $$PWD

HEADERS += \
    $$PWD/GWindow.h \
    $$PWD/GConfig.h \
    $$PWD/GWindowGLUT.h \
    $$PWD/GWindowSDL.h \
    $$PWD/GDraw.h \
    $$PWD/GDrawSDL.h \
    $$PWD/GDrawGLUT.h \
    $$PWD/GVertex.h \
    $$PWD/GShader.h \
    $$PWD/GFile.h \
    $$PWD/GDrawSDLSimple.h \
    $$PWD/GDrawSDLColor.h \
    $$PWD/GWindowQt.h \
    $$PWD/GWindowQtForm.h \
    $$PWD/GWindowQtFormGL.h \
    $$PWD/GWindowGLFW.h \
    $$PWD/GInclude.h \
    $$PWD/GDrawQt.h \
    $$PWD/GDrawQtSimple.h \
    $$PWD/GDrawQtLayout.h \
    $$PWD/GDrawQtBind.h \
    $$PWD/GShaderBind.h \
    $$PWD/GShaderLayout.h \
    $$PWD/GDrawQtUniform.h \
    $$PWD/GDrawQtBackground.h \
    $$PWD/GDrawQtRead.h \
    $$PWD/GDrawQtUniformBlock.h \
    $$PWD/GDrawQtLightDiffuse.h \
    $$PWD/GDrawGLFW.h \
    $$PWD/GDrawGLFWBackground.h \
    $$PWD/GDrawGLFWSimple.h \
    $$PWD/GCamera.h \
    $$PWD/GDrawGLFWPoint.h \
    $$PWD/GDrawGLFWLine.h \
    $$PWD/GObjPoint.h \
    $$PWD/GDrawGLFWObject.h \
    $$PWD/GDrawSDLBackground.h \
    $$PWD/GDrawSDLMatrix.h \
    $$PWD/GDrawSDLRotate.h \
    $$PWD/GDrawSDLTranslate.h \
    $$PWD/GDrawSDLScale.h \
    $$PWD/GDrawSDLComposite.h \
    $$PWD/GDrawSDLCube.h \
    $$PWD/GObjCube.h \
    $$PWD/GDrawSDLCubeObj.h \
    $$PWD/GDrawSDLCubeAnimate.h \
    $$PWD/GDrawSDLMatrixSave.h \
    $$PWD/GDrawSDLEvent.h \
    $$PWD/GEvent.h \
    $$PWD/GDrawSDLTexture.h \
    $$PWD/GTexture.h \
    $$PWD/GTextureQt.h \
    $$PWD/GTextureSDL.h \
    $$PWD/GDrawQtTexture.h \
    $$PWD/GDrawSDLTextureRepeat.h \
    $$PWD/GObjBox.h \
    $$PWD/GDrawSDLTextureObj.h \
    $$PWD/GObjLand.h \
    $$PWD/GDrawSDLCamera.h \
    $$PWD/GObjCabin.h \
    $$PWD/GDrawSDLRelic.h \
    $$PWD/GObjGround.h \
    $$PWD/GObjCrystal.h \
    $$PWD/GObjTorus.h \
    $$PWD/GObjCubeVbo.h \
    $$PWD/GDrawSDLCubeVbo.h \
    $$PWD/GDrawSDLTextureVbo.h \
    $$PWD/GObjBoxVbo.h \
    $$PWD/GDrawSDLCubeVao.h \
    $$PWD/GObjCubeVao.h \
    $$PWD/GDrawSDLTextureVao.h \
    $$PWD/GObjBoxVao.h \
    $$PWD/GLight.h \
    $$PWD/GLightDiffuse.h \
    $$PWD/GLightAds.h \
    $$PWD/GDrawQtLightAds.h \
    $$PWD/GDrawQtLightTwoSided.h \
    $$PWD/GObjTeapot.h \
    $$PWD/GDataTeapot.h \
    $$PWD/GDrawQtLightFlat.h \
    $$PWD/GObjOgre.h \
    $$PWD/GDrawQtSubRoutine.h \
    $$PWD/GDrawQtLookPerforate.h

SOURCES += \
    $$PWD/GWindow.cpp \
    $$PWD/GConfig.cpp \
    $$PWD/GWindowGLUT.cpp \
    $$PWD/GWindowSDL.cpp \
    $$PWD/GDraw.cpp \
    $$PWD/GDrawSDL.cpp \
    $$PWD/GDrawGLUT.cpp \
    $$PWD/GVertex.cpp \
    $$PWD/GShader.cpp \
    $$PWD/GFile.cpp \
    $$PWD/GDrawSDLSimple.cpp \
    $$PWD/GDrawSDLColor.cpp \
    $$PWD/GWindowQt.cpp \
    $$PWD/GWindowQtForm.cpp \
    $$PWD/GWindowQtFormGL.cpp \
    $$PWD/GWindowGLFW.cpp \
    $$PWD/GDrawQt.cpp \
    $$PWD/GDrawQtSimple.cpp \
    $$PWD/GDrawQtLayout.cpp \
    $$PWD/GDrawQtBind.cpp \
    $$PWD/GShaderBind.cpp \
    $$PWD/GShaderLayout.cpp \
    $$PWD/GDrawQtUniform.cpp \
    $$PWD/GDrawQtBackground.cpp \
    $$PWD/GDrawQtRead.cpp \
    $$PWD/GDrawQtUniformBlock.cpp \
    $$PWD/GDrawQtLightDiffuse.cpp \
    $$PWD/GDrawGLFW.cpp \
    $$PWD/GDrawGLFWBackground.cpp \
    $$PWD/GDrawGLFWSimple.cpp \
    $$PWD/GCamera.cpp \
    $$PWD/GDrawGLFWPoint.cpp \
    $$PWD/GDrawGLFWLine.cpp \
    $$PWD/GObjPoint.cpp \
    $$PWD/GDrawGLFWObject.cpp \
    $$PWD/GDrawSDLBackground.cpp \
    $$PWD/GDrawSDLMatrix.cpp \
    $$PWD/GDrawSDLRotate.cpp \
    $$PWD/GDrawSDLTranslate.cpp \
    $$PWD/GDrawSDLScale.cpp \
    $$PWD/GDrawSDLComposite.cpp \
    $$PWD/GDrawSDLCube.cpp \
    $$PWD/GObjCube.cpp \
    $$PWD/GDrawSDLCubeObj.cpp \
    $$PWD/GDrawSDLCubeAnimate.cpp \
    $$PWD/GDrawSDLMatrixSave.cpp \
    $$PWD/GDrawSDLEvent.cpp \
    $$PWD/GEvent.cpp \
    $$PWD/GDrawSDLTexture.cpp \
    $$PWD/GTexture.cpp \
    $$PWD/GTextureQt.cpp \
    $$PWD/GTextureSDL.cpp \
    $$PWD/GDrawQtTexture.cpp \
    $$PWD/GDrawSDLTextureRepeat.cpp \
    $$PWD/GObjBox.cpp \
    $$PWD/GDrawSDLTextureObj.cpp \
    $$PWD/GObjLand.cpp \
    $$PWD/GDrawSDLCamera.cpp \
    $$PWD/GObjCabin.cpp \
    $$PWD/GDrawSDLRelic.cpp \
    $$PWD/GObjGround.cpp \
    $$PWD/GObjCrystal.cpp \
    $$PWD/GObjTorus.cpp \
    $$PWD/GObjCubeVbo.cpp \
    $$PWD/GDrawSDLCubeVbo.cpp \
    $$PWD/GDrawSDLTextureVbo.cpp \
    $$PWD/GObjBoxVbo.cpp \
    $$PWD/GDrawSDLCubeVao.cpp \
    $$PWD/GObjCubeVao.cpp \
    $$PWD/GDrawSDLTextureVao.cpp \
    $$PWD/GObjBoxVao.cpp \
    $$PWD/GLight.cpp \
    $$PWD/GLightDiffuse.cpp \
    $$PWD/GLightAds.cpp \
    $$PWD/GDrawQtLightAds.cpp \
    $$PWD/GDrawQtLightTwoSided.cpp \
    $$PWD/GObjTeapot.cpp \
    $$PWD/GDrawQtLightFlat.cpp \
    $$PWD/GObjOgre.cpp \
    $$PWD/GDrawQtSubRoutine.cpp \
    $$PWD/GDrawQtLookPerforate.cpp

FORMS += \
    $$PWD/GWindowQtForm.ui
