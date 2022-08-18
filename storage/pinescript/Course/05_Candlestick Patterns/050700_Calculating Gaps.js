//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Calculating Gaps", shorttitle="跳空", overlay=false, precision=3)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic

//跳空百分比
gapClose = math.abs(((open - close[1]) / open) * 100)
gapDistance = low > high[1] ? ((low - high[1]) / low) * 100 : ((high - low[1]) / high) * 100




//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plot(gapClose, color=color.purple)
plot(gapDistance, color=color.white)

//##### Alert

//##### Note




