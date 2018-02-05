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
def findPred(item, **data):
    m_data = dict(data)
    for key, val in m_data.items():
        if item[key] != val:
            return False
    return True
#================================================
def findData(**data):
    m_data = dict(data)
    m_findMap = []
    m_findMap[:] = [val for val in m_dataMap if findPred(val, **m_data)]
    showData(m_findMap)
    return m_findMap
#================================================
def changeData(i, **data):
    m_dict = dict(data)
    m_dataMap[i] = data
#================================================
def removeData(**data):
    m_data = dict(data)
    m_dataMap[:] = [val for val in m_dataMap if not findPred(val, **m_data)]
#================================================
def removeIndex(i):
    del m_dataMap[i]
#================================================
def existData(**data):
    m_data = dict(data)
    m_findMap = findData(**m_data)
    if len(m_findMap) != 0:
        print "True: {} data exists".format(m_data)
        return True
    print "False: {} data doesn't exist".format(m_data)
    return False
#================================================
def showData(m_showData=m_dataMap):
    for i, valMap in enumerate(m_showData):
        print "data[{}]:".format(i)
        for key, val in valMap.items():
            print "{}: {}".format(key, val)
        print
#================================================
