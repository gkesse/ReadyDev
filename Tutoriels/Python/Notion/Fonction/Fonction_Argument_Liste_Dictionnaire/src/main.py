#================================================
def showLocation(region, *departments, **names):
    m_list = list(departments)
    m_dict = dict(names)
    m_format = ""
    
    for key, val in m_dict.items():
        m_format += "{}: {}\n".format(key, val)
        
    m_format += "Region: {}\nDepartments: ".format(region)
    
    for i, val in enumerate(m_list):
        if i != 0: m_format += " - "
        m_format += "{}".format(val)
        
    print m_format
    print
#================================================
m_names = {
"Name":"Gerard",
"Email":"gerard@python.org",
"Password":31000
}
m_departments = ["Ariege", "Aveyron", "Haute-Garonne", "Gers"]
m_region = "Languedoc-Roussillon"
showLocation(m_region, *m_departments, **m_names)
#================================================
showLocation(
"Midi-Pyrenees", 
"Aude", "Gard", "Herault",
Name="Deborah", 
Email="deborah@python.org",
Password=34000
)
#================================================
