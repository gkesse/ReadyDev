//===============================================
#ifndef _GMonopoly_
#define _GMonopoly_
//===============================================
#include "GGame.h"
//===============================================
class GMonopoly : public GGame {
public:
    GMonopoly();
    ~GMonopoly();

public:
    void initializeGame();
    void makePlay(const int& player);
    bool endOfGame();
    void printWinner();
};
//===============================================
#endif
//===============================================
