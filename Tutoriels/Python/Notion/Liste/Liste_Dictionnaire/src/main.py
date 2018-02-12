#================================================
import GList
#================================================
print "\n### Add Data\n"
GList.addData(Name="Gerard",Email="gerard@python.org",City="Montpellier")
GList.addData(Name="Deborab",Email="deborab@python.org",City="Toulouse")
GList.addData(Name="Bryan",Email="bryan@python.org",City="Strasbourg")
GList.showData()
#================================================
print "\n### Insert Data\n"
GList.insertData(2, Name="Kepler",Email="kepler@python.org",City="Montpellier")
GList.insertData(2, Name="Copernic",Email="copernic@python.org",City="Strasbourg")
GList.showData()
#================================================
print "\n### Change Data\n"
GList.changeData(2, Name="Newton",Email="newton@python.org",City="Toulouse")
GList.showData()
#================================================
print "\n### Sort Data\n"
GList.sortData("City", rev=True)
GList.showData()
#================================================
print "\n### Find Data\n"
GList.findData(City="Montpellier", Name="Gerard")
#================================================
print "\n### Exist Data\n"
GList.existData(City="Montpellier", Name="Gerard")
GList.existData(City="Strasbourg", Name="Gerard")
#================================================
print "\n### Remove Data Index\n"
GList.removeIndex(1)
GList.showData()
#================================================
print "\n### Remove Data\n"
GList.removeData(City="Montpellier", Name="Kepler")
GList.showData()
#================================================
