#include<iostream>
using namespace std;
struct list
{
    int coeff;
    int power;
    struct list *next;
};
typedef struct list LIST;
LIST *ptr1,*ptr2,*ptr3,*prev,*temp,*ptr4,*start1;
class linkedlist
{
public:
    LIST *start;
    void nodecreate(int,int);
    void listcreate();
    void traverse();
    void summation(linkedlist l1,linkedlist l2);
};
void linkedlist::nodecreate(int c,int p)
{
    ptr1=new LIST;
    ptr1->coeff=c;
    ptr1->power=p;
    ptr1->next=NULL;

}
void linkedlist::listcreate()
{
    int c,p,i;
    cout<<"\nEnter negative number to break\n\n";
    cout<<"\nEnter start value coefficient and power\n";
    cin>>c;
    cin>>p;
    nodecreate(c,p);
    start=ptr1;
    start1=ptr1;
    ptr2=start;
    ptr2=start1;
    i=1;
    while(1)
    {
        i++;
        cout<<"\nEnter coefficient and power"<<" : ";
        cin>>c;
        cin>>p;

        nodecreate(c,p);
        ptr2->next = ptr1;
        ptr2 = ptr1;
        if(p==0)
        break;
    }
}
void linkedlist::traverse()
{
    cout<<"\n\n\n*********After Traversing*********\n\t\t";
    for(ptr3=start1;ptr3!=NULL;ptr3=ptr3->next)
    {
        cout<<ptr3->coeff<<"x"<<ptr3->power;
        if(ptr3->next!=NULL)
            cout<<"+";
        else
            cout<<".";
    }
    cout<<endl;
}
void linkedlist::summation(linkedlist l1,linkedlist l2)
{
    int p;
    int sum;
    int s;
    for(ptr3=l1.start;ptr3!=NULL;ptr3=ptr3->next)
    {
        p=0;
        for(ptr4=l2.start;ptr4!=NULL;ptr4=ptr4->next)
        {
            if(ptr3->power==ptr4->power)
            {

                 ptr4->coeff=ptr4->coeff+ptr3->coeff;
                p++;
            }

        }
      if(p==0)
            {
                for(ptr4=l2.start;;ptr4=ptr4->next)
        {
        if(ptr4->next==NULL)
        {

            ptr3->next=NULL;
            ptr4->next=ptr3;

            break;
        }
        }
            }

    }
    traverse();
}
int main()
{
    linkedlist L1,L2,L;
    cout<<"First list:\n";
    L1.listcreate();
    L1.traverse();
    cout<<"Second list:\n";
    L2.listcreate();
    L2.traverse();
    L.summation(L1,L2);
    cout << "\nThe Linked List is : ";
}
