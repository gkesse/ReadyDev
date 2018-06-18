#================================================
from GPerson import GPerson
#================================================
print "\n### Classe Constructeur Multiple\n"
#================================================
lPerson = GPerson()
print "Nom:", lPerson.m_name
print "Email:", lPerson.m_email
#================================================
print
#================================================
lPerson = GPerson("Gerard", "gerard@python.com")
print "Nom:", lPerson.m_name
print "Email:", lPerson.m_email
#================================================
