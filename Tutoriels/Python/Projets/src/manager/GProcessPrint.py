#================================================
from GProcess import GProcess
from GPrint import GPrint
#================================================
class GProcessPrint(GProcess):
    #================================================
    m_instance = None
    #================================================
    def __init__(self):
        if GProcessPrint.m_instance == None:
            GProcessPrint.m_instance = self        
    #================================================
    @staticmethod
    def Instance():
        if GProcessPrint.m_instance == None:
            GProcessPrint()
        return GProcessPrint.m_instance
    #================================================
    def run(self):
        GPrint.Instance().printData("Bonjour tout le monde")
        GPrint.Instance().printData("Gerard KESSE", "NOM")
#================================================
