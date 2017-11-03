//===============================================
class Prototype
{
    public:
    virtual ~Prototype();        
    virtual Prototype* Clone() const  = 0;
};
//===============================================
class MySQLManager: public Prototype
{
    std::string m_host,m_login,m_pass;
    std::string m_base,m_table;
    
    public:
    MySQLManager(const std::string& host="",const std::string& login="",const std::string& pass="");
    MySQLManager* Clone() const;
    
    void Afficher();
    void Set(const std::string& base="",const std::string& table=""); 
};
//===============================================
Prototype::~Prototype()
{
    
}
//===============================================
MySQLManager* MySQLManager::Clone() const 
{
    //le constructeur de recopie fait tout le travail à notre place.
    return (new MySQLManager(*this));
}
//===============================================
int main(void)
{
    MySQLManager manager1("localhost","Davidbrcz","motdepasse");
    manager1.Set("faussebase","table1");
    manager1.Afficher();
    std::auto_ptr<MySQLManager> manager2(manager1.Clone());
    manager2->Afficher();        
    manager2->Set("faussebase2","table2");
    manager2->Afficher();
    return 0;
}
//===============================================

//===============================================
