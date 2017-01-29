 #include <iostream>

using namespace std;
struct list
{
    int info;
    struct list *f_ptr;
    struct list *b_ptr;
};

typedef struct list LIST;
LIST *ptr1,*ptr2,*start,*ptr3,*ptr4,*ptr5;

class LinkedList
{
    public:
      void nodecreate(int);
      void listcreate();
      void traverse();
      void forword_travers();
      void backword_travers();

    void insert_first();
    void insert_last();
    void insert_specific_position();

    void delete_first();
    void delete_last();
    void delete_specific_position();
    void sort();
};

void LinkedList :: nodecreate(int a)
{
    ptr1 = new LIST;
    ptr1->info = a;
    ptr1->f_ptr = NULL;
    ptr1->b_ptr=NULL;
}

void LinkedList :: listcreate()
{
    int a,i,n;

    cout<<"\n********Enter number of value to insert*********\n\n";
    cin>>n;
    cout<<"\nEnter Start value : ";
    cin>>a;

    nodecreate(a);

    start = ptr1;
    ptr2=start;//TO HOLD START AS START CANT BE DIRECTLY ACCESSED
    i=1;

    while(i<n)
    {
        i++;
        cout<<"\nEnter "<<i<<" : ";
        cin>>a;

        nodecreate(a);
        ptr2->f_ptr = ptr1;
        ptr1->b_ptr=ptr2;
        if(i==n)
        {
        	  ptr1->f_ptr = start;
        	  start->b_ptr=ptr1;
        	  ptr1->b_ptr=ptr2;
        	  ptr2=ptr1;
        }
		else{

	    ptr2->f_ptr = ptr1;
        ptr1->b_ptr=ptr2;
       // ptr1->f_ptr = ptr2;
        //ptr2->b_ptr=ptr1;
         ptr2=ptr1;
		}
        //ptr2->f_ptr = ptr1;
        //ptr1->b_ptr=ptr2;
       // ptr1->f_ptr = ptr2;
       // ptr2->b_ptr=ptr1;
       // ptr2=ptr1;
        //ptr2=start;
    }

}
void LinkedList :: traverse()
{
    cout<<"\n***********After Traversing*********\n\t\t";

    for(ptr3=start;; ptr3=ptr3->f_ptr)
    {
    	 cout<<ptr3->info<<"  ";
    	 if(ptr3->f_ptr==start)
    	// cout<<ptr3->f_ptr<<" "<<ptr3->b_ptr<<"\n";
    	//if(ptr3->info==3)
		break;
    }

         cout<<endl << endl;
}
void LinkedList::forword_travers()
{
     cout<<"\n***********After Forword Traversing*********\n\t\t";

    for(ptr3=start;; ptr3=ptr3->f_ptr)
    {
    	 cout<<ptr3->info<<"  ";
    	 if(ptr3->f_ptr==start)
    	// cout<<ptr3->f_ptr<<" "<<ptr3->b_ptr<<"\n";
    	//if(ptr3->info==3)
		break;
    }

         cout<<endl << endl;

}
void LinkedList::backword_travers()
{
     cout<<"\n***********After Backword Traversing*********\n\t\t";

    for(ptr3=start->b_ptr;; ptr3=ptr3->b_ptr)
    {
    	 cout<<ptr3->info<<"  ";
    	 if(ptr3==start)
    	// cout<<ptr3->f_ptr<<" "<<ptr3->b_ptr<<"\n";
    	//if(ptr3->info==3)
		break;
    }

         cout<<endl << endl;
}
void LinkedList::insert_first()
{
    int val;
    cout<<"\nEnter value to insert at first\n";
    cin>>val;
    nodecreate(val);
    ptr1->f_ptr=start;
    ptr1->b_ptr=ptr2;
    ptr2->f_ptr=ptr1;
    start=ptr1;
    traverse();
}
void LinkedList::insert_last()
{
     int val;
    cout<<"\nEnter value to insert at last\n";
    cin>>val;
    nodecreate(val);
    for(ptr3=start;;ptr3=ptr3->f_ptr)
    {
        if(ptr3->f_ptr==start)
        {
            ptr3->f_ptr=ptr1;
            ptr1->f_ptr=start;
            ptr1->b_ptr=ptr3;
            ptr5=ptr1;
            break;
        }
    }
    traverse();
}
void LinkedList::insert_specific_position()
{
    int val;
    cout<<"\nEnter value to insert\n";
    cin>>val;
    int a;
    cout<<"\nEnter value to insert after it\n";
    cin>>a;
    nodecreate(val);
    for(ptr3=start;ptr3->f_ptr!=start;ptr3=ptr3->f_ptr)
    {
        if(ptr3->info==a)
        {
            ptr1->f_ptr=ptr3->f_ptr;
            ptr3->b_ptr=ptr1;
            ptr1->b_ptr=ptr3;
            ptr3->f_ptr=ptr1;
            break;

        }
    }
    traverse();

}
void LinkedList::delete_first()
{
     ptr3=start;
     start=ptr3->f_ptr;
     ptr5->f_ptr=start;
     cout<<"delete first"<<endl;
     traverse();
}
void LinkedList::delete_last()
{
    for(ptr3=start;ptr3->f_ptr!=start;ptr3=ptr3->f_ptr)
    {
        if(ptr3->f_ptr->f_ptr==start)
        {
            ptr3->f_ptr=start;
            break;
        }
    }
    traverse();
}
void LinkedList::delete_specific_position()
{
    int value ;
    cout << "Enter value to delete :\n ";
    cin >> value;
    for(ptr3=start;ptr3->f_ptr!=start;ptr3=ptr3->f_ptr)
    {

        if(ptr3->info==value)
        {
            ptr3->b_ptr->f_ptr=ptr3->f_ptr;
            ptr3->f_ptr->b_ptr=ptr3->b_ptr;
            break;
        }
    }
    traverse();
}
int main()
{
    LinkedList L;

    L.listcreate();
    L.traverse();
    L.forword_travers();
    L.backword_travers();
    L.insert_first();
    L.insert_last();
    L.insert_specific_position();
    L.delete_first();
    L.delete_last();
    L.delete_specific_position();

    return 0;
}

