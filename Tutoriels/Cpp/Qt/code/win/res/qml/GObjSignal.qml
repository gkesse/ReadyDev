import QtQuick 2.5
import QtQuick.Window 2.2

Rectangle {
    id: m_button
    clip: true
    implicitWidth: Math.max(5 + m_buttonContent.implicitWidth + 5, 80)
    implicitHeight: 5+ m_buttonContent.implicitHeight + 5
    color: "#55557f"

    Row {
        id: m_buttonContent
        anchors.centerIn: parent
        spacing: 5

        Image {
            id: m_buttonIcon
            width: 25
            height: 25
            source: "qrc:/img/shutdown_icon.png"
        }

        Text {
            id: m_buttonText
            color: "#ffffff"
            text: qsTr("Button")
            font.pixelSize: 18
        }
    }

    MouseArea {
        id: m_buttonMouseArea
        anchors.fill: parent
        onClicked: m_button.clicked()
    }

    signal clicked()
}

