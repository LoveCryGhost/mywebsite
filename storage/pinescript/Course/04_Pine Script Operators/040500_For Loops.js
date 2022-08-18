//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="For Loops", shorttitle="User Inputs", overlay=false)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
lookback = input.int(title="lookback", defval=9)
//##### Functions
//##### Logic
greenCandles = 0
for i = 1 to lookback by 1
if close[i] > open[i]
    greenCandles := greenCandles + 1
continue

if close[i] > high[i+1]
    break

//##### Calculation


//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plot(greenCandles)

//##### Alert

//##### Note






