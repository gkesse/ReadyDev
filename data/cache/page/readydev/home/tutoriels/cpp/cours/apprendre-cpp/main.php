<div class="GAccess1 Access1">
<a class="GAccess2 Access2" href="/home">Accueil</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels">Tutoriels</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels#cpp">C++</a><i class="Access3 fa fa-chevron-right"></i><a class="GAccess2 Access2" href="/home/tutoriels/cpp/cours/apprendre-cpp">Cours</a></div><div class="GParallax1 Parallax1">
<div class="Parallax2" style="background-image: url(&quot;/data/img/defaults/binary.png&quot;);">
<div class="Parallax3"><a href="#" class="Parallax4">Apprendre C++</a></div>
</div>
<div class="Parallax5" style="background-color: rgb(128, 51, 0);"><br>Bienvenue dans ce tutoriel consacré à l'apprentissage des technologies liées au développement d'applications en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="GSummary1"><div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#introduction">Introduction</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#travailler-avec-les-sockets">### Travailler avec les sockets</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows">Créer une application client-serveur TCP/IP en C++ sous Windows</a>
</div>
<div class="GSummary11 Summary1">
<i class="Summary2 fa fa-book"></i>
<a class="Summary3" href="#suite">### Suite</a>
</div>
</div><br></div></div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="introduction">Introduction</a>
</h1>
<div class="Section6"><br><b>C++</b> est un langage de programmation orientée objet. Il offre la possibilité d'avoir le contrôle total sur la gestion de la mémoire.<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="travailler-avec-les-sockets">### Travailler avec les sockets</a>
</h1>
<div class="Section6"><br>Un <b>socket</b> est un point de terminaison utilisé pour établir une communication entre un client et un serveur. Les sockets sont supportés par le langage C++.
<br><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows">Créer une application client-serveur TCP/IP en C++ sous Windows</a>
</h1>
<div class="Section6"><br>C++ est un langage de programmation orientée objet prenant en charge la création d'applications client/serveur. Dans ce tutoriel, nous utiliserons le module (<b>Winsock2</b>), pour établir une communication TCP/IP entre un client et un serveur.&nbsp;<br><br><div class="GSummary2"><div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur">Gestion du serveur</a>
</div>
<div class="GSummary21 Summary4">
<i class="Summary5 fa fa-book"></i>
<a class="Summary6" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client">Gestion du client</a>
</div>
</div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows">Gestion du serveur</a>
</h2><br><div class="GSummary3"><div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-du-programme-principal">Gestion du programme principal</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-du-serveur">Gestion du serveur</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-de-l-initialisation-du-point-de-terminaison">Gestion de l'initialisation du point de terminaison</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-de-la-creation-du-point-de-terminaison">Gestion de la création du point de terminaison</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-de-la-communication-avec-un-client">Gestion de la communication avec un client</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-du-fichier-cmake">Gestion du fichier CMake</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_execution-du-projet">Exécution du projet</a>
</div>
</div><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-du-programme-principal" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur">Gestion du programme principal</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// main.cpp (Editer le programme principal)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include "cServer.h"

int main(int _argc, char **_argv)
{
    cServer oServer(_argc, _argv);
    oServer.run();
    return 0;
}
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-du-serveur" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur">Gestion du serveur</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// cServer.h  (Editer le serveur)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#pragma once

#include &lt;string&gt;

class cServer
{
public:
    explicit cServer(int _argc, char **_argv);
    ~cServer();
    void run();

private:
    std::string getLastError(int _error) const;

private:
    int m_argc;
    char **m_argv;
};
...</pre><br><span class="GText2" style="
color: #00ff00;
">// cServer.cpp (Editer le serveur)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include "cServer.h"
#include "cServerInit.h"
#include &lt;winsock2.h&gt;
#include &lt;iostream&gt;

static const int DEF_WINSOCK_MAJOR_VERSION = 2;
static const int DEF_WINSOCK_MINOR_VERSION = 2;
static const int DEF_WINSOCK_ERROR_MSG_LENGTH = 512;

