import QtQuick 2.5
import QtQuick.Window 2.2

Window {
    visible: true
    minimumWidth: 400
    minimumHeight: 400
    title: qsTr("Qt | QML | ReadyDev")

    Rectangle {
        id: m_window
        anchors.fill: parent
        color: "#051039"

        GObjPropertyChanged {
            id: m_button
            anchors.verticalCenter: parent.verticalCenter
            anchors.horizontalCenter: parent.horizontalCenter
        }
    }
}
