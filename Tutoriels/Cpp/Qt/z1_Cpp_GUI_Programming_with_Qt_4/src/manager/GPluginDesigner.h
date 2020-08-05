//================================================
#ifndef _GPluginDesigner_
#define _GPluginDesigner_
//================================================
#include "GInclude.h"
//================================================
class GPluginDesigner : public QObject, public QDesignerCustomWidgetInterface {
    Q_OBJECT
    Q_PLUGIN_METADATA(IID "org.qt-project.Qt.QDesignerCustomWidgetInterface")
    Q_INTERFACES(QDesignerCustomWidgetInterface)

public:
    GPluginDesigner(QObject *parent = 0);

    QString name() const;
    QString includeFile() const;
    QString group() const;
    QIcon icon() const;
    QString toolTip() const;
    QString whatsThis() const;
    bool isContainer() const;
    QWidget *createWidget(QWidget *parent);
};
//================================================
#endif
//================================================
