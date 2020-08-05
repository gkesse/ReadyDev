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

        Image {
            id: image
            anchors.centerIn: parent
            source: "qrc:/img/wilanow.jpg"
        }

        PinchArea {
            anchors.fill: parent
            pinch {
                target: image
                minimumScale: 0.2
                maximumScale: 2.0
                minimumRotation: -90
                maximumRotation: 90
            }
        }
    }
}
