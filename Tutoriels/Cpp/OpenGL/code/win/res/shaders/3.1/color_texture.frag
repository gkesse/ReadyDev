#version 400

in vec3 Color;
in vec2 TexCoord;

layout(location = 0) out vec4 FragColor;

void main() {
    FragColor = vec4(Color, 1.0);
}
