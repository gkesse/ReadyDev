//===============================================
#ifndef _GProcessLinkedList_
#define _GProcessLinkedList_
//===============================================
#include "GProcess.h"
//===============================================
class GProcessLinkedList;
template<class T> class GNode;
template<class T> class GList;
//===============================================
class GProcessLinkedList : public GProcess {
public:
    GProcessLinkedList();
    ~GProcessLinkedList();

public:
    static GProcessLinkedList* Instance();
    void run(int argc = 0, char** argv = 0);

private:
    static GProcessLinkedList* m_instance;
};
//===============================================
template<class T>
class GNode {
public:
    GNode(T* data);

public:
    T* data() const;
    GNode<T> *&next();

private:
    T* m_data;
    GNode* m_next;
};
//===============================================
template <class T>
class GList {
public:
    GList();
    GList(T* data);
    virtual ~GList();

public:
    void append(GNode<T>*& node, T* data);
    void insert(T* data);
    bool remove(T* data);
    DWORD size() const;
    GNode<T>*& head();
    T* getFirst();
    T* getLast();
    T* getNext(T* data);
    T* find(DWORD(*pFunction)(T* param), DWORD value);

protected:
    GList(const GList& list);
    GList& operator=(const GList& list);

private:
    GNode<T>* m_head;
    DWORD m_size;
};
//===============================================
#endif
//===============================================