cServer::cServer(int _argc, char **_argv)
    : m_argc(_argc),
      m_argv(_argv)
{
}

cServer::~cServer()
{
}

void cServer::run()
{
    WSADATA oWSADATA;
    int oWSAStartup = WSAStartup(MAKEWORD(DEF_WINSOCK_MAJOR_VERSION, DEF_WINSOCK_MINOR_VERSION),
                                 &amp;oWSADATA);

    if (oWSAStartup != 0)
    {
        std::cout &lt;&lt; "L'initialisation du point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; oWSAStartup
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(oWSAStartup)
                  &lt;&lt; "|WINSOCK_MAJOR_VERSION=" &lt;&lt; DEF_WINSOCK_MAJOR_VERSION
                  &lt;&lt; "|WINSOCK_MINOR_VERSION=" &lt;&lt; DEF_WINSOCK_MINOR_VERSION
                  &lt;&lt; std::endl;
        return;
    }

    cServerInit oServerRun;
    oServerRun.run();
}

std::string cServer::getLastError(int _error) const
{
    char oErrorMsg[DEF_WINSOCK_ERROR_MSG_LENGTH] = {0};
    int oLength = FormatMessage(FORMAT_MESSAGE_FROM_SYSTEM | FORMAT_MESSAGE_IGNORE_INSERTS,
                                NULL,
                                _error,
                                MAKELANGID(LANG_NEUTRAL, SUBLANG_DEFAULT),
                                oErrorMsg,
                                sizeof(oErrorMsg),
                                NULL);
    if (oLength &gt; 0)
    {
        oErrorMsg[oLength - 1] = 0;
    }
    std::string oMessage = oErrorMsg;
    return oMessage;
}
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-de-l-initialisation-du-point-de-terminaison" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur">Gestion de l'initialisation du point de terminaison</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// cServerInit.h (Editer l'initialisation du point de terminaison)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#pragma once

#include &lt;string&gt;

class cServerInit
{
    friend class cServer;

private:
    explicit cServerInit();
    ~cServerInit();
    void run();

private:
    std::string getLastError(int _error) const;
};
...</pre><br><span class="GText2" style="
color: #00ff00;
">// cServerInit.cpp (Editer l'initialisation du point de terminaison)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include "cServerInit.h"
#include "cServerSocket.h"
#include &lt;winsock2.h&gt;
#include &lt;iostream&gt;

static const int DEF_WINSOCK_ERROR_MSG_LENGTH = 512;

cServerInit::cServerInit()
{
}

cServerInit::~cServerInit()
{
    WSACleanup();
}

void cServerInit::run()
{
    SOCKET oSocket = socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);

    if (oSocket == INVALID_SOCKET)
    {
        std::cout &lt;&lt; "La creation du point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; GetLastError()
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(GetLastError())
                  &lt;&lt; std::endl;
        return;
    }

    cServerSocket oServerSocket(oSocket);
    oServerSocket.run();
}

std::string cServerInit::getLastError(int _error) const
{
    char oErrorMsg[DEF_WINSOCK_ERROR_MSG_LENGTH] = {0};
    int oLength = FormatMessage(FORMAT_MESSAGE_FROM_SYSTEM | FORMAT_MESSAGE_IGNORE_INSERTS,
                                NULL,
                                _error,
                                MAKELANGID(LANG_NEUTRAL, SUBLANG_DEFAULT),
                                oErrorMsg,
                                sizeof(oErrorMsg),
                                NULL);
    if (oLength &gt; 0)
    {
        oErrorMsg[oLength - 1] = 0;
    }
    std::string oMessage = oErrorMsg;
    return oMessage;
}
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-de-la-creation-du-point-de-terminaison" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur">Gestion de la création du point de terminaison</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// cServerSocket.h (Editer la création du point de terminaison)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#pragma once

#include &lt;string&gt;
#include &lt;winsock2.h&gt;

