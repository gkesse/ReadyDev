#================================================
from manager.GProcess import GProcess
from manager.GSetting import GSetting
#================================================
GSetting.Instance().load("res/config/config.txt")
GProcess.Instance().run()
#================================================
