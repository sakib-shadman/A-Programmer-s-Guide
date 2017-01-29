1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
// @BEGIN_OF_SOURCE_CODE

#include <iostream>
#include <cstdio>
#include <algorithm>
#include <cstring>
#include <string>
#include <cctype>
#include <stack>
#include <queue>
#include <list>
#include <vector>
#include <map>
#include <sstream>
#include <utility>
#include <set>
#include <math.h>

#define pi acos(-1.0)
#define N 1000000

using namespace std;

struct list {
    int start;
    int end;
    int distance;
} a [100 * 100]; // vertex * vertex

int parent [100]; // total vertex

bool cmp (list p, list q)
{
    if ( p.distance < q.distance ) return true;
    return false;
}

void reset ()
{
    for ( int i = 0; i < 100; i++ )
        parent [i] = i;
}

int parentOf (int n)
{
    if ( n == parent [n] ) return n;
    return parent [n] = parentOf ( parent [n] );
}

int main ()
{
    int edges;
    scanf ("%d", &edges);

    reset ();

    int length_a = 0;

    for ( int i = 1; i <= edges; i++ ) {
        int v1, v2, dist;
        a [length_a].start = v1;
        a [length_a].end = v2;
        a [length_a++].distance = dist;
    }

    sort (a, a + length_a, cmp);

    int outputCost = 0;
    int selectedEdges = edges - 1;

    for ( int i = 0; i < length_a && selectedEdges; i++ ) {
        int p = parentOf (a [i].start);
        int q = parentOf (a [i].end);

        if ( p != q ) {
            parent [p] = q;
            selectedEdges--;
            outputCost += a [i].distance;
        }
    }

    printf ("%d\n", outputCost);

    return 0;
}
