#version 330

layout(location = 0) in vec3 VertexPosition;
layout(location = 1) in vec2 VertexTexCoord;

out vec2 TexCoord;

uniform mat4 ModelViewMatrix;
uniform mat4 ProjectionMatrix;

void main() {
    TexCoord = VertexTexCoord;
	mat4 MVP = ProjectionMatrix * ModelViewMatrix;
    gl_Position = MVP*vec4(VertexPosition, 1.0);
}