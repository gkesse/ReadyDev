//===============================================
#include "GGame.h"
//===============================================
int main(int argc, char** argv) {
    shared_ptr<GGame> m_monopoly(GGame::Create("Monopoly"));
    shared_ptr<GGame> m_chess(GGame::Create("Chess"));
    m_monopoly->playOneGame(4);
    m_chess->playOneGame(2);
}
//===============================================
