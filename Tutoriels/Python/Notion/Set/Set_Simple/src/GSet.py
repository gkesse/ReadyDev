#================================================
m_dataMap = set()
#================================================
def addData(data):
    m_dataMap.add(data)
#================================================
def removeData(data):
    m_dataMap.discard(data)
#================================================
def existData(data):
    if data in m_dataMap:
        print "True: {} data exists".format(data)
        return True
    print "False: {} data doesn't exist".format(data)
    return False
#================================================
def showData():
    for i, val in enumerate(m_dataMap):
        print "data[{}]: {}".format(i, val)
#================================================
