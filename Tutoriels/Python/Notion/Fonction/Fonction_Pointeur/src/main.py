#================================================
pTaskMap = []
#================================================
def helloGerard():
    print "Hello Gerard"
#================================================
def helloDeborah():
    print "Hello Deborah"
#================================================
def helloBryan():
    print "Hello Bryan"
#================================================
def addTask(pTask):
    pTaskMap.append(pTask)
#================================================
def runTask():
    for pTask in pTaskMap:
        pTask()
#================================================
addTask(helloGerard)
addTask(helloDeborah)
addTask(helloBryan)
runTask()
#================================================
