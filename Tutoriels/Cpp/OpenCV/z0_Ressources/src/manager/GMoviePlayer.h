//===============================================
#ifndef _GMoviePlayer_
#define _GMoviePlayer_
//===============================================
#include "GInclude.h"
//===============================================
namespace Ui {
class GMoviePlayer;
}
//===============================================
class GMoviePlayer : public QWidget {
    Q_OBJECT

public:
    GMoviePlayer(QWidget* parent = 0);
    ~GMoviePlayer();
    bool open(const string& file);

public slots:
    void nextFrame();

protected:
    void paintEvent(QPaintEvent* event);

private:
    Ui::GMoviePlayer *ui;
    cv::VideoCapture m_cap;
    QTimer* m_timer;
    QImage m_qimg;
};
//===============================================
#endif
//===============================================
