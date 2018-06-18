#================================================
class GPerson: 
    m_count = 0;
    #================================================
    def __init__(self):
        self.m_name = "Gerard"
        self.m_email = "gerard@python.com"
        GPerson.m_count += 1
    #================================================
    def Count(cls):
        print "Compteur:", cls.m_count
    #================================================
    Count = classmethod(Count)
#================================================
