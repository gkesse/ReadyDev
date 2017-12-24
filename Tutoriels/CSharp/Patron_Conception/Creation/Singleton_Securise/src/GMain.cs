//===============================================
using System;
//===============================================
class GMain {
    static void Main(string[] args) {
        GSingleton.Instance().Print();
        GSingleton.Instance().Data = "Hello World";
        GSingleton.Instance().Print();
        GSingleton.Instance().Data = "Welcome CSharp";
        Console.WriteLine(GSingleton.Instance().Data);
    }
}
//===============================================
