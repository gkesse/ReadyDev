#version 400

in vec2 TexCoord;

layout(location = 0) out vec4 FragColor;

uniform sampler2D Tex;

void main() {
    FragColor = vec4(Tex, TexCoord);
}
