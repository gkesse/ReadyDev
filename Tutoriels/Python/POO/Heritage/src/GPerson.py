#================================================
class GPerson: 
    def __init__(self, name):
        self.m_name = name
        self.m_city = "Paris"
    #================================================
    def __str__(self):
        return "{0} | {1}".format(self.m_name, self.m_city)
#================================================
