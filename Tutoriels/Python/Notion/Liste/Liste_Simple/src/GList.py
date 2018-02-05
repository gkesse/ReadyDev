#================================================
m_dataMap = []
#================================================
def addData(data):
    m_dataMap.append(data)
#================================================
def insertData(i, data):
    m_dataMap.insert(i, data)
#================================================
def changeData(i, data):
    m_dataMap[i] = data
#================================================
def removeData(data):
    m_dataMap.remove(data)
#================================================
def removeIndex(i):
    del m_dataMap[i]
#================================================
def findData(data):
    for i, val in enumerate(m_dataMap):
        if val == data:
            print "True: {} data[{}] is found".format(data, i)
            return i
    print "False: {} data[-1] isn't found".format(data)
    return -1
#================================================
def existData(data):
    for i, val in enumerate(m_dataMap):
        if val == data:
            print "True: {} data[{}] exists".format(data, i)
            return True
    print "False: {} data[-1] doesn't exist".format(data)
    return False
#================================================
def showData():
    for i, val in enumerate(m_dataMap):
        print "data[{}]: {}".format(i, val)
#================================================
