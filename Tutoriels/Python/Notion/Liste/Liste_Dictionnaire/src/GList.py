#================================================
from operator import itemgetter
#================================================
m_dataMap = []
#================================================
def addData(**data):
    m_dict = dict(data)
    m_dataMap.append(m_dict)
#================================================
def insertData(i, **data):
    m_dict = dict(data)
    m_dataMap.insert(i, m_dict)
#================================================
def sortData(*keys, **params):
    m_keys = list(keys)
    m_params = dict(params)
    m_rev = False
    if "rev" in m_params.keys(): m_rev = m_params["rev"]
    m_dataMap.sort(key=itemgetter(*m_keys), reverse=m_rev)
#================================================
def findPred(item, **params):
    m_params = dict(params)
    for key, val in m_params.items():
        if item[key] != val:
            return False
    return True
#================================================
def findData(**params):
    m_params = dict(params)
    m_findMap = []
    m_findMap[:] = [val for val in m_dataMap if findPred(val, **m_params)]
    return m_findMap
#================================================
def changeData(i, **data):
    m_dict = dict(data)
    m_dataMap[i] = data
#================================================
def removeData(data):
    m_dataMap.remove(data)
#================================================
def removeIndex(i):
    del m_dataMap[i]
#================================================
def existData(data):
    for i, val in enumerate(m_dataMap):
        if val == data:
            print "True: {} data[{}] exists".format(data, i)
            return i
    print "False: {} data[-1] doesn't exist".format(data)
    return -1
#================================================
def showData(m_showData=m_dataMap):
    for i, valMap in enumerate(m_showData):
        print "data[{}]:".format(i)
        for key, val in valMap.items():
            print "{}: {}".format(key, val)
        print
#================================================
