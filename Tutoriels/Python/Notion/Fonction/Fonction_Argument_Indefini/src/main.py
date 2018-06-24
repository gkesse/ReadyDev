#================================================
def sayHello(*names):
    lList = list(names)
    lFormat = ""
    for val in lList:
        lName = val[0]
        lId = val[1]
        lFormat += "Bonjour {}, Ton ID est: {}\n".format(lName, lId)
    print lFormat
#================================================
print "### Fonction avec argument indefini\n"
#================================================
sayHello([("Gerard", 10),("Bryan", 20),("Robins", 30)])
#================================================
