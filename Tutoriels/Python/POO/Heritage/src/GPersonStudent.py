#================================================
from GPerson import GPerson
#================================================
class GPersonStudent(GPerson): 
    def __init__(self, name, average):
        GPerson.__init__(self, name)
        self.m_average = average
    def __str__(self):
        return "Etudiant: {0} | {1}".format(GPerson.__str__(self), self.m_average)
#================================================
