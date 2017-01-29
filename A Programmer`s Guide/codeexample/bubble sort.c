#include<stdio.h>
void main()
{
    int a[10];
    int i,j,t,k;
    for(i=0;i<10;i++)
    {
        scanf("%d",&a[i]);
    }

    for(i=0;i<10;i++)
    {
        for(j=0;j<9;j++)
        {
            if(a[j]>a[j+1])
            {
                t=a[j+1];
                a[j+1]=a[j];
                a[j]=t;

            }
        }


    }
for(j=0;j<10;j++)
{
    printf("%d  ",a[j]);
}

}
