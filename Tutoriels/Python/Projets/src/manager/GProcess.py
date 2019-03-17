#================================================
from GConfig import GConfig
#================================================
class GProcess:
    #================================================
    @staticmethod
    def Instance():
        lKey = GConfig.Instance().getData("PROCESS")
        if lKey == "PRINT": return GProcessPrint.Instance()
        if lKey == "CONFIG": return GProcessConfig.Instance()
        if lKey == "SETTING": return GProcessSetting.Instance()
        return GProcessConfig.Instance()
    #================================================
    def run(self): pass
#================================================
from GProcessPrint import GProcessPrint
from GProcessSetting import GProcessSetting
from GProcessSetting import GProcessSetting
#================================================