class cServerSocket
{
    friend class cServerInit;

private:
    explicit cServerSocket(SOCKET _socket);
    ~cServerSocket();
    void run();

private:
    static void onAccept(SOCKET _client);
    std::string getLastError(int _error) const;

private:
    SOCKET m_socket;
};
...</pre><br><span class="GText2" style="
color: #00ff00;
">// cServerSocket.cpp (Editer la création du point de terminaison)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include "cServerSocket.h"
#include "cServerClient.h"
#include &lt;future&gt;
#include &lt;iostream&gt;

static const int DEF_WINSOCK_ERROR_MSG_LENGTH = 512;
static const int DEF_WINSOCK_SERVER_PORT = 5555;
static const int DEF_WINSOCK_SERVER_BACKLOG = 10;

cServerSocket::cServerSocket(SOCKET _socket)
    : m_socket(_socket)
{
}

cServerSocket::~cServerSocket()
{
    closesocket(m_socket);
}

void cServerSocket::run()
{
    SOCKADDR_IN oServerAddr;
    oServerAddr.sin_addr.s_addr = INADDR_ANY;
    oServerAddr.sin_family = AF_INET;
    oServerAddr.sin_port = htons(DEF_WINSOCK_SERVER_PORT);

    if ((bind(m_socket, reinterpret_cast&lt;SOCKADDR *&gt;(&amp;oServerAddr),
              sizeof(oServerAddr))) == SOCKET_ERROR)
    {
        std::cout &lt;&lt; "La liaison de l'adresse du point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; GetLastError()
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(GetLastError())
                  &lt;&lt; std::endl;
        return;
    }

    if ((listen(m_socket, DEF_WINSOCK_SERVER_BACKLOG)) == SOCKET_ERROR)
    {
        std::cout &lt;&lt; "L'initialisation du nombre de connexions au point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; GetLastError()
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(GetLastError())
                  &lt;&lt; std::endl;
        return;
    }

    std::cout &lt;&lt; "Le serveur a demarre..."
              &lt;&lt; "|port=" &lt;&lt; DEF_WINSOCK_SERVER_PORT
              &lt;&lt; std::endl;

    while (true)
    {
        SOCKADDR_IN oAddress;
        int oSize = sizeof(oAddress);
        SOCKET oClient = accept(m_socket, reinterpret_cast&lt;SOCKADDR *&gt;(&amp;oAddress), &amp;oSize);

        if (oClient == INVALID_SOCKET)
        {
            std::cout &lt;&lt; "La connexion d'un client au point de terminaison a echoue."
                      &lt;&lt; "|errorCode=" &lt;&lt; GetLastError()
                      &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(GetLastError())
                      &lt;&lt; std::endl;
            continue;
        }

        auto fut = std::async(std::launch::async, onAccept, oClient);
    }
}

void cServerSocket::onAccept(SOCKET _client)
{
    cServerClient oServerClient(_client);
    oServerClient.run();
}

std::string cServerSocket::getLastError(int _error) const
{
    char oErrorMsg[DEF_WINSOCK_ERROR_MSG_LENGTH] = {0};
    int oLength = FormatMessage(FORMAT_MESSAGE_FROM_SYSTEM | FORMAT_MESSAGE_IGNORE_INSERTS,
                                NULL,
                                _error,
                                MAKELANGID(LANG_NEUTRAL, SUBLANG_DEFAULT),
                                oErrorMsg,
                                sizeof(oErrorMsg),
                                NULL);
    if (oLength &gt; 0)
    {
        oErrorMsg[oLength - 1] = 0;
    }
    std::string oMessage = oErrorMsg;
    return oMessage;
}
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-de-la-communication-avec-un-client" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur">Gestion de la communication avec un client</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// cServerClient.h (Editer la communication avec un client)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#pragma once

#include &lt;string&gt;
#include &lt;winsock2.h&gt;

