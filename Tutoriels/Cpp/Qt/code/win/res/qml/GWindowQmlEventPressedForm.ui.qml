import QtQuick 2.5
import QtQuick.Controls 2.1

Rectangle {
    id: m_window
    width: 400
    height: 400
    color: "#051039"

    GObjEventPressed {
        id: m_button
        anchors.verticalCenter: parent.verticalCenter
        anchors.horizontalCenter: parent.horizontalCenter
    }
}
