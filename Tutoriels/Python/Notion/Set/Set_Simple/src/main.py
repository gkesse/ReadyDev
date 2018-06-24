#================================================
import GSet
#================================================
print "\n### Ensemble\n"
#================================================
GSet.addData("Gerard")
GSet.addData("Deborah")
GSet.addData("Bryan")
GSet.addData("Copernic")
GSet.addData("Kepler")
GSet.showData()
#================================================
print "\n### Remove Data\n"
GSet.removeData("Kepler")
GSet.removeData("Copernic")
GSet.showData()
#================================================
print "\n### Exist Data\n"
GSet.existData("Gerard")
GSet.existData("Newton")
#================================================
