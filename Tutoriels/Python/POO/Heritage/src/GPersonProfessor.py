#================================================
from GPerson import GPerson
#================================================
class GPersonProfessor(GPerson): 
    def __init__(self, name, lesson):
        GPerson.__init__(self, name)
        self.m_lesson = lesson
    def __str__(self):
        return "Professeur: {0} | {1}".format(GPerson.__str__(self), self.m_lesson)
#================================================
