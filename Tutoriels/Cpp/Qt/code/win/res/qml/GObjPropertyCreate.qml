import QtQuick 2.5

Rectangle {
    id: m_button
    property color m_bgReleasedColor: "#33ffffff"
    property color m_bgPressedColor: "#66ffffff"
    property color m_textColor: "white"
    clip: true
    implicitWidth: Math.max(5 + m_buttonContent.implicitWidth + 5, 80)
    implicitHeight: 5 + m_buttonContent.implicitHeight + 5
    color: {
        if(m_buttonMouseArea.containsMouse) {
            if(m_buttonMouseArea.pressed) {
                return m_button.m_bgReleasedColor;
            }
            else {
                return m_button.m_bgPressedColor
            }
        }
        else {
            return m_button.m_bgReleasedColor;
        }
    }

    Row {
        id: m_buttonContent
        anchors.centerIn: parent
        spacing: 5
        anchors.verticalCenterOffset: m_buttonMouseArea.pressed ? 1 : 0
        anchors.horizontalCenterOffset: m_buttonMouseArea.pressed ? 1 : 0

        Image {
            id: m_buttonIcon
            width: 25
            height: 25
            source: "qrc:/img/shutdown_icon.png"
        }

        Text {
            id: m_buttonText
            color: m_button.m_textColor
            text: qsTr("Button")
            font.pixelSize: 18
        }
    }

    MouseArea {
        id: m_buttonMouseArea
        hoverEnabled: true
        anchors.fill: parent
        acceptedButtons: Qt.LeftButton|Qt.MiddleButton|Qt.RightButton
        onClicked: {
            switch(mouse.button) {
            case Qt.LeftButton: console.log("Button Gauche Appuye");
                break;
            case Qt.MiddleButton: console.log("Button Milieu Appuye");
                break;
            case Qt.RightButton: console.log("Button Droite Appuye");
                break;
            }
        }
        onPositionChanged: {
            console.log("Position: ["+mouse.x+"; "+mouse.y+"]")
        }
    }
}
