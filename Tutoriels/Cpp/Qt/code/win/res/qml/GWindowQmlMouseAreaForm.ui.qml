import QtQuick 2.5

Rectangle {
    id: window
    width: 400
    height: 400
    color: "#051039"

    MouseArea {
        id: mouseArea
        anchors.fill: parent
    }

    Text {
        id: text1
        color: "#ffffff"
        text: qsTr("Bonjour tout le monde")
        anchors.verticalCenter: parent.verticalCenter
        anchors.horizontalCenter: parent.horizontalCenter
        font.family: "Arial"
        font.pixelSize: 21
    }
}

