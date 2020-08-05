<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Apprendre le multithreading en C++</div></a></div></div><div class="Body2 Orange">Le <b>Multithreading</b> est l'exécution de plusieurs threads simultanément.<br>Le but de ce tutoriel est de vous apprendre le <b>Multithreading</b> en <b>C++</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation sous Windows"><a class="Link3" href="#">Installation sous Windows</a></h1><div class="Body3">Le but de cette section est de vous présenter les différents outils nécessaires pour apprendre le Multithreading en C++, sous Windows.<br>Produit par <b>Gérard KESSE</b>.<br><br>Dans ce tutoriel, nous utiliserons, sous Windows:<br>- MinGW, comme compilateur.<br>- Qt, comme environnement de développement intégré.<br>-    Notepad++, comme éditeur de texte.<br><br><h3 class="Title8 GTitle3">Télécharger MinGW</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://sourceforge.net/projects/mingw-w64/files/">https://sourceforge.net/projects/mingw-w64/files/</a><br><br><h3 class="Title8 GTitle3">Télécharger Qt</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://download.qt.io/archive/qt/">https://download.qt.io/archive/qt/</a><br><br><h3 class="Title8 GTitle3">Télécharger Notepad++</h3><a class="Link7 GLink1" style="color:lime;" href="https://notepad-plus-plus.org/fr/">https://notepad-plus-plus.org/fr/</a><br><br><h3 class="Title8 GTitle3">Ressources</h3><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://github.com/wyrover/book-code/tree/master/C%2B%2B%20Multithreading%20Cookbook">https://github.com/wyrover/book-code/tree/master/C%2B%2B%20Multithreading%20Cookbook</a><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Créer un processus"><a class="Link3" href="#">Créer un processus</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">créer un processus</span> avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br>Un processus est un programme en cours d'exécution.<br><br><h3 class="Title8 GTitle3">Créer un processus</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessProcessModel::run(int argc, char **argv) {
    cout << "\n### Modele de processus\n\n";
    STARTUPINFO lStartupInfo = {0};
    PROCESS_INFORMATION lProcessInformation = {0};
    BOOL lCreateProcess = CreateProcess(
                TEXT("C:\\Windows\\notepad.exe"), NULL, NULL,
                NULL, FALSE, NULL, NULL, NULL, &lStartupInfo,
                &lProcessInformation);

    if (lCreateProcess) {
        cout << "Demarrage du processus\n"
             << "ID du processus: " << lProcessInformation.dwProcessId << "\n";
    }
    else {
        cout << "Erreur demarrage processus\n"
             << "Code d'erreur: " << GetLastError() << "\n";
    }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><span class="GColor1" style="color:lime;">Création du processus</span><div class="Img3 GImage"><img src="img/Process_Model.png" alt="img/Process_Model.png"></div><br><span class="GColor1" style="color:lime;">Lecture de l'id du processus</span><div class="Img3 GImage"><img src="img/Process_Model_02.png" alt="img/Process_Model_02.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Charger une librairie liée à un processus"><a class="Link3" href="#">Charger une librairie liée à un processus</a></h1><div class="Body3">Le but de cette section est de vous apprendre à <span class="GColor1" style="color:lime;">charger une librairie liée à un processus</span> avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br>Un processus est un programme en cours d'exécution.<br>Une librairie une bibliothèque de fonctions déjà compilées et prêtes à être utilisées.<br><br><h3 class="Title8 GTitle3">Charger une librairie liée à un processus</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
void GProcessProcessImplementation::run(int argc, char **argv) {
    cout << "\n### Implementation de processus\n\n";
    STARTUPINFO lStartupInfo = {0};
    PROCESS_INFORMATION lProcessInformation = {0};
    BOOL lCreateProcess = CreateProcess(
                TEXT("C:\\Windows\\notepad.exe"), NULL, NULL,
                NULL, FALSE, NULL, NULL, NULL, &lStartupInfo,
                &lProcessInformation);

    if(lCreateProcess) {
        cout << "Demarrage du processus\n";
        cout << "ID du processus: " << lProcessInformation.dwProcessId << "\n";

        PROCESS_BASIC_INFORMATION lPbi;
        ULONG lLength = 0;
        HMODULE lLoadLibrary = LoadLibrary(TEXT("C:\\Windows\\System32\\ntdll.dll"));

        if(lLoadLibrary) {
            QEURYINFORMATIONPROCESS lQueryInformationProcess =
                    (QEURYINFORMATIONPROCESS)GetProcAddress(lLoadLibrary, "NtQueryInformationProcess");

            if(lQueryInformationProcess) {
                NTSTATUS lNtStatus = lQueryInformationProcess(
                            lProcessInformation.hProcess,
                            PROCESSINFOCLASS::ProcessBasicInformation,
                            &lPbi, sizeof(lPbi), &lLength);

                if(NT_SUCCESS(lNtStatus)) {
                    cout << "ID du processus (via PCB): " << lPbi.UniqueProcessId << "\n";
                }
                else {
                    cout << "Erreur demarrage PCB: " << GetLastError() << "\n";
                }
            }
            else {
                cout << "Erreur lecture fonction NtQueryInformationProcess: " << GetLastError() << "\n";
            }
            FreeLibrary(lLoadLibrary);
        }
        else
        {
            cout << "Erreur chargement librairie ntdll.dll: " << GetLastError() << "\n";
        }
    }
    else {
        cout << "Erreur demarrage processus: " << GetLastError() << "\n";
    }
}
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Définir le type de la fonction (NtQueryInformationProcess)</h3><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="c_cpp">//===============================================
typedef NTSTATUS (NTAPI* QEURYINFORMATIONPROCESS)(
        IN HANDLE ProcessHandle,
        IN PROCESSINFOCLASS ProcessInformationClass,
        OUT PVOID ProcessInformation,
        IN ULONG ProcessInformationLength,
        OUT PULONG ReturnLength OPTIONAL
        );
//===============================================</xmp></pre></div><br><h3 class="Title8 GTitle3">Résultat</h3><br><span class="GColor1" style="color:lime;">Création du processus</span><div class="Img3 GImage"><img src="img/Process_Implementation.png" alt="img/Process_Implementation.png"></div><br><span class="GColor1" style="color:lime;">Lecture de l'id du processus</span><div class="Img3 GImage"><img src="img/Process_Implementation_02.png" alt="img/Process_Implementation_02.png"></div></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Communication Inter-processus"><a class="Link3" href="#">Communication Inter-processus</a></h1><div class="Body3">Le but de cette section est de vous apprendre la <span class="GColor1" style="color:lime;">communication Inter-processus</span> avec le C++.<br>Produit par <b>Gérard KESSE</b>.<br><br><h3 class="Title8 GTitle3">Résultat</h3><br><span class="GColor1" style="color:lime;">Prise en main du processus rouge</span><div class="Img3 GImage"><img src="img/Interprocess_Communication.png" alt="img/Interprocess_Communication.png"></div><br><span class="GColor1" style="color:lime;">Prise en main du processus bleu</span><div class="Img3 GImage"><img src="img/Interprocess_Communication_02.png" alt="img/Interprocess_Communication_02.png"></div><br><span class="GColor1" style="color:lime;">Affichage console</span><div class="Img3 GImage"><img src="img/Interprocess_Communication_03.png" alt="img/Interprocess_Communication_03.png"></div></div></div></div></div><br>