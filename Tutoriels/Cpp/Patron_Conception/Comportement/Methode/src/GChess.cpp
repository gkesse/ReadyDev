//===============================================
#include "GChess.h"
//===============================================
GChess::GChess() {
    m_endTime = 0;
}
//===============================================
GChess::~GChess() {

}
//===============================================
void GChess::initializeGame() {
    cout << "Chess : Initialize | ";
    cout << "Players : " << m_playersCount << "\n";
}
//===============================================
void GChess::makePlay(const int& player) {
    cout << "Chess : Make Play : " << player << "\n";
}
//===============================================
bool GChess::endOfGame() {
    m_endTime++;
    if(m_endTime > m_playersCount) {
        cout << "Chess : Game Over\n";
        return true;
    }
    return false;
}
//===============================================
void GChess::printWinner() {
    cout << "Chess : Winner : N-";
    cout << m_playersCount / 2 << "\n";
}
//===============================================
