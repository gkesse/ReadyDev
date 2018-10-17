//===============================================
#include "GProcessConfigurationOptionsLong.h"
//===============================================
GProcessConfigurationOptionsLong* GProcessConfigurationOptionsLong::m_instance = 0;
//===============================================
GProcessConfigurationOptionsLong::GProcessConfigurationOptionsLong() {

}
//===============================================
GProcessConfigurationOptionsLong::~GProcessConfigurationOptionsLong() {

}
//===============================================
GProcessConfigurationOptionsLong* GProcessConfigurationOptionsLong::Instance() {
    if(m_instance == 0) {
        m_instance = new GProcessConfigurationOptionsLong;
    }
    return m_instance;
}
//===============================================
void GProcessConfigurationOptionsLong::run(int argc, char **argv) {
    cout << "\n### Options de configuration longues\n\n";
    boost::program_options::options_description lDescription("Toutes les options");
    lDescription.add_options()
            ("apples", boost::program_options::value<int>(), "combien de pommes avez-vous")
            ("oranges", boost::program_options::value<int>(), "combien d'oranges avez-vous")
            ("help", "produire un message d'aide");
    boost::program_options::variables_map lVariableMap;
    boost::program_options::store(boost::program_options::parse_command_line(argc, argv, lDescription), lVariableMap);
    boost::program_options::notify(lVariableMap);

    if(lVariableMap.count("help")) {
        cout << lDescription << "\n";
        return;
    }

    int lApples = lVariableMap["apples"].as<int>();
    int lOranges = lVariableMap["oranges"].as<int>();
    int lFruits = lApples + lOranges;

    cout << "Nombre de pommes: " << lApples << "\n";
    cout << "Nombre d'oranges: " << lOranges << "\n";
    cout << "Fruits total: " << lFruits << "\n";
}
//===============================================
