//===============================================
#version 400
//===============================================
layout(location = 0) in vec3 VertexPosition;
layout(location = 1) in vec3 VertexNormal;
//===============================================
flat out vec3 LightIntensity;
//===============================================
struct LightInfo {
  vec4 Position; // Light position in eye coords.
  vec3 La;       // Ambient light intensity
  vec3 Ld;       // Diffuse light intensity
  vec3 Ls;       // Specular light intensity
};
//===============================================
struct MaterialInfo {
  vec3 Ka;            // Ambient reflectivity
  vec3 Kd;            // Diffuse reflectivity
  vec3 Ks;            // Specular reflectivity
  float Shininess;    // Specular shininess factor
};
//===============================================
uniform LightInfo Light;
uniform MaterialInfo Material;
//===============================================
uniform mat4 ModelViewMatrix;
uniform mat4 ProjectionMatrix;
//===============================================
void main() {
    vec3 tnorm = normalize(mat3(ModelViewMatrix) * VertexNormal);
    vec4 eyeCoords = ModelViewMatrix * vec4(VertexPosition,1.0);
    vec3 s = normalize(vec3(Light.Position - eyeCoords));
    vec3 v = normalize(-eyeCoords.xyz);
    vec3 r = reflect( -s, tnorm );
    float sDotN = max( dot(s,tnorm), 0.0 );
    vec3 ambient = Light.La * Material.Ka;
    vec3 diffuse = Light.Ld * Material.Kd * sDotN;
    vec3 spec = vec3(0.0);
    if(sDotN > 0.0) {
       spec = Light.Ls * Material.Ks * pow( max( dot(r,v), 0.0 ), Material.Shininess );
	}
    LightIntensity = ambient + diffuse + spec;
	mat4 MVP = ProjectionMatrix * ModelViewMatrix;
    gl_Position = MVP * vec4(VertexPosition,1.0);
}
//===============================================