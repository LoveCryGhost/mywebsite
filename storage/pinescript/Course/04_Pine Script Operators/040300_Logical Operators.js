//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Getting User Inputs", shorttitle="User Inputs", overlay=true)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
bearishEC = close <= open[1] and close[1] > open[1]
swingHigh = high == ta.highest(high, 5)

//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plotshape(bearishEC and swingHigh)

//##### Alert

//##### Note
