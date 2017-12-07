//===============================================
#include "GCareTaker.h"
#include "GOriginator.h"
//===============================================
int main(int argc, char** argv) {
    shared_ptr<GCareTaker> m_careTaker(new GCareTaker);
    shared_ptr<GOriginator> m_originator(new GOriginator);
    m_originator->setState("State1");
    m_originator->setState("State2");
    m_careTaker->addMomento(m_originator->saveToMomemto());
    m_originator->setState("State3");
    m_careTaker->addMomento(m_originator->saveToMomemto());
    m_originator->setState("State4");
    m_originator->restoreFromMomemto(m_careTaker->getMomento(0));
}
//===============================================
