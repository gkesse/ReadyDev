#================================================
from GProcess import GProcess
#================================================
class GProcessHello(GProcess):
    #================================================
    __instance = None
    #================================================
    def __init__(self):
        if GProcessHello.__instance == None:
            GProcessHello.__instance = self        
    #================================================
    @staticmethod
    def Instance():
        if GProcessHello.__instance == None:
            GProcessHello()
        return GProcessHello.__instance
    #================================================
    def run(self):
        print "Hello Sub"
#================================================
