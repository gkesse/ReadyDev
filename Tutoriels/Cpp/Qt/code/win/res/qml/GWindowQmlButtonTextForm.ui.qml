import QtQuick 2.5
import QtQuick.Controls 2.1

Rectangle {
    id: window
    width: 400
    height: 400
    color: "#051039"

    Rectangle {
        id: button
        x: 91
        y: 100
        width: buttonText.width + 2*10
        height: buttonText.height + 2*10
        color: "#33ffffff"
        anchors.horizontalCenter: parent.horizontalCenter
        anchors.verticalCenter: parent.verticalCenter

        Text {
            id: buttonText
            width: 32
            color: "#ffffff"
            text: qsTr("Créer")
            verticalAlignment: Text.AlignVCenter
            horizontalAlignment: Text.AlignHCenter
            anchors.rightMargin: 5
            anchors.leftMargin: 5
            anchors.bottomMargin: 5
            anchors.topMargin: 5
            anchors.fill: parent
            font.pixelSize: 18
        }
    }
}
