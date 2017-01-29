#include<stdio.h>
void main()
{
    int a,b,n;
    printf("enter the value of n: ");
    scanf("%d",&n);
    for(a=1;a<=n;a++)
        {
          for(b=1;b<=n-a;b++)
            printf(" ");
          for(b=1;b<=a;b++)
              printf("1 ");
          printf("\n");
    }
}





