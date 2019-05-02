//===============================================
#ifndef _GPerson_
#define _GPerson_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct GPerson GPerson;
//===============================================
GPerson* GPerson_Constructor();
GPerson* GPerson_Constructor2(const char* name);
void GPerson_Destructor(GPerson* obj);
char* GPerson_Init(GPerson* obj);
void GPerson_Destructor(GPerson* obj);
void GPerson_Print(GPerson* obj);
void GPerson_Set_Name(GPerson* obj, const char* name);
char* GPerson_Get_Name(GPerson* obj);
//===============================================
typedef struct GPerson {
    //===============================================
    void (*Destructor)(GPerson* obj);
    void (*Print)(GPerson* obj);
    void (*Set_Name)(GPerson* obj, const char* name);
    char* (*Get_Name)(GPerson* obj);
    //===============================================
    char m_name[50];
    //===============================================
} GPerson;
//===============================================
GPerson* GPerson_Constructor() {
    GPerson* lObj = (GPerson*)malloc(sizeof(GPerson));
    sprintf(lObj->m_name, "%s", "_NONE_");
    GPerson_Init(lObj);
    return lObj; 
}
//===============================================
GPerson* GPerson_Constructor2(const char* name) {
    GPerson* lObj = (GPerson*)malloc(sizeof(GPerson));
    sprintf(lObj->m_name, "%s", name);
    GPerson_Init(lObj);
    return lObj; 
}
//===============================================
char* GPerson_Init(GPerson* obj) {
    obj->Destructor = GPerson_Destructor;
    obj->Print = GPerson_Print;
    obj->Set_Name = GPerson_Set_Name;
    obj->Get_Name = GPerson_Get_Name;
}
//===============================================
void GPerson_Destructor(GPerson* obj) {
    free(obj);
    obj = 0;
}
//===============================================
void GPerson_Print(GPerson* obj) {
    char lname[50];
    sprintf(lname, "Donnee: %s\n", obj->m_name);
    printf(lname);
}
//===============================================
void GPerson_Set_Name(GPerson* obj, const char* name) {
    sprintf(obj->m_name, "%s", name);
}
//===============================================
char* GPerson_Get_Name(GPerson* obj) {
    return obj->m_name;
}
//===============================================
#endif
//===============================================
