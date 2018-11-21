#================================================
class GConfig:
    #================================================
    __instance = None
    #================================================
    def __init__(self):
        if GConfig.__instance == None:
            self.__dataMap = {}
            GConfig.__instance = self        
    #================================================
    @staticmethod
    def Instance():
        if GConfig.__instance == None:
            GConfig()
        return GConfig.__instance
    #================================================
    def setData(self, key, data):
        self.__dataMap[key] = data      
    #================================================
    def getData(self, key):
        return self.__dataMap[key]     
    #================================================
    def showData(self):
        for key, value in self.__dataMap.items():
            print key + " = " + value     
#================================================
