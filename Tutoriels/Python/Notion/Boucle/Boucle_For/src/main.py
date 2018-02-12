#================================================
def showList(*data):
    m_list = list(data)
    for val in m_list:
        print "data: {}".format(val)
#================================================
def showDict(**data):
    m_dict = dict(data)
    for key, val in m_dict.items():
        print "{}: {}".format(key, val)
#================================================
print "\n### Show List\n"
m_data = ["Gerard", "Deborah", "Bryan"]
showList(*m_data)

print "\n### Show Dictionary\n"
m_datas = {
"Name":"Gerard",
"Email":"gerard@python.org",
"Password":34000
}
showDict(**m_datas)
#================================================
