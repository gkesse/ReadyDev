import QtQuick 2.5

Rectangle {
    id: m_circle
    width: 60; height: width
    radius: width/2
    color: "red"

    MouseArea {
        id: m_circleMouseArea
        anchors.fill: parent
        drag.target: m_circle
    }
}
