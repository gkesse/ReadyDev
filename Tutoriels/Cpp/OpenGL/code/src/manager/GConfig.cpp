//================================================
#include "GConfig.h"
//================================================
GConfig* GConfig::m_instance = 0;
//================================================
GConfig::GConfig() {
    setData("WINDOW_TYPE", "OPENGL_GLUT");
    setData("DRAW_FLAG", "FALSE");
    setData("COLOR_FLAG", "FALSE");
    setData("COLOR_VAL", "55;63;96;255");
    setData("DRAW_TYPE", "SIMPLE");
    setData("SHADER_LOAD_METHOD", "LAYOUT");
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
