import QtQuick 2.5
import QtQuick.Window 2.2

Window {
    id: main
    visible: true
    minimumWidth: 400
    minimumHeight: 400
    title: qsTr("Qt | QML | ReadyDev")

    GWindowQmlPropertyFunctionForm {
        anchors.fill: parent
    }
}