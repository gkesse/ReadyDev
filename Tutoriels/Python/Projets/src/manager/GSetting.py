#================================================
from manager.GConfig import GConfig
#================================================
class GSetting:
    #================================================
    m_instance = None
    #================================================
    G_CHAR_COMMENT = "#"
    #================================================
    def __init__(self):
        if GSetting.m_instance == None:
            GSetting.m_instance = self        
    #================================================
    @staticmethod
    def Instance():
        if GSetting.m_instance == None:
            GSetting()
        return GSetting.m_instance
    #================================================
    def load(self, file):
        lFile = open(file, "r")
        for lLine in lFile:
            lTrim = lLine.strip()
            if(not lTrim): continue
            if(lTrim[0] == self.G_CHAR_COMMENT): continue
            lSplit = lTrim.split("=")
            lKey = lSplit[0].strip()
            lValue = lSplit[1].strip()
            GConfig.Instance().setData(lKey, lValue)
        GConfig.Instance().showData()
#================================================
