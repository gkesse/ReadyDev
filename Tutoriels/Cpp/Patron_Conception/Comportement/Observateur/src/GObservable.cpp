//===============================================
#include "GObservable.h"
//===============================================
void GObservable::addObserver(GObserver* observer) {
    m_observerMap.push_back(observer);
}
//===============================================
void GObservable::notify(const string& data) {
    for(int i = 0; i < m_observerMap.size(); i++) {
        GObserver* m_observer = m_observerMap[i];
        m_observer->update(data);
    }
}
//===============================================