class cServerClient
{
    friend class cServerSocket;

private:
    explicit cServerClient(SOCKET _socket);
    ~cServerClient();
    void run();

private:
    bool recvData(std::string &amp;_request);
    bool sendData(const std::string &amp;_response);
    std::string getLastError(int _error) const;

private:
    SOCKET m_socket;
};
...</pre><br><span class="GText2" style="
color: #00ff00;
">// cServerClient.cpp (Editer la communication avec un client)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include "cServerClient.h"
#include &lt;iostream&gt;

static const int DEF_WINSOCK_ERROR_MSG_LENGTH = 512;
static const int DEF_WINSOCK_BUFFER_SIZE = 1024;

cServerClient::cServerClient(SOCKET _socket)
    : m_socket(_socket)
{
}

cServerClient::~cServerClient()
{
    closesocket(m_socket);
}

void cServerClient::run()
{
    std::string oRequest;
    std::string oResponse = "Un probleme a ete rencontre.";
    if (recvData(oRequest))
    {
        oResponse = "Votre requete a ete traite avec succes.";
    }
    sendData(oResponse);

    std::cout &lt;&lt; "[Client] : " &lt;&lt; oRequest &lt;&lt; std::endl;
    std::cout &lt;&lt; "[Server] : " &lt;&lt; oResponse &lt;&lt; std::endl;
}

bool cServerClient::recvData(std::string &amp;_request)
{
    char oBuffer[DEF_WINSOCK_BUFFER_SIZE];
    int oBytes = recv(m_socket, oBuffer, DEF_WINSOCK_BUFFER_SIZE, 0);
    if (oBytes == SOCKET_ERROR)
    {
        std::cout &lt;&lt; "La reception des donnees du point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; GetLastError()
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(GetLastError())
                  &lt;&lt; std::endl;
        return false;
    }
    oBuffer[oBytes] = '\0';
    _request = oBuffer;
    return true;
}

bool cServerClient::sendData(const std::string &amp;_response)
{
    int oBytes = send(m_socket, _response.c_str(), (int)_response.length(), 0);
    if (oBytes == SOCKET_ERROR)
    {
        std::cout &lt;&lt; "La reception des donnees du point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; GetLastError()
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(GetLastError())
                  &lt;&lt; std::endl;
        return false;
    }
    return true;
}

std::string cServerClient::getLastError(int _error) const
{
    char oErrorMsg[DEF_WINSOCK_ERROR_MSG_LENGTH] = {0};
    int oLength = FormatMessage(FORMAT_MESSAGE_FROM_SYSTEM | FORMAT_MESSAGE_IGNORE_INSERTS,
                                NULL,
                                _error,
                                MAKELANGID(LANG_NEUTRAL, SUBLANG_DEFAULT),
                                oErrorMsg,
                                sizeof(oErrorMsg),
                                NULL);
    if (oLength &gt; 0)
    {
        oErrorMsg[oLength - 1] = 0;
    }
    std::string oMessage = oErrorMsg;
    return oMessage;
}
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_gestion-du-fichier-cmake" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur">Gestion du fichier CMake</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt (Editer le fichier CMake)</span><br><pre class="GCode1 Code1 AceCode" data-mode="javascript" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
cmake_minimum_required(VERSION 3.10.0)
project(rdvcpp VERSION 0.1.0 LANGUAGES C CXX)

add_executable(${PROJECT_NAME}
    main.cpp
    cServer.cpp
    cServerInit.cpp
    cServerSocket.cpp
    cServerClient.cpp
)

