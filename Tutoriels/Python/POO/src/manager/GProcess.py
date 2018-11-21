#================================================
from GConfig import GConfig
#================================================
class GProcess:
    #================================================
    @staticmethod
    def Instance():
        lProcess = GConfig.Instance().getData("PROCESS")
        if lProcess == "HELLO": return GProcessHello.Instance()
        return GProcessHello.Instance()
    #================================================
    def run(self): pass
#================================================
from GProcessHello import GProcessHello
#================================================
