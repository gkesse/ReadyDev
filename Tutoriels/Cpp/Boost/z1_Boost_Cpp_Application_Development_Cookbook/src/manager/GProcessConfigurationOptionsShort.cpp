//===============================================
#include "GProcessConfigurationOptionsShort.h"
//===============================================
GProcessConfigurationOptionsShort* GProcessConfigurationOptionsShort::m_instance = 0;
//===============================================
GProcessConfigurationOptionsShort::GProcessConfigurationOptionsShort() {

}
//===============================================
GProcessConfigurationOptionsShort::~GProcessConfigurationOptionsShort() {

}
//===============================================
GProcessConfigurationOptionsShort* GProcessConfigurationOptionsShort::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessConfigurationOptionsShort;
    }
    return m_instance;
}
//===============================================
void GProcessConfigurationOptionsShort::run(int argc, char **argv) {
    cout << "\n### Options de configuration court\n\n";
    boost::program_options::options_description lDescription("Toutes les options");
    int lOrangesVar = 0;
    lDescription.add_options()
            ("apples,a", boost::program_options::value<int>()->default_value(10), "combien de pommes avez-vous")
            ("oranges,o", boost::program_options::value<int>(&lOrangesVar)->required(), "combien d'oranges avez-vous")
            ("name", boost::program_options::value<string>(), "quel est votre nom")
            ("help", "produire un message d'aide");

    boost::program_options::variables_map lVariableMap;
    boost::program_options::store(boost::program_options::parse_command_line(argc, argv, lDescription), lVariableMap);

    if(lVariableMap.count("help")) {
        cout << lDescription << "\n";
        return;
    }

    boost::program_options::store(boost::program_options::parse_config_file<char>("res/cfg/config.cfg", lDescription), lVariableMap);
    boost::program_options::notify(lVariableMap);

    if(lVariableMap.count("name")) {
        string lName = lVariableMap["name"].as<string>();
        cout << "Bonjour " << lName << "\n";
    }

    int lApples = lVariableMap["apples"].as<int>();
    int lOranges = lVariableMap["oranges"].as<int>();
    int lFruits = lApples + lOranges;

    cout << "Nombre de pommes: " << lApples << "\n";
    cout << "Nombre d'oranges: " << lOranges << "\n";
    cout << "Fruits total: " << lFruits << "\n";
}
//===============================================
