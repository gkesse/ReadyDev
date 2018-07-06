#================================================
def sayHello(*names):
    #m_list = list(names)
    m_list = names
    m_format = ""
    for val in m_list:
        m_name = val[0]
        m_id = val[1]
        m_format += "Hello {}, Your ID: {}\n" \
        .format(m_name, m_id)
    print m_format
#================================================
print "### Fonction avec argument liste de donnees\n"
#================================================
m_names = [("Gerard", 10),("Bryan", 20),("Robins", 30)]
#sayHello(*m_names)
#================================================
sayHello([("Gerard", 10),("Bryan", 20),("Robins", 30)])
#================================================
