#================================================
from GProcess import GProcess
from GSetting import GSetting
#================================================
class GProcessSetting(GProcess):
    #================================================
    m_instance = None
    #================================================
    def __init__(self):
        if GProcessSetting.m_instance == None:
            GProcessSetting.m_instance = self        
    #================================================
    @staticmethod
    def Instance():
        if GProcessSetting.m_instance == None:
            GProcessSetting()
        return GProcessSetting.m_instance
    #================================================
    def run(self):
        GSetting.Instance().load("res/config/config.txt")
#================================================
