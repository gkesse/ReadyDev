import QtQuick 2.5
import QtQuick.Controls 2.1

Rectangle {
    id: m_window
    width: 400
    height: 400
    color: "#051039"

    Rectangle {
        id: button
        width: 5 + m_buttonText.width + 5
        height: 5 + m_buttonText.height + 5
        color: "#33ffffff"
        anchors.horizontalCenter: parent.horizontalCenter
        anchors.verticalCenter: parent.verticalCenter

        Text {
            id: m_buttonText
            x: 5
            y: 5
            text: qsTr("Créer")
            color: "#ffffffff"
            font.pixelSize: 20
        }
    }
}
