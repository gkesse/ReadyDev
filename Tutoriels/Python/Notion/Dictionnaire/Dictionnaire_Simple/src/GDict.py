#================================================
m_dataMap = {}
#================================================
def setData(key, val):
    m_dataMap[key] = val
#================================================
def removeData(key):
    del m_dataMap[key]
#================================================
def existKey(key):
    if key in m_dataMap.keys():
        print "True: {} key exists".format(key)
        return True
    print "False: {} key doesn't exist".format(key)
    return False
#================================================
def existData(data):
    if data in m_dataMap.values():
        print "True: {} value exists".format(data)
        return True
    print "False: {} value doesn't exist".format(data)
    return False
#================================================
def showData():
    for key, val in m_dataMap.items():
        print "{}: {}".format(key, val)
#================================================
