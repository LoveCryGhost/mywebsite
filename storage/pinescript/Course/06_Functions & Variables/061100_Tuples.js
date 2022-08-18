//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Tuples", shorttitle="Tuples", overlay=false)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
tuples() =>
a=1
b=2
c=3
    [a,b,c]

    [a,b,c] = tuples()
//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plot(a)
plot(b)
plot(c)

//##### Alert

//##### Note




