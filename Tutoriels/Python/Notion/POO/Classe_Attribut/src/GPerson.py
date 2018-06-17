#================================================
class GPerson: 
    m_count = 0;
    
    def __init__(self, nom, email):
        self.m_name = nom
        self.m_email = email
        GPerson.m_count += 1
#================================================
