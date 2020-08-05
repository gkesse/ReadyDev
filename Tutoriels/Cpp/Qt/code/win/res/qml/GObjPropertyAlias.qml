import QtQuick 2.5

Rectangle {
    id: m_button
    property color backgroundReleasedColor: "#33ffffff"
    property color backgroundPressedColor: "#66ffffff"
    property color textColor: "white"
    property alias pressed: m_buttonMouseArea.pressed
    property alias containsMouse: m_buttonMouseArea.containsMouse
    clip: true
    implicitWidth: Math.max(5 + m_buttonContent.implicitWidth + 5, 80)
    implicitHeight: 5 + m_buttonContent.implicitHeight + 5
    color: {
        if(m_button.containsMouse) {
            if(m_button.pressed) {
                return m_button.backgroundReleasedColor;
            }
            else {
                return m_button.backgroundPressedColor
            }
        }
        else {
            return m_button.backgroundReleasedColor;
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
            color: m_button.textColor
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
    }
}
