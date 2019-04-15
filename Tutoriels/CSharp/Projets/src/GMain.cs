//===============================================
using System;
//===============================================
public class GMain {
    static void Main(string[] args) {
        GConfig.Instance().SetData("PROCESS", "PRINT");
        GProcess.Instance().Run(args);
    }
}
//===============================================
