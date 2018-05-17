import QtQuick 2.5
import QtQuick.Controls 2.1

Rectangle {
    id: m_button
    width: 5 + m_buttonContent.width + 5
    height: 5 + m_buttonContent.height + 5
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
            verticalAlignment: Text.AlignVCenter
            horizontalAlignment: Text.AlignLeft
            font.pixelSize: 18
        }
    }
}
