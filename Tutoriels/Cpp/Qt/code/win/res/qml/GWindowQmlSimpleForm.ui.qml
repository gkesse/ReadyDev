//===============================================
import QtQuick 2.5

//===============================================
Rectangle {
    width: 400
    height: 400
    //===============================================
    Image {
        anchors.fill: parent
        source: "qrc:/img/login_bg.png"
    }
    //===============================================
    Rectangle {
        id: rectangle
        height: 70
        color: "#33ffffff"
        anchors.right: parent.right
        anchors.rightMargin: 0
        anchors.left: parent.left
        anchors.leftMargin: 0
        anchors.top: parent.top
        anchors.topMargin: 0

        Rectangle {
            width: 50
            height: 50
            color: "#33ffffff"
            anchors.right: parent.right
            anchors.rightMargin: 10
            anchors.top: parent.top
            anchors.topMargin: 10

            Image {
                anchors.fill: parent
                source: "qrc:/img/shutdown_icon.png"
            }
        }
    }
}//===============================================

