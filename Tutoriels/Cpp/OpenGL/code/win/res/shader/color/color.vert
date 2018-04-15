#version 400 core

layout(location = 0) in vec4 in_Vertex;

void main()
{
    gl_Position = in_Vertex;
}
