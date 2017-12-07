//===============================================
#include "GMonopoly.h"
//===============================================
GMonopoly::GMonopoly() {
    m_endTime = 0;
}
//===============================================
GMonopoly::~GMonopoly() {

}
//===============================================
void GMonopoly::initializeGame() {
    cout << "Monopoly : Initialize | ";
    cout << "Players : " << m_playersCount << "\n";
}
//===============================================
void GMonopoly::makePlay(const int& player) {
    cout << "Monopoly : Make Play : " << player << "\n";
}
//===============================================
bool GMonopoly::endOfGame() {
    m_endTime++;
    if(m_endTime > m_playersCount) {
        cout << "Monopoly : Game Over\n";
        return true;
    }
    return false;
}
//===============================================
void GMonopoly::printWinner() {
    cout << "Monopoly : Winner : N-";
    cout << m_playersCount / 2 << "\n";
}
//===============================================
