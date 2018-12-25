#================================================
from manager.GProcess import GProcess
from manager.GConfig import GConfig
#================================================
GConfig.Instance().setData("PROCESS", "HELLO")
GProcess.Instance().run()
#================================================
