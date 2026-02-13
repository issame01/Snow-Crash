#include <stdio.h>
#include <string.h>

int main(int argc, char *argv[]) {
    // check if user gave argument
    if (argc != 2) {
        printf("Usage: %s <encoded_string>\n", argv[0]);
        return 1;
    }

    char *hash = argv[1];
    int length = strlen(hash);

    // decode and print
    for (int i = 0; i < length; i++) {
        char decoded = hash[i] - i;
        printf("%c", decoded);
    }

    printf("\n");
    return 0;
}