target_link_libraries(${PROJECT_NAME}
    ws2_32
)
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur_execution-du-projet" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-serveur">Exécution du projet</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// Terminal (Exécuter le projet)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
rdvcpp.exe
...</pre><br><span class="GText2" style="
color: #00ff00;
">// Application (Fiche de démarrage du serveur)</span><br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br><span class="GText2" style="
color: #00ff00;
">// Application (Fiche de traitement d'une requête du client)</span><br><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br><h2 class="GTitle1 Title1">
<a class="Title2" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows">Gestion du client</a>
</h2><br><div class="GSummary3"><div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_gestion-du-programme-principal">Gestion du programme principal</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_gestion-du-client">Gestion du client</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_gestion-de-l-initialisation-du-point-de-terminaison">Gestion de l'initialisation du point de terminaison</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_gestion-de-la-creation-du-point-de-terminaison">Gestion de la création du point de terminaison</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_gestion-du-fichier-cmake">Gestion du fichier CMake</a>
</div>
<div class="Summary7">
<i class="Summary8 fa fa-book"></i>
<a class="Summary9" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_execution-du-projet">Exécution du projet</a>
</div>
</div><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_gestion-du-programme-principal" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client">Gestion du programme principal</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// main.cpp (Editer le programme principal)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include "cClient.h"
#include &lt;iostream&gt;

int main(int _argc, char **_argv)
{
    cClient oClient(_argc, _argv);

    std::string oRequest("Bonjour tout le monde");
    std::string oResponse;

    if (oClient.run(oRequest, oResponse))
    {
        std::cout &lt;&lt; "[Client] : " &lt;&lt; oRequest &lt;&lt; std::endl;
        std::cout &lt;&lt; "[Server] : " &lt;&lt; oResponse &lt;&lt; std::endl;
    }

    return 0;
}
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_gestion-du-client" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client">Gestion du client</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// cClient.h (Editer le client)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#pragma once

#include &lt;string&gt;

class cClient
{
public:
    explicit cClient(int _argc, char **_argv);
    ~cClient();
    bool run(const std::string &amp;_request, std::string &amp;_response) const;

private:
    std::string getLastError(int _error) const;

private:
    int m_argc;
    char **m_argv;
};
...</pre><br><span class="GText2" style="
color: #00ff00;
">// cClient.cpp (Editer le client)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include "cClient.h"
#include "cClientInit.h"
#include &lt;winsock2.h&gt;
#include &lt;iostream&gt;

static const int DEF_WINSOCK_MAJOR_VERSION = 2;
static const int DEF_WINSOCK_MINOR_VERSION = 2;
static const int DEF_WINSOCK_ERROR_MSG_LENGTH = 512;

cClient::cClient(int _argc, char **_argv)
    : m_argc(_argc),
      m_argv(_argv)
{
}

cClient::~cClient()
{
}

bool cClient::run(const std::string &amp;_request, std::string &amp;_response) const
{
    WSADATA oWSADATA;
    int oWSAStartup = WSAStartup(MAKEWORD(DEF_WINSOCK_MAJOR_VERSION, DEF_WINSOCK_MINOR_VERSION),
                                 &amp;oWSADATA);

    if (oWSAStartup != 0)
    {

        std::cout &lt;&lt; "L'initialisation du point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; oWSAStartup
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(oWSAStartup)
                  &lt;&lt; "|WINSOCK_MAJOR_VERSION=" &lt;&lt; DEF_WINSOCK_MAJOR_VERSION
                  &lt;&lt; "|WINSOCK_MINOR_VERSION=" &lt;&lt; DEF_WINSOCK_MINOR_VERSION
                  &lt;&lt; std::endl;
        return false;
    }

    cClientInit oClientRun;
    return oClientRun.run(_request, _response);
}

std::string cClient::getLastError(int _error) const
{
    char oErrorMsg[DEF_WINSOCK_ERROR_MSG_LENGTH] = {0};
    int oLength = FormatMessage(FORMAT_MESSAGE_FROM_SYSTEM | FORMAT_MESSAGE_IGNORE_INSERTS,
                                NULL,
                                _error,
                                MAKELANGID(LANG_NEUTRAL, SUBLANG_DEFAULT),
                                oErrorMsg,
                                sizeof(oErrorMsg),
                                NULL);
    if (oLength &gt; 0)
    {
        oErrorMsg[oLength - 1] = 0;
    }
    std::string oMessage = oErrorMsg;
    return oMessage;
}
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_gestion-de-l-initialisation-du-point-de-terminaison" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client">Gestion de l'initialisation du point de terminaison</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// cClientInit.h (Editer l'initialisation du point de terminaison)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#pragma once

