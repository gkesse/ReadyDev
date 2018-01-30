//===============================================
#ifndef _GChannel_
#define _GChannel_
//===============================================
#include "GIterator.h"
//===============================================
class GChannel : public GIterator<string> {
public:
    GChannel();
    ~GChannel();

public:
    void reset();
    bool next();
    string current();

private:
    string m_channel[100];
    int m_size;
    int m_index;

};
//===============================================
#endif
//===============================================
