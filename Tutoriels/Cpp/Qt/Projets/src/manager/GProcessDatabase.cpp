//===============================================
#include "GProcessDatabase.h"
#include "GDatabase.h"
#include "GPrint.h"
//===============================================
GProcessDatabase* GProcessDatabase::m_instance = 0;
//===============================================
GProcessDatabase::GProcessDatabase() {

}
//===============================================
GProcessDatabase::~GProcessDatabase() {

}
//===============================================
GProcessDatabase* GProcessDatabase::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessDatabase;
    }
    return m_instance;
}
//===============================================
void GProcessDatabase::run(int argc, char **argv) {
    GDatabase::Instance()->showDrivers();
    GDatabase::Instance()->addDatabase("SQLITE", "QSQLITE");
    GDatabase::Instance()->setDatabaseName("SQLITE", "data/db/data.dat");
    GDatabase::Instance()->openDatabase("SQLITE");
    GDatabase::Instance()->showTables("SQLITE");

    GDatabase::Instance()->createQuery("SQLITE", "SQLITE");
    GDatabase::Instance()->createQuery("SQLITE", "SQLITE_AUTHORS");
    GDatabase::Instance()->createQuery("SQLITE", "SQLITE_GENRES");
    GDatabase::Instance()->createQuery("SQLITE", "SQLITE_BOOKS");

    GDatabase::Instance()->createTable(
                "SQLITE", "books",
                "id integer primary key,"
                "title varchar,"
                "author integer,"
                "genre integer,"
                "year integer,"
                "rating integer");
    GDatabase::Instance()->createTable(
                "SQLITE", "authors",
                "id integer primary key,"
                "name varchar,"
                "birthdate date");
    GDatabase::Instance()->createTable(
                "SQLITE", "genres",
                "id integer primary key,"
                "name varchar");

    if(GDatabase::Instance()->emptyTable("SQLITE", "authors") == true) {
        GDatabase::Instance()->prepare(
                    "SQLITE_AUTHORS",
                    "insert into authors (name, birthdate) values (?, ?)");

        GDatabase::Instance()->prepare(
                    "SQLITE_GENRES",
                    "insert into genres(name) values(?)");

        GDatabase::Instance()->prepare(
                    "SQLITE_BOOKS",
                    "insert into books(title, year, author, genre, rating) values(?, ?, ?, ?, ?)");

        QVariant asimovId = GDatabase::Instance()->prepareData("SQLITE_AUTHORS", "Isaac Asimov", QDate(1920, 2, 1));
        QVariant greeneId = GDatabase::Instance()->prepareData("SQLITE_AUTHORS", "Graham Greene", QDate(1904, 10, 2));
        QVariant pratchettId = GDatabase::Instance()->prepareData("SQLITE_AUTHORS", "Terry Pratchett", QDate(948, 4, 28));

        QVariant sfiction = GDatabase::Instance()->prepareData("SQLITE_GENRES", "Science Fiction");
        QVariant fiction = GDatabase::Instance()->prepareData("SQLITE_GENRES", "Fiction");
        QVariant fantasy = GDatabase::Instance()->prepareData("SQLITE_GENRES", "Fantasy");

        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Foundation", 1951, asimovId, sfiction, 3);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Foundation and Empire", 1952, asimovId, sfiction, 4);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Second Foundation", 1953, asimovId, sfiction, 3);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Foundation's Edge", 1982, asimovId, sfiction, 3);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Foundation and Earth", 1986, asimovId, sfiction, 4);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Prelude to Foundation", 1988, asimovId, sfiction, 3);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Forward the Foundation", 1993, asimovId, sfiction, 3);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","The Power and the Glory", 1940, greeneId, fiction, 4);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","The Third Man", 1950, greeneId, fiction, 5);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Our Man in Havana", 1958, greeneId, fiction, 4);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Guards! Guards!", 1989, pratchettId, fantasy, 3);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Night Watch", 2002, pratchettId, fantasy, 3);
        GDatabase::Instance()->prepareData("SQLITE_BOOKS","Going Postal", 2004, pratchettId, fantasy, 3);
    }

    GPrint::Instance()->print(GDatabase::Instance()->getTableData("SQLITE", "authors"), "AUTHORS");
    GPrint::Instance()->print(GDatabase::Instance()->getTableData("SQLITE", "genres"), "GENRES");
    GPrint::Instance()->print(GDatabase::Instance()->getTableData("SQLITE", "books"), "BOOKS");

    GDatabase::Instance()->releaseQuery("SQLITE");
    GDatabase::Instance()->releaseQuery("SQLITE_AUTHORS");
    GDatabase::Instance()->releaseQuery("SQLITE_GENRES");
    GDatabase::Instance()->releaseQuery("SQLITE_BOOKS");

    GDatabase::Instance()->closeDatabase("SQLITE");
}
//===============================================
