//===============================================
#ifndef _GChess_
#define _GChess_
//===============================================
#include "GGame.h"
//===============================================
class GChess : public GGame {
public:
    GChess();
    ~GChess();

public:
    void initializeGame();
    void makePlay(const int& player);
    bool endOfGame();
    void printWinner();
};
//===============================================
#endif
//===============================================
