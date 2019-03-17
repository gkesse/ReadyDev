#================================================
class GPrint:
    #================================================
    m_instance = None
    #================================================
    def __init__(self):
        if GPrint.m_instance == None:
            GPrint.m_instance = self        
    #================================================
    @staticmethod
    def Instance():
        if GPrint.m_instance == None:
            GPrint()
        return GPrint.m_instance
    #================================================
    def printData(self, data, name=""):
        if(name): print(name + ":"),
        print(data) 
#================================================
