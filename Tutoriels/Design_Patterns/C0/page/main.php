<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre les patrons de conception en C<br></div></a></div></div><div class="Body2 Orange">Le but de ce tutoriel est de vous apprendre les patrons de conception en <b>C</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3">Le but de ce tutoriel est de vous apprendre les patrons de conception en C.<br><br><div class="Img3 GImage"><img src="/data/img/defaults/banner_design_patterns_c.png" alt="/data/img/defaults/banner_design_patterns_c.png"></div><br><h2 class="Title7 GTitle2" id="Introduction-Prérequis"><a class="Link9" href="#Introduction">Prérequis</a></h2><br>$\checkmark$ Apprendre la programmation en C<br>$\checkmark$ Apprendre la compilation d'un projet C avec MinGW<br><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Patron stratégie"><a class="Link3" href="#">Patron stratégie</a></h1><div class="Body3">Création du patron stratégie.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1593674031732"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1593674031732");</script></div><br><h2 class="Title7 GTitle2" id="Patron stratégie-Posons le problème"><a class="Link9" href="#Patron stratégie">Posons le problème</a></h2><br>On désire réaliser un module de gestion de timers sous Windows et sous UNIX (<b>GAlarm</b>). Le problème est que cette fonctionnalité est dépendante de la plateforme. La gestion des timers sous Windows est différente de celle sous Windows. Pour répondre à cette problématique, nous créons une interface commune (<b>GAlarm</b>) entre le module de gestion sous Windows (<b>GAlarmWin</b>) et celui sous UNIX (<b>GAlarmUnix</b>).<br><br><h2 class="Title7 GTitle2" id="Patron stratégie-Interface de gestion des timers"><a class="Link9" href="#Patron stratégie">Interface de gestion des timers</a></h2><br><br><h3 class="Title8 GTitle3">GAlarm.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAlarm_
#define _GAlarm_
//===============================================
#include "GInclude.h"
//===============================================
typedef struct _GAlarmO GAlarmO;
//===============================================
struct _GAlarmO {
    void* m_child;
    void (*Callback)(char* alarmId, void* func);
    void (*Timer)(char* alarmId, int msec);
    void (*Start)(char* alarmId);
    void (*Restart)(char* alarmId);
    void (*Pause)();
};
//===============================================
GAlarmO* GAlarm_New();
void GAlarm_Delete(GAlarmO* obj);
GAlarmO* GAlarm();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GAlarm.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GAlarm.h"
#include "GAlarmWin.h"
#include "GAlarmUnix.h"
//===============================================
static void GAlarm_Callback(char* alarmId, void* func);
static void GAlarm_Timer(char* alarmId, int msec);
static void GAlarm_Start(char* alarmId);
static void GAlarm_Restart(char* alarmId);
static void GAlarm_Pause();
//===============================================
GAlarmO* GAlarm_New() {
    GAlarmO* lObj = (GAlarmO*)malloc(sizeof(GAlarmO));
    lObj-&gt;m_child = 0;
    lObj-&gt;Callback = GAlarm_Callback;
    lObj-&gt;Timer = GAlarm_Timer;
    lObj-&gt;Start = GAlarm_Start;
    lObj-&gt;Restart = GAlarm_Restart;
    lObj-&gt;Pause = GAlarm_Pause;
    return lObj;
}
//===============================================
void GAlarm_Delete(GAlarmO* obj) {
    if(obj != 0) {
        if(obj-&gt;m_child != 0) {
            free(obj-&gt;m_child);
        }
        free(obj);
    }
}
//===============================================
GAlarmO* GAlarm() {
#if defined(__WIN32)
    return GAlarmWin();
#elif defined(__unix)
    return GAlarmUnix();
#endif
    return 0;
}
//===============================================
static void GAlarm_Callback(char* alarmId, void* func) {}
static void GAlarm_Timer(char* alarmId, int msec) {}
static void GAlarm_Start(char* alarmId) {}
static void GAlarm_Restart(char* alarmId) {}
static void GAlarm_Pause() {}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron stratégie-Module de gestion des timers sous Windows"><a class="Link9" href="#Patron stratégie">Module de gestion des timers sous Windows</a></h2><br><h3 class="Title8 GTitle3">GAlarmWin.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAlarmWin_
#define _GAlarmWin_
//===============================================
#include "GAlarm.h"
//===============================================
typedef struct _GAlarmWinO GAlarmWinO;
typedef struct _GMapO_GAlarmWin_GCHAR_PTR_GVOID_PTR GMapO_GAlarmWin_GCHAR_PTR_GVOID_PTR;
//===============================================
struct _GAlarmWinO {
    GAlarmO* m_parent;
    //===============================================
    GMapO_GAlarmWin_GCHAR_PTR_GVOID_PTR* m_timerMap ;
    GMapO_GAlarmWin_GCHAR_PTR_GVOID_PTR* m_timerIdMap ;
    GMapO_GAlarmWin_GCHAR_PTR_GVOID_PTR* m_callbackMap ;
};
//===============================================
GAlarmO* GAlarmWin_New();
void GAlarmWin_Delete();
GAlarmO* GAlarmWin();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GAlarmWin.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GAlarmWin.h"
#include "GMap2.h"
//===============================================
#if defined(__WIN32)
//===============================================
GDECLARE_MAP(GAlarmWin, GCHAR_PTR, GVOID_PTR)
GDEFINE_MAP(GAlarmWin, GCHAR_PTR, GVOID_PTR)
//===============================================
typedef void WINAPI (*GALARM_CALLBACK)(UINT wTimerID, UINT msg, DWORD dwUser, DWORD dwl, DWORD dw2);
//===============================================
static GAlarmO* m_GAlarmWinO = 0;
//===============================================
static void GAlarmWin_Callback(char* alarmId, void* func);
static void GAlarmWin_Timer(char* alarmId, int msec);
static void GAlarmWin_Start(char* alarmId);
static void GAlarmWin_Pause();
//===============================================
GAlarmO* GAlarmWin_New() {
    GAlarmO* lParent = GAlarm_New();
    GAlarmWinO* lChild = (GAlarmWinO*)malloc(sizeof(GAlarmWinO));
    
    lChild-&gt;m_timerMap = GMap_New(GAlarmWin, GCHAR_PTR, GVOID_PTR)();
    lChild-&gt;m_timerIdMap = GMap_New(GAlarmWin, GCHAR_PTR, GVOID_PTR)();
    lChild-&gt;m_callbackMap = GMap_New(GAlarmWin, GCHAR_PTR, GVOID_PTR)();

    lChild-&gt;m_parent = lParent;

    lParent-&gt;m_child = lChild;
    lParent-&gt;Callback = GAlarmWin_Callback;
    lParent-&gt;Timer = GAlarmWin_Timer;
    lParent-&gt;Start = GAlarmWin_Start;
    lParent-&gt;Pause = GAlarmWin_Pause;
    return lParent;
}
//===============================================
void GAlarmWin_Delete() {
    GAlarm_Delete(m_GAlarmWinO);
    m_GAlarmWinO  = 0;
}
//===============================================
GAlarmO* GAlarmWin() {
    if(m_GAlarmWinO == 0) {
        m_GAlarmWinO = GAlarmWin_New();
    }
    return m_GAlarmWinO;
}
//===============================================
static void GAlarmWin_Timer(char* alarmId, int msec) {
    GAlarmWinO* lChild = m_GAlarmWinO-&gt;m_child;
    GMapO(GAlarmWin, GCHAR_PTR, GVOID_PTR)* lTimerMap = lChild-&gt;m_timerMap;
    lTimerMap-&gt;SetData(lTimerMap, alarmId, (void*)msec, GMap_EqualChar);
}
//===============================================
static void GAlarmWin_Callback(char* alarmId, void* func) {
    GAlarmWinO* lChild = m_GAlarmWinO-&gt;m_child;
    GMapO(GAlarmWin, GCHAR_PTR, GVOID_PTR)* lCallbackMap = lChild-&gt;m_callbackMap;
    lCallbackMap-&gt;SetData(lCallbackMap, alarmId, (void*)func, GMap_EqualChar);
}
//===============================================
static void GAlarmWin_Start(char* alarmId) {
    GAlarmWinO* lChild = m_GAlarmWinO-&gt;m_child;
    GMapO(GAlarmWin, GCHAR_PTR, GVOID_PTR)* lTimerMap = lChild-&gt;m_timerMap;
    GMapO(GAlarmWin, GCHAR_PTR, GVOID_PTR)* lTimerIdMap = lChild-&gt;m_timerIdMap;
    GMapO(GAlarmWin, GCHAR_PTR, GVOID_PTR)* lCallbackMap = lChild-&gt;m_callbackMap;
    int lTimer = (int)lTimerMap-&gt;GetData(lTimerMap, alarmId, GMap_EqualChar);
    GALARM_CALLBACK onFunc = (GALARM_CALLBACK)lCallbackMap-&gt;GetData(lCallbackMap, alarmId, GMap_EqualChar);
    MMRESULT lTimerId = timeSetEvent(lTimer, 1, (LPTIMECALLBACK)onFunc, 1, TIME_PERIODIC);   
    lTimerIdMap-&gt;SetData(lTimerIdMap, alarmId, (void*)lTimerId, GMap_EqualChar);
}
//===============================================
static void GAlarmWin_Pause() {
    while(1) {
        Sleep(1);
    }
}
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron stratégie-Module de gestion des timers sous UNIX"><a class="Link9" href="#Patron stratégie">Module de gestion des timers sous UNIX</a></h2><br><h3 class="Title8 GTitle3">GAlarmUnix.h</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#ifndef _GAlarmUnix_
#define _GAlarmUnix_
//===============================================
#include "GAlarm.h"
//===============================================
typedef struct _GAlarmUnixO GAlarmUnixO;
typedef struct _GMapO_GAlarmUnix_GCHAR_PTR_GVOID_PTR GMapO_GAlarmUnix_GCHAR_PTR_GVOID_PTR;
//===============================================
struct _GAlarmUnixO {
    GAlarmO* m_parent;
    //===============================================
    GMapO_GAlarmUnix_GCHAR_PTR_GVOID_PTR* m_timerMap ;
    GMapO_GAlarmUnix_GCHAR_PTR_GVOID_PTR* m_timerIdMap ;
    GMapO_GAlarmUnix_GCHAR_PTR_GVOID_PTR* m_callbackMap ;
};
//===============================================
GAlarmO* GAlarmUnix_New();
void GAlarmUnix_Delete();
GAlarmO* GAlarmUnix();
//===============================================
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">GAlarmUnix.c</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#include "GAlarmUnix.h"
#include "GMap2.h"
//===============================================
#if defined(__unix)
//===============================================
GDECLARE_MAP(GAlarmUnix, GCHAR_PTR, GVOID_PTR)
GDEFINE_MAP(GAlarmUnix, GCHAR_PTR, GVOID_PTR)
//===============================================
typedef void (*GALARM_CALLBACK)(int sig);
//===============================================
static GAlarmO* m_GAlarmUnixO = 0;
//===============================================
static void GAlarmUnix_Callback(char* alarmId, void* func);
static void GAlarmUnix_Timer(char* alarmId, int msec);
static void GAlarmUnix_Start(char* alarmId);
static void GAlarmUnix_Restart(char* alarmId);
static void GAlarmUnix_Pause();
//===============================================
GAlarmO* GAlarmUnix_New() {
    GAlarmO* lParent = GAlarm_New();
    GAlarmUnixO* lChild = (GAlarmUnixO*)malloc(sizeof(GAlarmUnixO));
    
    lChild-&gt;m_timerMap = GMap_New(GAlarmUnix, GCHAR_PTR, GVOID_PTR)();
    lChild-&gt;m_timerIdMap = GMap_New(GAlarmUnix, GCHAR_PTR, GVOID_PTR)();
    lChild-&gt;m_callbackMap = GMap_New(GAlarmUnix, GCHAR_PTR, GVOID_PTR)();

    lChild-&gt;m_parent = lParent;

    lParent-&gt;m_child = lChild;
    lParent-&gt;Callback = GAlarmUnix_Callback;
    lParent-&gt;Timer = GAlarmUnix_Timer;
    lParent-&gt;Start = GAlarmUnix_Start;
    lParent-&gt;Restart = GAlarmUnix_Restart;
    lParent-&gt;Pause = GAlarmUnix_Pause;
    return lParent;
}
//===============================================
void GAlarmUnix_Delete() {
    GAlarm_Delete(m_GAlarmUnixO);
    m_GAlarmUnixO  = 0;
}
//===============================================
GAlarmO* GAlarmUnix() {
    if(m_GAlarmUnixO == 0) {
        m_GAlarmUnixO = GAlarmUnix_New();
    }
    return m_GAlarmUnixO;
}
//===============================================
static void GAlarmUnix_Timer(char* alarmId, int msec) {
    GAlarmUnixO* lChild = m_GAlarmUnixO-&gt;m_child;
    GMapO(GAlarmUnix, GCHAR_PTR, GVOID_PTR)* lTimerMap = lChild-&gt;m_timerMap;
    lTimerMap-&gt;SetData(lTimerMap, alarmId, (void*)msec, GMap_EqualChar);
}
//===============================================
static void GAlarmUnix_Callback(char* alarmId, void* func) {
    GAlarmUnixO* lChild = m_GAlarmUnixO-&gt;m_child;
    GMapO(GAlarmUnix, GCHAR_PTR, GVOID_PTR)* lCallbackMap = lChild-&gt;m_callbackMap;
    lCallbackMap-&gt;SetData(lCallbackMap, alarmId, (void*)func, GMap_EqualChar);
}
//===============================================
static void GAlarmUnix_Start(char* alarmId) {
    GAlarmUnixO* lChild = m_GAlarmUnixO-&gt;m_child;
    GMapO(GAlarmUnix, GCHAR_PTR, GVOID_PTR)* lTimerMap = lChild-&gt;m_timerMap;
    GMapO(GAlarmUnix, GCHAR_PTR, GVOID_PTR)* lCallbackMap = lChild-&gt;m_callbackMap;
    int lTimer = (int)lTimerMap-&gt;GetData(lTimerMap, alarmId, GMap_EqualChar);
    GALARM_CALLBACK onFunc = (GALARM_CALLBACK)lCallbackMap-&gt;GetData(lCallbackMap, alarmId, GMap_EqualChar);
    signal(SIGALRM, onFunc);
    alarm(lTimer/1000); 
}
//===============================================
static void GAlarmUnix_Restart(char* alarmId) {
    GAlarmUnixO* lChild = m_GAlarmUnixO-&gt;m_child;
    GMapO(GAlarmUnix, GCHAR_PTR, GVOID_PTR)* lTimerMap = lChild-&gt;m_timerMap;
    int lTimer = (int)lTimerMap-&gt;GetData(lTimerMap, alarmId, GMap_EqualChar);
    alarm(lTimer/1000);
}
//===============================================
static void GAlarmUnix_Pause() {
    while(1) {
        pause();
    }
}
//===============================================
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron stratégie-Utilisation"><a class="Link9" href="#Patron stratégie">Utilisation</a></h2><br><h3 class="Title8 GTitle3">Uilisation</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
static void GTest_Alarm(int argc, char** argv) {
    printf("%s\n", __FUNCTION__);
    GAlarm2()-&gt;Timer("test", 1000);
    GAlarm2()-&gt;Callback("test", GTest_OnAlarm);
    GAlarm2()-&gt;Start("test");
    GAlarm2()-&gt;Pause();
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Fonction de rappel sous Windows</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#if defined (__WIN32)
static void WINAPI GTest_OnAlarm(UINT wTimerID, UINT msg, DWORD dwUser, DWORD dwl, DWORD dw2) {
    printf("%s\n", __FUNCTION__);
}
#endif
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Fonction de rappel sous UNIX</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
#if defined (__unix)
static void GTest_OnAlarm(int sig) {
    printf("%s\n", __FUNCTION__);
    GAlarm2()-&gt;Restart("test");
}
#endif
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Patron stratégie-Réultat"><a class="Link9" href="#Patron stratégie">Réultat</a></h2><br><div class="Img3 GImage"><img src="img/strategy.png" alt="img/strategy.png"></div><br></div></div></div></div><br>