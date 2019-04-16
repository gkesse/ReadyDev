//===============================================
using System;
//===============================================
public class GMain {
    static void Main(string[] args) {
        GSetting.Instance().load("res/config/config.txt");
        GProcess.Instance().Run(args);
    }
}
//===============================================
