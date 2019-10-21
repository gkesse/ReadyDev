'================================================
Module GModule
    Sub Main()
        Dim CR As String = Environment.newLine
        Console.Write("### Variable" + CR + CR)
        
        Dim A As Integer = 22
        Dim B As Integer = 7
        
        Console.Write(String.Format("{0,-20} : {1}", "Addition", A + B) + CR)
        Console.Write(String.Format("{0,-20} : {1}", "Soustraction", A - B) + CR)
        Console.Write(String.Format("{0,-20} : {1}", "Multiplication", A * B) + CR)
        Console.Write(String.Format("{0,-20} : {1}", "Division", A / B) + CR)
        Console.Write(String.Format("{0,-20} : {1}", "Division entière", A \ B) + CR)
        Console.Write(String.Format("{0,-20} : {1}", "Puissance", A ^ 2) + CR)
        Console.Write(String.Format("{0,-20} : {1}", "Modulo", A mod B) + CR)
    End Sub
End Module
'================================================
