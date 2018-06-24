#================================================
gDataMap = set()
#================================================
def addData(data):
    gDataMap.add(data)
#================================================
def removeData(data):
    gDataMap.discard(data)
#================================================
def existData(data):
    if data in gDataMap:
        print "True: {} data exists".format(data)
        return True
    print "False: {} data doesn't exist".format(data)
    return False
#================================================
def showData():
    for i, val in enumerate(gDataMap):
        print "data[{}]: {}".format(i, val)
#================================================