#include &lt;string&gt;

class cClientInit
{
    friend class cClient;

private:
    explicit cClientInit();
    ~cClientInit();
    bool run(const std::string &amp;_request, std::string &amp;_response) const;

private:
    std::string getLastError(int _error) const;
};
...</pre><br><span class="GText2" style="
color: #00ff00;
">// cClientInit.cpp (Editer l'initialisation du point de terminaison)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include "cClientInit.h"
#include "cClientSocket.h"
#include &lt;winsock2.h&gt;
#include &lt;iostream&gt;

static const int DEF_WINSOCK_ERROR_MSG_LENGTH = 512;

cClientInit::cClientInit()
{
}

cClientInit::~cClientInit()
{
    WSACleanup();
}

bool cClientInit::run(const std::string &amp;_request, std::string &amp;_response) const
{
    SOCKET oSocket = socket(AF_INET, SOCK_STREAM, IPPROTO_TCP);

    if (oSocket == INVALID_SOCKET)
    {
        std::cout &lt;&lt; "La creation du point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; GetLastError()
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(GetLastError())
                  &lt;&lt; std::endl;
        return false;
    }

    cClientSocket oClientSocket(oSocket);
    return oClientSocket.run(_request, _response);
}

std::string cClientInit::getLastError(int _error) const
{
    char oErrorMsg[DEF_WINSOCK_ERROR_MSG_LENGTH] = {0};
    int oLength = FormatMessage(FORMAT_MESSAGE_FROM_SYSTEM | FORMAT_MESSAGE_IGNORE_INSERTS,
                                NULL,
                                _error,
                                MAKELANGID(LANG_NEUTRAL, SUBLANG_DEFAULT),
                                oErrorMsg,
                                sizeof(oErrorMsg),
                                NULL);
    if (oLength &gt; 0)
    {
        oErrorMsg[oLength - 1] = 0;
    }
    std::string oMessage = oErrorMsg;
    return oMessage;
}
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_gestion-de-la-creation-du-point-de-terminaison" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client">Gestion de la création du point de terminaison</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// cClientSocket.h (Editer la création du point de terminaison)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#pragma once

#include &lt;string&gt;
#include &lt;winsock2.h&gt;

class cClientSocket
{
    friend class cClientInit;

private:
    explicit cClientSocket(SOCKET _socket);
    ~cClientSocket();
    bool run(const std::string &amp;_request, std::string &amp;_response);

private:
    bool recvData(std::string &amp;_response);
    bool sendData(const std::string &amp;_request);
    std::string getLastError(int _error) const;

private:
    SOCKET m_socket;
};
...</pre><br><span class="GText2" style="
color: #00ff00;
">// cClientSocket.cpp (Editer la création du point de terminaison)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
#include "cClientSocket.h"
#include &lt;ws2tcpip.h&gt;
#include &lt;iostream&gt;

static const int DEF_WINSOCK_ERROR_MSG_LENGTH = 512;
static const char *DEF_WINSOCK_SERVER_ADDRESS = "127.0.0.1";
static const int DEF_WINSOCK_SERVER_PORT = 5555;
static const int DEF_WINSOCK_BUFFER_SIZE = 1024;

cClientSocket::cClientSocket(SOCKET _socket)
    : m_socket(_socket)
{
}

cClientSocket::~cClientSocket()
{
    closesocket(m_socket);
}

bool cClientSocket::run(const std::string &amp;_request, std::string &amp;_response)
{
    SOCKADDR_IN oServerAddress;

    InetPton(AF_INET, DEF_WINSOCK_SERVER_ADDRESS, &amp;oServerAddress.sin_addr.s_addr);
    oServerAddress.sin_family = AF_INET;
    oServerAddress.sin_port = htons(DEF_WINSOCK_SERVER_PORT);

    if (connect(m_socket, reinterpret_cast&lt;SOCKADDR *&gt;(&amp;oServerAddress), sizeof(oServerAddress)) == SOCKET_ERROR)
    {
        std::cout &lt;&lt; "La connexion au point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; GetLastError()
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(GetLastError())
                  &lt;&lt; std::endl;
        return false;
    }

    if (sendData(_request))
    {
        recvData(_response);
    }

    return true;
}

