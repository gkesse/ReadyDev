//===============================================
#include <stdio.h>
//===============================================
int main(int argc, char** argv) {
    printf("\n### Console Variable Taille\n\n");
    
    printf("%-15s: %d (octets)\n", "sizeof(char)", sizeof(char));
    printf("%-15s: %d (octets)\n", "sizeof(int)", sizeof(int));
    printf("%-15s: %d (octets)\n", "sizeof(long)", sizeof(long));
    printf("%-15s: %d (octets)\n", "sizeof(float)", sizeof(float));
    printf("%-15s: %d (octets)\n", "sizeof(double)", sizeof(double));
    
    return 0;
}
//===============================================
