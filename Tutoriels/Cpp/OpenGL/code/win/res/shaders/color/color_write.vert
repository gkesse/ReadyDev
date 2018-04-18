#version 330 core

layout(location = 0) in vec2 in_Vertex;
layout(location = 1) in vec3 in_Color;

out vec3 out_Color;

void main()
{
    gl_Position = vec4(in_Vertex,0.0,1.0);
	out_Color = in_Color;
}
