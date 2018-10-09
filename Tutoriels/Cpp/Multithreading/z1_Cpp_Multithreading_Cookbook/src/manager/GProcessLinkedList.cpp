//===============================================
#include "GProcessLinkedList.h"
//===============================================
GProcessLinkedList* GProcessLinkedList::m_instance = 0;
//===============================================
GProcessLinkedList::GProcessLinkedList() {

}
//===============================================
GProcessLinkedList::~GProcessLinkedList() {

}
//===============================================
GProcessLinkedList* GProcessLinkedList::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessLinkedList;
    }
    return m_instance;
}
//===============================================
void GProcessLinkedList::run(int argc, char **argv) {
    cout << "Bonjour tout le monde\n";
}
//===============================================
// GNode
//===============================================
template<class T>
GNode<T>::GNode(T* data) {
    m_data = data;
    m_next = 0;
}
//===============================================
template<class T>
T* GNode<T>::data() const {
    return m_data;
}
//===============================================
template<class T>
GNode<T>*& GNode<T>::next(){
    return m_next;
}
//===============================================
// GList
//===============================================
template<class T>
GList<T>::GList() {
    m_size = 0;
    m_head = 0;
}
//===============================================
template<class T>
GList<T>::GList(T* data) {
    m_size = 1;
    m_head = new GNode<T>(data);
}
//===============================================
template<class T>
GList<T>::~GList(){

}
//===============================================
template<class T>
void GList<T>::append(GNode<T>*& node, T* data) {
    if(node == 0) {
        m_size++;
        node = new GNode<T>(data);
        return;
    }
    append(node->next(), data);
}
//===============================================
template<class T>
void GList<T>::insert(T* data) {
    m_size++;
    if(m_head == 0)     {
        m_head = new GNode<T>(data);
        return;
    }
    GNode<T>* lNode = m_head;
    m_head = new GNode<T>(data);
    m_head->next() = lNode;
}
//===============================================
template<class T>
bool GList<T>::remove(T* data) {
    if(m_head == 0) {
        return false;
    }

    if(m_head->data() == data) {
        GNode<T>* lNode = m_head;
        m_head = m_head->next();
        delete lNode;
        m_size--;
        return true;
    }

    GNode<T>* lNode = m_head;
    GNode<T>* lNext = m_head->next();

    while(lNext != 0) {
        if(lNext->data() == data) {
            lNode->next() = lNext->next();
            delete lNext;
            m_size--;
            return true;
        }
        lNext = lNext->Next();
        lNode = lNode->Next();
    }
    return false;
}
//===============================================
template<class T>
DWORD GList<T>::size() const {
    return m_size;
}
//===============================================
template<class T>
GNode<T>*& GList<T>::head() {
    return m_head;
}
//===============================================
template<class T>
T* GList<T>::getFirst() {
    return m_head != 0 ? m_head->data() : 0;
}
//===============================================
template<class T>
T* GList<T>::getLast() {
    if(m_head) {
        GNode<T>* lNode = m_head;
        while(lNode->next()) {
            lNode = lNode->next();
        }
        return lNode->data();
    }
    return 0;
}
//===============================================
template<class T>
T* GList<T>::getNext(T* data) {
    if(m_head == 0) {
        return 0;
    }
    if(data == 0) {
        return getFirst();
    }
    if(m_head->data() == data) {
        return m_head->next() != 0 ? m_head->next()->data() : 0;
    }
    GNode<T>* lNext = m_head->next();
    while(lNext != 0) {
        if(lNext->data() == data){
            return lNext->next() != 0 ? lNext->next()->data() : 0;
        }
        lNext = lNext->next();
    }
    return 0;
}
//===============================================
template<class T>
T* GList<T>::find(DWORD(*pFind)(T* param), DWORD value)  {
    try {
        T* lData = 0;
        while(lData = getNext(lData)) {
            if(pFind(lData) == value) {
                return lData;
            }
        }
    }
    catch (...) { }
    return NULL;
}
//===============================================
