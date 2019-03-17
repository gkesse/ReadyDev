#================================================
class GConfig:
    #================================================
    m_instance = None
    #================================================
    def __init__(self):
        if GConfig.m_instance == None:
            self.m_dataMap = {}
            GConfig.m_instance = self        
    #================================================
    @staticmethod
    def Instance():
        if GConfig.m_instance == None:
            GConfig()
        return GConfig.m_instance
    #================================================
    def setData(self, key, data):
        self.m_dataMap[key] = data      
    #================================================
    def getData(self, key):
        return self.m_dataMap[key]     
    #================================================
    def showData(self):
        for key, value in self.m_dataMap.items():
            print(key + " = " + value)
        print
#================================================
