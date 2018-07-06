//===============================================
#include <stdio.h>
//===============================================
int main(int argc, char** argv) {
    printf("\n### Console Donnee Formatage\n\n");
    
    printf("%-30s: %d\n", "Entier Relatif", -987);
    printf("%-30s: %u\n", "Entier Naturel", 987);
    printf("%-30s: %o\n", "Entier Octal ", 987);
    printf("%-30s: %x\n", "Entier Hexadecimal MIN", 987);
    printf("%-30s: %X\n", "Entier Hexadecimal MAJ", 987);
    printf("%-30s: %f\n", "Reel", 987.654);
    printf("%-30s: %lf\n", "Double", 987.654);
    printf("%-30s: %e\n", "Notation Scientifique MIN", 987.654);
    printf("%-30s: %E\n", "Notation Scientifique MAJ", 987.654);
    printf("%-30s: %g\n", "Reel Court", 987.654);
    printf("%-30s: %a\n", "Reel Hexadecimal MIN", 987.654);
    printf("%-30s: %A\n", "Reel Hexadecimal MAJ", 987.654);
    printf("%-30s: %c\n", "Caractere", 'A');
    printf("%-30s: %p\n", "Ponietur Adresse", 987);
    
    return 0;
}
//===============================================
