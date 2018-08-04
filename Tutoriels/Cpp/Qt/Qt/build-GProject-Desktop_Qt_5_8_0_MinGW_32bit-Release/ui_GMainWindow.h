/********************************************************************************
** Form generated from reading UI file 'GMainWindow.ui'
**
** Created by: Qt User Interface Compiler version 5.8.0
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_GMAINWINDOW_H
#define UI_GMAINWINDOW_H

#include <QtCore/QVariant>
#include <QtWidgets/QAction>
#include <QtWidgets/QApplication>
#include <QtWidgets/QButtonGroup>
#include <QtWidgets/QGridLayout>
#include <QtWidgets/QHeaderView>
#include <QtWidgets/QLabel>
#include <QtWidgets/QSpacerItem>
#include <QtWidgets/QWidget>

QT_BEGIN_NAMESPACE

class Ui_GMainWindow
{
public:
    QGridLayout *gridLayout;
    QSpacerItem *verticalSpacer;
    QLabel *m_labelMessage;
    QSpacerItem *verticalSpacer_2;

    void setupUi(QWidget *GMainWindow)
    {
        if (GMainWindow->objectName().isEmpty())
            GMainWindow->setObjectName(QStringLiteral("GMainWindow"));
        GMainWindow->resize(400, 400);
        GMainWindow->setMinimumSize(QSize(400, 400));
        GMainWindow->setStyleSheet(QLatin1String("* {\n"
"	background-color: rgb(5, 16, 57);\n"
"	color: rgb(255, 255, 255);\n"
"	font: 75 14pt \"Arial Narrow\";\n"
"}\n"
"\n"
"QLabel {\n"
"	background-color: rgba(255, 255, 255, 0.2);\n"
"	padding: 10px;\n"
"	font-weight: 12px;\n"
"}\n"
""));
        gridLayout = new QGridLayout(GMainWindow);
        gridLayout->setSpacing(6);
        gridLayout->setContentsMargins(11, 11, 11, 11);
        gridLayout->setObjectName(QStringLiteral("gridLayout"));
        verticalSpacer = new QSpacerItem(20, 161, QSizePolicy::Minimum, QSizePolicy::Expanding);

        gridLayout->addItem(verticalSpacer, 0, 0, 1, 1);

        m_labelMessage = new QLabel(GMainWindow);
        m_labelMessage->setObjectName(QStringLiteral("m_labelMessage"));
        m_labelMessage->setAlignment(Qt::AlignCenter);

        gridLayout->addWidget(m_labelMessage, 1, 0, 1, 1);

        verticalSpacer_2 = new QSpacerItem(20, 160, QSizePolicy::Minimum, QSizePolicy::Expanding);

        gridLayout->addItem(verticalSpacer_2, 2, 0, 1, 1);


        retranslateUi(GMainWindow);

        QMetaObject::connectSlotsByName(GMainWindow);
    } // setupUi

    void retranslateUi(QWidget *GMainWindow)
    {
        GMainWindow->setWindowTitle(QApplication::translate("GMainWindow", "Qt | ReadyDev", Q_NULLPTR));
        m_labelMessage->setText(QApplication::translate("GMainWindow", "Bonjour tout le monde", Q_NULLPTR));
    } // retranslateUi

};

namespace Ui {
    class GMainWindow: public Ui_GMainWindow {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_GMAINWINDOW_H
