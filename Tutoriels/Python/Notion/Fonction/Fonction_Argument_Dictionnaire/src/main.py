#================================================
def sayHello(**names):
    m_dict = dict(names)
    m_format = ""
    for key, val in m_dict.items():
        m_format += "{}: {}\n".format(key, val)
    print m_format
#================================================
m_names = {
"Name":"Gerard",
"Email":"gerard@python.org",
"Password":34000
}
sayHello(**m_names)
#================================================
sayHello(
Name="Deborah", 
Email="deborah@python.org",
Password=31000
)
#================================================
