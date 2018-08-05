//===============================================
#ifndef _GPersonStudent_
#define _GPersonStudent_
//===============================================
#include "GPerson.h"
//===============================================
typedef struct GPersonStudent GPersonStudent;
//===============================================
GPersonStudent* GPersonStudent_Constructor();
GPersonStudent* GPersonStudent_Constructor2(const char* name, int avg);
void GPersonStudent_Destructor(GPersonStudent* obj);
char* GPersonStudent_Init(GPersonStudent* obj);
void GPersonStudent_Print(GPersonStudent* obj);
void GPersonStudent_Set_Name(GPersonStudent* obj, const char* name);
char* GPersonStudent_Get_Name(GPersonStudent* obj);
void GPersonStudent_Set_Avg(GPersonStudent* obj, int avg);
char* GPersonStudent_Get_Avg(GPersonStudent* obj);
//===============================================
typedef struct GPersonStudent {
    //===============================================
    void (*Destructor)(GPersonStudent* obj);
    void (*Print)(GPersonStudent* obj);
    void (*Set_Name)(GPersonStudent* obj, const char* name);
    char* (*Get_Name)(GPersonStudent* obj);
    void (*Set_Avg)(GPersonStudent* obj, const char* name);
    char* (*Get_Avg)(GPersonStudent* obj);
    //===============================================
    int m_avg;
    //===============================================
} GPersonStudent;
//===============================================
GPersonStudent* GPersonStudent_Constructor() {
    GPersonStudent* lObj = (GPersonStudent*)malloc(sizeof(GPersonStudent));
    sprintf(lObj->m_name, "%s", "_NONE_");
    GPersonStudent_Init(lObj);
    return lObj; 
}
//===============================================
GPersonStudent* GPersonStudent_Constructor2(const char* name) {
    GPersonStudent* lObj = (GPersonStudent*)malloc(sizeof(GPersonStudent));
    sprintf(lObj->m_name, "%s", name);
    GPersonStudent_Init(lObj);
    return lObj; 
}
//===============================================
char* GPersonStudent_Init(GPersonStudent* obj) {
    obj->Destructor = GPersonStudent_Destructor;
    obj->Print = GPersonStudent_Print;
    obj->Set_Name = GPersonStudent_Set_Name;
    obj->Get_Name = GPersonStudent_Get_Name;
}
//===============================================
void GPersonStudent_Destructor(GPersonStudent* obj) {
    free(obj);
    obj = 0;
}
//===============================================
void GPersonStudent_Print(GPersonStudent* obj) {
    char lname[50];
    sprintf(lname, "Donnee: %s\n", obj->m_name);
    printf(lname);
}
//===============================================
void GPersonStudent_Set_Name(GPersonStudent* obj, const char* name) {
    sprintf(obj->m_name, "%s", name);
}
//===============================================
char* GPersonStudent_Get_Name(GPersonStudent* obj) {
    return obj->m_name;
}
//===============================================
#endif
//===============================================
