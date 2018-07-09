'================================================'
Module GModule
    Sub Main()
        Dim CR As String = Environment.newLine
        Console.Write("### Formatage de chaine" + CR + CR)
        Console.Write(String.Format("{0,-15} : {1}", "Nom", "Gérard KESSE") + CR)
        Console.Write(String.Format("{0,-15} : {1}", "Email", "gerard@readydev.com") + CR)
        Console.Write(String.Format("{0,-15} : {1}", "Identifiant", 123456) + CR)
    End Sub
End Module
'================================================'
