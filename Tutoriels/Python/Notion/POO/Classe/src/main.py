#================================================
from GPerson import GPerson
#================================================
print "\n### Classe\n"
#================================================
lPerson = GPerson()
print "Nom: ", lPerson.m_name
print "Email: ", lPerson.m_email
#================================================
lPerson = GPerson("Gerard", "gerard@python.com")
print "Nom: ", lPerson.m_name
print "Email: ", lPerson.m_email
#================================================
