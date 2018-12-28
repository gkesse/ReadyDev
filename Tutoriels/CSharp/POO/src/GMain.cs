//===============================================
class GMain {
    static void Main(string[] args) {
        GConfig.Instance().setData("PROCESS", "HELLO");
        GProcess.Instance().run(args);
    }
}
//===============================================
