//===============================================
#include "GMoviePlayer.h"
#include "ui_GMoviePlayer.h"
#include "GVideo.h"
#include "GImage.h"
//===============================================
GMoviePlayer::GMoviePlayer(QWidget* parent) :
    QWidget(parent), ui(new Ui::GMoviePlayer) {
    ui->setupUi(this);
}
//===============================================
GMoviePlayer::~GMoviePlayer() {
    delete ui;
}
//===============================================
bool GMoviePlayer::open(const string& file) {
    cv::Mat lImg;
    double lFps;

    GVideo::Instance()->load(file, m_cap);
    GVideo::Instance()->image(m_cap, lImg);
    GImage::Instance()->allocate(lImg, m_qimg);

    ui->m_image->setMinimumSize(m_qimg.width(), m_qimg.height());
    ui->m_image->setMaximumSize(m_qimg.width(), m_qimg.height());

    GImage::Instance()->copy(lImg, m_qimg);
    GVideo::Instance()->getProperty(m_cap, cv::CAP_PROP_FPS, lFps);

    m_timer = new QTimer(this);
    connect(m_timer, SIGNAL(timeout()), this, SLOT(nextFrame()));
    m_timer->start(1000 / lFps);
    return true;
}
//===============================================
void GMoviePlayer::nextFrame() {
    cv::Mat lImg;
    GVideo::Instance()->image(m_cap, lImg);
    if(lImg.empty() == true) {
        m_timer->stop();
        return;
    }
    GImage::Instance()->copy(lImg, m_qimg);
    update();
}
//===============================================
void GMoviePlayer::paintEvent(QPaintEvent* event) {
    QPainter lPainter(this);
    lPainter.drawImage(QPoint(ui->m_image->x(), ui->m_image->y()), m_qimg);
}
//===============================================
