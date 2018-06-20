//===============================================
#include <stdio.h>
//===============================================
int main(int argc, char** argv) {
    printf("\n### Console Variable\n\n");
    
    printf("%-30s: %d\n", "Integer (987)", 987);
    printf("%-30s: %u\n", "Integer Unsigned (987)", 987);
    printf("%-30s: %o\n", "Octal (987)", 987);
    printf("%-30s: %x\n", "Hexadecimal Lower (987)", 987);
    printf("%-30s: %X\n", "Hexadecimal Upper (987)", 987);
    printf("%-30s: %f\n", "Float Lower (987.654)", 987.654);
    printf("%-30s: %F\n", "Float Upper (987.654)", 987.654);
    printf("%-30s: %e\n", "Scientific Lower (987.654)", 987.654);
    printf("%-30s: %E\n", "Scientific Upper (987.654)", 987.654);
    printf("%-30s: %g\n", "Shorter Float (987.654)", 987.654);
    printf("%-30s: %g\n", "Shorter Scientific (.876540E+002)", 9.876540E+002);
    
    return 0;
}
//===============================================
