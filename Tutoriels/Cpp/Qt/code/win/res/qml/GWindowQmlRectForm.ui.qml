import QtQuick 2.5
import QtQuick.Controls 2.1

Rectangle {
    id: window
    width: 400
    height: 400
    color: "#051039"

    Rectangle {
        id: rectangle
        x: 91
        y: 100
        width: 200
        height: 60
        color: "#33ffffff"
        anchors.horizontalCenter: parent.horizontalCenter
        anchors.verticalCenter: parent.verticalCenter
    }
}
