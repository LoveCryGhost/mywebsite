//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Getting User Inputs", shorttitle="User Inputs", overlay=false)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
lessThan_1 = 1 < 2  // return true or false
lessThan_2 = close < low[1]
lessThanOrEqualTo = close <= low[1]
notEqual = close != low[1]
equalt = close == open

greaterThan = close > low[1]
greaterThanOrEqualTo = close >= low[1]

isTextEqual_1 = "X" == "Y"
isTextEqual_2 = "X" != "Y"



//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plot(na)

//##### Alert

//##### Note




