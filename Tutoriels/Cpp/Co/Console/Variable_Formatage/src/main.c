//===============================================
#include <stdio.h>
//===============================================
int main(int argc, char** argv) {
    printf("\n### Console Variable\n\n");
    
    printf("%-38s: %d\n", "Entier Relatif", -987);
    printf("%-38s: %u\n", "Entier Naturel", 987);
    printf("%-38s: %o\n", "Entier Octal ", 987);
    printf("%-38s: %x\n", "Entier Hexadecimal MIN", 987);
    printf("%-38s: %X\n", "Entier Hexadecimal MAJ" 987);
    printf("%-38s: %f\n", "Reel", 987.654);
    printf("%-38s: %lf\n", "Double", 987.654);
    printf("%-38s: %e\n", "Notation Scientifique MIN", 987.654);
    printf("%-38s: %E\n", "Notation Scientifique MAJ", 987.654);
    printf("%-38s: %g\n", "Shorter Float (987.654)", 987.654);
    printf("%-38s: %g\n", "Shorter Scientific (9.876540E+002)", 9.876540E+002);
    
    return 0;
}
//===============================================
