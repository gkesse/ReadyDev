//===============================================
#include "GBuilder.h"
//===============================================
int main(int argc, char** argv) {
    GBuilder* m_builder = 0;

    m_builder = GBuilder::Create("Royal");
    m_builder->build();
    m_builder->getPizza()->print();

    m_builder = GBuilder::Create("Hawaii");
    m_builder->build();
    m_builder->getPizza()->print();
    return 0;
}
//===============================================
