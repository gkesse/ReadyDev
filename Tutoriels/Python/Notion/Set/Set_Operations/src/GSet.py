#================================================
def intersect(A, B, name=""):
    C = A & B
    showData(C, name)
#================================================
def union(A, B, name=""):
    C = A | B
    showData(C, name)
#================================================
def difference(A, B, name=""):
    C = A - B
    showData(C, name)
#================================================
def differenceSym(A, B, name=""):
    C = A ^ B
    showData(C, name)
#================================================
def showData(data, name=""):
    if len(name) != 0:
        print "{}: ".format(name),
    for val in data:
        print "%3d" % (val),
    print
#================================================
