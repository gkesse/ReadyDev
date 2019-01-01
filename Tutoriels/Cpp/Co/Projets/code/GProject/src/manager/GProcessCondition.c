//===============================================
#include "GProcessCondition.h"
//===============================================
static GProcessConditionO* m_GProcessConditionO = 0;
//===============================================
GProcessConditionO* GProcessCondition_Constructor();
void GProcessCondition_Interface(GProcessConditionO* obj);
void GProcessCondition_Strategy(GProcessO* obj);
void GProcessCondition_Run();
//===============================================
GProcessConditionO* GProcessCondition_Constructor() {
    GProcessConditionO* lObj = (GProcessConditionO*)malloc(sizeof(GProcessConditionO));
    GProcessCondition_Interface(lObj);
    return lObj;
}
//===============================================
void GProcessCondition_Interface(GProcessConditionO* obj) {
    obj->Strategy = GProcessCondition_Strategy;
}
//===============================================
GProcessConditionO* GProcessCondition() {
    if(m_GProcessConditionO == 0) {
        m_GProcessConditionO = GProcessCondition_Constructor();
    }
    return m_GProcessConditionO;
}
//===============================================
void GProcessCondition_Strategy(GProcessO* obj) {
    obj->Run = GProcessCondition_Run;
}
//===============================================
void GProcessCondition_Run() {
    printf("### Effectuer une condition\n");
    int lNote = 10;
    if(lNote < 12) {
        printf("PASSABLE\n");
    }
    else if(lNote < 14) {
        printf("ASSEZ BIEN\n");
    }
    else if(lNote < 17) {
        printf("BIEN\n");
    }
    else {
        printf("TRES BIEN\n");
    }
}
//===============================================
