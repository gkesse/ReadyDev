import QtQuick 2.5
import QtQuick.Window 2.2

Window {
    visible: true
    minimumWidth: 400
    minimumHeight: 400
    title: qsTr("Qt | QML | ReadyDev")

    GWindowQmlSignalForm {
        anchors.fill: parent
    }
}