bool cClientSocket::recvData(std::string &amp;_response)
{
    char oBuffer[DEF_WINSOCK_BUFFER_SIZE];
    int oBytes = recv(m_socket, oBuffer, DEF_WINSOCK_BUFFER_SIZE, 0);
    if (oBytes == SOCKET_ERROR)
    {
        std::cout &lt;&lt; "La reception des donnees du point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; GetLastError()
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(GetLastError())
                  &lt;&lt; std::endl;
        return false;
    }
    oBuffer[oBytes] = '\0';
    _response = oBuffer;
    return true;
}

bool cClientSocket::sendData(const std::string &amp;_request)
{
    int oBytes = send(m_socket, _request.c_str(), (int)_request.length(), 0);
    if (oBytes == SOCKET_ERROR)
    {
        std::cout &lt;&lt; "La reception des donnees du point de terminaison a echoue."
                  &lt;&lt; "|errorCode=" &lt;&lt; GetLastError()
                  &lt;&lt; "|errorMsg=" &lt;&lt; getLastError(GetLastError())
                  &lt;&lt; std::endl;
        return false;
    }
    return true;
}

std::string cClientSocket::getLastError(int _error) const
{
    char oErrorMsg[DEF_WINSOCK_ERROR_MSG_LENGTH] = {0};
    int oLength = FormatMessage(FORMAT_MESSAGE_FROM_SYSTEM | FORMAT_MESSAGE_IGNORE_INSERTS,
                                NULL,
                                _error,
                                MAKELANGID(LANG_NEUTRAL, SUBLANG_DEFAULT),
                                oErrorMsg,
                                sizeof(oErrorMsg),
                                NULL);
    if (oLength &gt; 0)
    {
        oErrorMsg[oLength - 1] = 0;
    }
    std::string oMessage = oErrorMsg;
    return oMessage;
}
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_gestion-du-fichier-cmake" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client">Gestion du fichier CMake</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// CMakeLists.txt (Editer le fichier CMake)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
cmake_minimum_required(VERSION 3.10.0)
project(rdvcpp VERSION 0.1.0 LANGUAGES C CXX)

add_executable(rdvcpp
    main.cpp
    cClient.cpp
    cClientInit.cpp
    cClientSocket.cpp
)

target_link_libraries(${PROJECT_NAME}
    ws2_32
)
...</pre><br><h3 class="GTitle2 Title3">
<a class="Title4" id="creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client_execution-du-projet" href="#creer-une-application-client-serveur-tcp-ip-en-cpp-sous-windows_gestion-du-client">Exécution du projet</a>
</h3><br><span class="GText2" style="
color: #00ff00;
">// Terminal (Exécuter le projet)</span><br><pre class="GCode1 Code1 AceCode" data-mode="c_cpp" data-theme="gruvbox" data-bg-color="transparent" style="background-color: transparent;">...
rdvcpp.exe
...</pre><br><span class="GText2" style="
color: #00ff00;
">// Application (Fiche d'envoi d'une requête au serveur)</span><br><div class="GImg1 Img1"><img alt="image.png" src="data:image/png;base64,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"></div><br></div>
</div>
</div>
</div><br><div class="GSection1 Section1">
<div class="Section2">
<div class="Section3">
<h1 class="Section4">
<a class="Section5" href="#" id="suite">### Suite</a>
</h1>
<div class="Section6"><br><div class="GLink1 Link1">
<i class="Link2 fa fa-arrow-circle-left"></i>
<a class="Link3" href="#">Précédent</a>
</div><div class="GLink1 Link1">
<i class="Link2 fa fa-arrow-circle-right"></i>
<a class="Link3" href="#">Suivant</a>
</div><br></div>
</div>
</div>
</div><br>