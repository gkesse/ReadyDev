//===============================================
#ifndef _GGame_
#define _GGame_
//===============================================
#include <iostream>
#include <string>
#include <memory>
//===============================================
using namespace std;
//===============================================
class GGame {
public:
    static GGame* Create(const string& game);
    void playOneGame(const int& playersCount);
    virtual void initializeGame() = 0;
    virtual void makePlay(const int& player) = 0;
    virtual bool endOfGame() = 0;
    virtual void printWinner() = 0;

protected:
    int m_playersCount;
    int m_endTime;
};
//===============================================
#endif
//===============================================
