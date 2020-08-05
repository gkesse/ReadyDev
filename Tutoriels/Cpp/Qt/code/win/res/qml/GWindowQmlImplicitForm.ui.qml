import QtQuick 2.5
import QtQuick.Controls 2.1

Rectangle {
    id: m_window
    width: 400
    height: 400
    color: "#051039"

    Rectangle {
        id: m_button
        clip: true
        implicitWidth: Math.max(5 + m_buttonContent.implicitWidth + 5, 80)
        implicitHeight: 5+ m_buttonContent.implicitHeight + 5
        color: "#55557f"
        anchors.verticalCenter: parent.verticalCenter
        anchors.horizontalCenter: parent.horizontalCenter

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
}
