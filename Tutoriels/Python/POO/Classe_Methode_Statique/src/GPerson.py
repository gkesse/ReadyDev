#================================================
class GPerson: 
    #================================================
    def __init__(self):
        self.m_name = "Gerard"
        self.m_email = "gerard@python.com"
    #================================================
    def ToString():
        print "Description: Je suis une methode statique"
    #================================================
    ToString = staticmethod(ToString)
#================================================
