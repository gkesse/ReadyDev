#================================================
def showLocation(region, *departments):
    m_list = list(departments)
    m_format = "Region: {}\nDepartments: ".format(region)
    for i, val in enumerate(m_list):
        if i != 0: m_format += " - "
        m_format += "{}".format(val)
    print m_format
    print
#================================================
showLocation("Languedoc-Roussillon", "Aude", "Gard", "Herault")
showLocation("Midi-Pyrenees", "Ariege", "Aveyron", "Haute-Garonne", "Gers")
showLocation("Alsace", "Bas-Rhin", "Haut-Rhin")
#================================================
