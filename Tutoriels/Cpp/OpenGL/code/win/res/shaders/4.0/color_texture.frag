#version 400

in vec2 TexCoord;

layout(location = 0) out vec4 FragColor;

uniform sampler2D Tex1;

void main() {
	vec4 TexColor = texture(Tex1, TexCoord);
    FragColor = TexColor;
}
