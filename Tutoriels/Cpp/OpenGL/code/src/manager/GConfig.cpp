//================================================
#include "GConfig.h"
//================================================
GConfig* GConfig::m_instance = 0;
//================================================
GConfig::GConfig() {
    setData("WINDOW_TYPE", "OPENGL_GLUT");
    setData("DRAW_TYPE", "SIMPLE");
    setData("SHADER_LOAD_METHOD", "LAYOUT");
    setData("LIGHT_TYPE", "LIGHT_DIFFUSE");
}
//================================================
GConfig::~GConfig() {
	
}
//================================================
GConfig* GConfig::Instance() {
	if(m_instance == 0) {
		m_instance = new GConfig;
	}
	return m_instance;
}
//================================================
void GConfig::setData(const QString& key, const QString& data) {
	m_data[key] = data;
}
//================================================
QString GConfig::getData(const QString& key) {
	return m_data[key];
}
//================================================
