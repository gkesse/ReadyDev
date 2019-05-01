#================================================
from manager.GProcess import GProcess
from manager.GSetting import GSetting
#================================================
GSetting.Instance().load("data/config/config.txt")
GProcess.Instance().run()
#================================================
