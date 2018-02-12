//===============================================
#include "GChannel.h"
//===============================================
int main(int argc, char** argv) {
    shared_ptr<GChannel> m_channel(new GChannel);
    cout << "Iterator :\n";
    while(m_channel->next()) {
        cout << "- " << m_channel->current() << "\n";
    }
    return 0;
}
//===============================================
