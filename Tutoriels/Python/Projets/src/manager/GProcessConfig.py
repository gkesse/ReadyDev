#================================================
from GProcess import GProcess
from GConfig import GConfig
#================================================
class GProcessConfig(GProcess):
    #================================================
    m_instance = None
    #================================================
    def __init__(self):
        if GProcessConfig.m_instance == None:
            GProcessConfig.m_instance = self        
    #================================================
    @staticmethod
    def Instance():
        if GProcessConfig.m_instance == None:
            GProcessConfig()
        return GProcessConfig.m_instance
    #================================================
    def run(self):
        GConfig.Instance().setData("NOM", "Gerard KESSE");
        GConfig.Instance().setData("EMAIL", "gerard.kesse@readydev.com");
        GConfig.Instance().setData("FORMATION", "Informatique Industrielle");
        GConfig.Instance().showData();
#================================================
