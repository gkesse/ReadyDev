//================================================
#include "GPluginDesigner.h"
#include "GIconEditor.h"
//================================================
GPluginDesigner::GPluginDesigner(QObject *parent) :
    QObject(parent) {
}
//================================================
QString GPluginDesigner::name() const {
    return "IconEditor";
}
//================================================
QString GPluginDesigner::includeFile() const {
    return "GIconEditor.h";
}
//================================================
QString GPluginDesigner::group() const {
    return tr("Image Manipulation Widgets");
}
//================================================
QIcon GPluginDesigner::icon() const {
    return QIcon(":/img/iconeditor.png");
}
//================================================
QString GPluginDesigner::toolTip() const {
    return tr("An icon editor widget");
}
//================================================
QString GPluginDesigner::whatsThis() const {
    return tr("This widget is presented in Chapter 5 of <i>C++ GUI "
              "Programming with Qt 4</i> as an example of a custom Qt "
              "widget.");
}
//================================================
bool GPluginDesigner::isContainer() const {
    return false;
}
//================================================
QWidget *GPluginDesigner::createWidget(QWidget *parent) {
    return new GIconEditor(parent);
}
//================================================
