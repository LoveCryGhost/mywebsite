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
hc = close > high[1]
lc = close < low[1]


//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plotshape(hc, style=shape.triangleup, location=location.belowbar, color=color.green)
plotshape(lc, style=shape.triangledown, location=location.abovebar, color=color.red)

//##### Alert

//##### Note




