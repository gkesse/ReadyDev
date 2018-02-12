#================================================
import GList
#================================================
print "\n### Add Data\n"
GList.addData("Gerard")
GList.addData("Deborah")
GList.addData("Bryan")
GList.showData()
#================================================
print "\n### Insert Data\n"
GList.insertData(2, "Kepler")
GList.insertData(2, "Copernic")
GList.showData()
#================================================
print "\n### Change Data\n"
GList.changeData(2, "Newton")
GList.showData()
#================================================
print "\n### Remove Data\n"
GList.removeData("Newton")
GList.showData()
#================================================
print "\n### Remove Data Index\n"
GList.removeIndex(2)
GList.showData()
#================================================
print "\n### Find Data\n"
GList.findData("Gerard")
GList.findData("Kepler")
#================================================
print "\n### Exist Data\n"
GList.existData("Gerard")
GList.existData("Newton")
#================================================
