//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="While Loops", shorttitle="User Inputs", overlay=false)


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
counter = 0

//##### Functions
//##### Logic
while counter < 10
    counter := counter + 1
if counter >=100
    break
//##### Calculation


//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plot(counter)

//##### Alert

//##### Note






