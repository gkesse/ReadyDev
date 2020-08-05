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

        GObjEventDrag {
            id: m_circle
            x: (m_window.width - width) / 2
            y: (m_window.height - height) / 2
        }
    }
}
