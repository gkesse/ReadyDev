#================================================
import GDict
#================================================
print "\n### Set Data\n"
GDict.setData("Name", "Gerard")
GDict.setData("Email", "gerard@python")
GDict.setData("City", "Montpellier")
GDict.setData("PostalCode", 34000)
GDict.setData("Password", 1230)
GDict.showData()
#================================================
print "\n### Change Data\n"
GDict.setData("City", "Toulouse")
GDict.setData("PostalCode", 31000)
GDict.showData()
#================================================
print "\n### Remove Data\n"
GDict.removeData("City")
GDict.removeData("PostalCode")
GDict.showData()
#================================================
print "\n### Exist Key\n"
GDict.existKey("Name")
GDict.existKey("Pseudo")
#================================================
print "\n### Exist Data\n"
GDict.existData("Gerard")
GDict.existData("Kepler")
#================================================
