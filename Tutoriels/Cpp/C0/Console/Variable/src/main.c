//===============================================
#include <stdio.h>
//===============================================
int main(int argc, char** argv) {
    printf("\n### Console Variable\n\n");
    
    char lChar = 'A';
    char* lString = "Bonjour tout le monde";
    int lInt = 987;
    long lLong = 987654321;
    float lFloat = 987.654;
    double lDouble = 987654.321;
    
    printf("%-20s: %c\n", "Caractere", lChar);
    printf("%-20s: %s\n", "Chaine", lString);
    printf("%-20s: %d\n", "Entier Relatif", lInt);
    printf("%-20s: %ld\n", "Entier Relatif Long", lLong);
    printf("%-20s: %f\n", "Reel", lFloat);
    printf("%-20s: %lf\n", "Double", lDouble);
    
    return 0;
}
//===============================================
