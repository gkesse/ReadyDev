#================================================
class GPerson(object): 
    def __init__(self):
        self.__m_name = "Gerard"
        self.__m_email = "gerard@python.com"
    #================================================
    def __getName(self):
        return self.__m_name
    #================================================
    def __setName(self, name):
        self.__m_name = name
    #================================================
    def __getEmail(self):
        return self.__m_email
    #================================================
    def __setEmail(self, email):
        self.__m_email = email
    #================================================
    Name = property(__getName, __setName)
    Email = property(__getEmail, __setEmail)
#================================================
