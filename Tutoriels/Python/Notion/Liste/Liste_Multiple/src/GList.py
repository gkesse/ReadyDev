#================================================
m_dataMap = []
#================================================
def createMat(row, col, *data):
    m_data = list(data)
    for x in range(row):
        m_colVal = []
        for y in range(col):
            i = x*col + y
            m_val = 0
            if len(m_data) != 0: m_val = m_data[i]
            m_colVal.append(m_val)
        m_dataMap.append(m_colVal)
#================================================
def setData(x, y, data):
    m_dataMap[x][y] = data
#================================================
def showData(row, col, m_showData=m_dataMap):
    for x in range(row):
        for y in range(col):
            print "%5d" % (m_dataMap[x][y]),
        print
#================================================
