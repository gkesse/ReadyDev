'================================================
Module GModule
    Sub Main()
        Dim CR As String = Environment.newLine
        
        Console.Write("### Variable" + CR + CR)
        
        Dim lBoolean As Boolean = True
        Dim lByte As Byte = 255
        Dim lChar As Char = "A"
        Dim lDate As Date = New System.DateTime(2018, 7, 8, 12, 30, 0)  
        Dim lDecimal As Decimal = 123.456
        Dim lDouble As Double = 123.456
        Dim lInteger As Integer = 65554
        Dim lLong As Long = 65554
        Dim lString As String = "Bonjour tout le monde"
        
        Console.Write(String.Format("{0,-10} : {1}", "Boolean", lBoolean) + CR)
        Console.Write(String.Format("{0,-10} : {1}", "Byte", lByte) + CR)
        Console.Write(String.Format("{0,-10} : {1}", "Char", lChar) + CR)
        Console.Write(String.Format("{0,-10} : {1}", "Date", lDate) + CR)
        Console.Write(String.Format("{0,-10} : {1}", "Decimal", lDecimal) + CR)
        Console.Write(String.Format("{0,-10} : {1}", "Double", lDouble) + CR)
        Console.Write(String.Format("{0,-10} : {1}", "Integer", lInteger) + CR)
        Console.Write(String.Format("{0,-10} : {1}", "Long", lLong) + CR)
        Console.Write(String.Format("{0,-10} : {1}", "String", lString) + CR)
    End Sub
End Module
'================================================
