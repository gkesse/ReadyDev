import QtQuick 2.5
import QtQuick.Controls 2.1

Rectangle {
    id: m_window
    width: 400
    height: 400
    color: "#051039"

    Rectangle {
        id: m_button
        width: 5 + m_buttonText.height + 5 + m_buttonText.width + 5
        height: 5 + m_buttonText.height + 5
        color: "#33ffffff"
        anchors.horizontalCenter: parent.horizontalCenter
        anchors.verticalCenter: parent.verticalCenter

        Image {
            id: m_buttonIcon
            x: 5
            y: 5
            width: m_buttonText.height
            height: m_buttonText.height
            source: "qrc:/img/shutdown_icon.png"
        }

        Text {
            id: m_buttonText
            x: 5 + m_buttonIcon.width + 5
            y: m_buttonIcon.y
            text: qsTr("Text")
            font.pixelSize: 20
            color: "#ffffffff"
        }
    }
}
