import QtQuick 2.5
import QtQuick.Controls 2.1

Rectangle {
    id: window
    width: 400
    height: 400
    color: "#051039"

    Rectangle {
        id: rectangle
        height: width
        color: "#33ffffff"
        anchors.right: parent.right
        anchors.rightMargin: 100
        anchors.left: parent.left
        anchors.leftMargin: 100
        anchors.verticalCenter: parent.verticalCenter
    }
}
