#include <QApplication>
#include <QWidget>
#include <QLabel>
#include <QBoxLayout>

int main(int argc, char** argv) {
    QApplication app(argc, argv);
    QWidget *m_mainWindow = new QWidget;
    m_mainWindow->setStyleSheet(""
                                "QLabel {"
                                "background: #051039;"
                                "color: white;"
                                "font-family: arial;"
                                "font-size: 16px;"
                                "}"
                                "");

    QLabel *m_label = new QLabel;
    m_label->setText("Simple Program...");
    m_label->setAlignment(Qt::AlignHCenter | Qt::AlignVCenter);

    QVBoxLayout *m_mainLayout = new QVBoxLayout;
    m_mainLayout->addWidget(m_label);

    m_mainWindow->setLayout(m_mainLayout);
    m_mainWindow->setWindowTitle("GMainWindow");
    m_mainWindow->resize(400, 200);
    m_mainWindow->show();
    return app.exec();
}
