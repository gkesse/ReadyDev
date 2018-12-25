#================================================
class GPrint:
    #================================================
    __instance = None
    #================================================
    def __init__(self):
        if GPrint.__instance == None:
            GPrint.__instance = self        
    #================================================
    @staticmethod
    def Instance():
        if GPrint.__instance == None:
            GPrint()
        return GPrint.__instance
    #================================================
    def printData(self, data):
        print data      
#================================================
