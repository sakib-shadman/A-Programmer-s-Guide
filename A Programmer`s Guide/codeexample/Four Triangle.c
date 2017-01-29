#include<stdio.h>
void main()
{
    int a,b,c,d,n,e,f,g,h;
    scanf("%d",&n);
    for(a=1;a<=n;a++)
    {
        for(b=1;b<=n-a+1;b++)
        {
            printf("1");
        }
        for(c=1;c<=a-1;c++)
        {
            printf("  ");
        }
        for(d=1;d<=n-a+1;d++)
        {
            printf("1");
        }
    printf("\n");
    }
    for(e=1;e<=n;e++)
    {
        for(f=1;f<=e;f++)
        {
            printf("1");
        }
        for(g=1;g<=n-e;g++)
        {
            printf("  ");
        }
        for(h=1;h<=e;h++)
        {
            printf("1");
        }
        printf("\n");
    }
}

