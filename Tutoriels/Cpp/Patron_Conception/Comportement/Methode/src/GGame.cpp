//===============================================
#include "GGame.h"
#include "GMonopoly.h"
#include "GChess.h"
//===============================================
GGame* GGame::Create(const string& game) {
    if(game == "Monopoly") {return new GMonopoly;}
    if(game == "Chess") {return new GChess;}
    return 0;
}
//===============================================
void GGame::playOneGame(const int &playersCount) {
    m_playersCount = playersCount;
    initializeGame();
    int j = 0;
    while(!endOfGame()) {
        makePlay(j);
        j = (j + 1) % playersCount;
    }
    printWinner();
}
//===============================================
