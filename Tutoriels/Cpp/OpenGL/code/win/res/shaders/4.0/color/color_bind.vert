#version 400

in vec3 VertexColor;
in vec3 VertexPosition;

out vec3 Color;

void main()
{
    Color = VertexColor;

    gl_Position = vec4(VertexPosition,1.0);
}
