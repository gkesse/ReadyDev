<div class="Parallax GParallax1"><div class="Img Binary"><div class="Caption"><a href="#"><div class="Text">Programmation web en ASP.NET<br></div></a></div></div><div class="Body2 Orange"><br>Le but de ce tutoriel est de vous apprendre la programmation web en <b>ASP.NET</b>.<br>Produit par <b>Gérard KESSE</b>.<br><br><div class="Content0 GSummary1"><div class="Body0" id="Loader_1529412976174"><div class="Row26">Summary 1</div></div><script>loadSummary1("Loader_1529412976174");</script></div><br></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Introduction"><a class="Link3" href="#">Introduction</a></h1><div class="Body3"><b><br>ASP.NET</b> est un framework permettant de générer à la demande des pages web. Il s'agit d'une évolution majeure d'Active Server Pages (ASP), par laquelle cette technique a été incorporée dans la plateforme Microsoft .NET. Il peut être utilisé avec n'importe quel langage de programmation pour la plateforme .NET (Visual Basic .NET, C#, JScript).<br><br><div class="Img3 GImage"><img src="/Tutoriels/Web/ASP.NET/img/b_asp.net.png" alt="/Tutoriels/Web/ASP.NET/img/b_asp.net.png"></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Installation"><a class="Link3" href="#">Installation</a></h1><div class="Body3"><br>Installer l'environnement ASP.NET.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649094292"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649094292");</script></div><br><h2 class="Title7 GTitle2" id="Installation-1 - Installation sous Windows"><a class="Link9" href="#Installation">1 - Installation sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1 - Installation sous Dotnet"><a class="Link9" href="#Installation">1.1 - Installation sous Dotnet</a></h2><br><h2 class="Title7 GTitle2" id="Installation-1.1.1 - Télécharger Dotnet"><a class="Link9" href="#Installation">1.1.1 - Télécharger Dotnet</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://dotnet.microsoft.com/download/dotnet">https://dotnet.microsoft.com/download/dotnet</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://dotnet.microsoft.com/download/dotnet/5.0">https://dotnet.microsoft.com/download/dotnet/5.0</a><br><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="https://dotnet.microsoft.com/download/dotnet/thank-you/sdk-5.0.202-windows-x64-installer">https://dotnet.microsoft.com/download/dotnet/thank-you/sdk-5.0.202-windows-x64-installer</a><br><br><b>dotnet-sdk-5.0.202-win-x64.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.2 - Installer Dotnet"><a class="Link9" href="#Installation">1.1.2 - Installer Dotnet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="txt">dotnet-sdk-5.0.202-win-x64.exe
Installer
Fermer</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Installation-1.1.3 - Dossier d'installation"><a class="Link9" href="#Installation">1.1.3 - Dossier d'installation</a></h2><br><b>C:\Program Files\dotnet\dotnet.exe</b><br><br><h2 class="Title7 GTitle2" id="Installation-1.1.4 - Afficher la version"><a class="Link9" href="#Installation">1.1.4 - Afficher la version</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Program Files\dotnet;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">dotnet --version</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">5.0.202</xmp></pre></div><br></div></div></div></div><br><div class="Content2 GTitle1"><div class="MainBlock2"><div class="Content"><h1 class="Title2 Center" id="Tests"><a class="Link3" href="#">Tests</a></h1><div class="Body3"><br>Créer un projet ASP.NET.<br><br><div class="Content0 GSummary2"><div class="Body0" id="Loader_1617649178149"><div class="Row26">Summary 2</div></div><script>loadSummary2("Loader_1617649178149");</script></div><br><h2 class="Title7 GTitle2" id="Tests-1 - Test sous Windows"><a class="Link9" href="#Tests">1 - Test sous Windows</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1 - Test sous Dotnet"><a class="Link9" href="#Tests">1.1 - Test sous Dotnet</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1 - Création d'un projet web"><a class="Link9" href="#Tests">1.1.1 - Création d'un projet web</a></h2><br><h2 class="Title7 GTitle2" id="Tests-1.1.1.1 - Créer un projet web"><a class="Link9" href="#Tests">1.1.1.1 - Créer un projet web</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">set "PATH=C:\Program Files\dotnet;%PATH%"</xmp></pre></div><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">:: on cree un projet web http (--no-https)
:: dans le repertoire de sortie (readyapp\src)
dotnet new web -o readyapp\src --no-https</xmp></pre></div><br><br><h2 class="Title7 GTitle2" id="Tests-1.1.1.2 - Éditer le programme de démarrage"><a class="Link9" href="#Tests">1.1.1.2 - Éditer le programme de démarrage</a></h2><br><h3 class="Title8 GTitle3">Startup.cs</h3><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="csharp">//===============================================
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Hosting;
using Microsoft.AspNetCore.Http;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Hosting;
//===============================================
namespace src {
    //===============================================
    public class Startup {
        //===============================================
        public void ConfigureServices(IServiceCollection services) {}
        //===============================================
        public void Configure(IApplicationBuilder app, IWebHostEnvironment env) {
            if (env.IsDevelopment()) {
                app.UseDeveloperExceptionPage();
            }

            app.UseRouting();

            // on definit les points de terminaison
            app.UseEndpoints(endpoints =&gt; {
                // on definit le point de terminaison correspondant
                // a l'url racine (http://localhost:5000/)
                endpoints.MapGet("/", async context =&gt; {
                    // on imprime le contenu de la page
                    await context.Response.WriteAsync("&lt;!DOCTYPE html&gt;\n");
                    await context.Response.WriteAsync("&lt;html lang='fr'&gt;\n");
                    await context.Response.WriteAsync("&lt;head&gt;\n");
                    await context.Response.WriteAsync("&lt;title&gt;ReadyApp&lt;/title&gt;\n");
                    await context.Response.WriteAsync("&lt;/head&gt;\n");
                    await context.Response.WriteAsync("&lt;body&gt;\n");
                    // on affiche un message a l'ecran
                    await context.Response.WriteAsync("&lt;h1&gt;Bonjour tout le monde&lt;/h1&gt;\n");
                    await context.Response.WriteAsync("&lt;/body&gt;\n");
                    await context.Response.WriteAsync("&lt;/html&gt;\n");
                });
            });
        }
        //===============================================
    }
    //===============================================
}
//===============================================</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.1.3 - Compiler le projet"><a class="Link9" href="#Tests">1.1.1.3 - Compiler le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">dotnet build</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.1.4 - Restaurer les dépendances du projet"><a class="Link9" href="#Tests">1.1.1.4 - Restaurer les dépendances du projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">dotnet restore</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.1.5 - Exécuter le projet"><a class="Link9" href="#Tests">1.1.1.5 - Exécuter le projet</a></h2><br><div class="GCode1"><pre class="Code2"><xmp class="AceCode" data-mode="batchfile">:: on exécute l'application avec le port (5000)
dotnet run --urls=http://localhost:5000</xmp></pre></div><br><h2 class="Title7 GTitle2" id="Tests-1.1.1.6 - Afficher la page web"><a class="Link9" href="#Tests">1.1.1.6 - Afficher la page web</a></h2><br><a class="Link7 GLink1" style="color:lime;" target="_blank" href="http://localhost:5000/">http://localhost:5000/</a><br><br><div class="Img3 GImage"><img src="/Tutoriels/Web/ASP.NET/img/i_asp.net_test.png" alt="/Tutoriels/Web/ASP.NET/img/i_asp.net_test.png"></div><br></div></div></div></div><br>