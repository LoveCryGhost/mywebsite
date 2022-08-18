//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Indicator 範本", shorttitle="i範本", overlay=false, precision=8, scale=scale.right, timeframe="D")



//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
int greenCandleCount = 1 //每個迴圈都重新定義
var greenCandleCount_Acc = 1 //全局變數


//##### Functions


//##### Logic
if close > open
    greenCandleCount := greenCandleCount +1

if close > open
    greenCandleCount_Acc := greenCandleCount_Acc +1

//##### Calculation




//=========== [DA] Drawing & Alert ============================================
//##### Drawing
plot(greenCandleCount, color=color.red)
plot(greenCandleCount_Acc, color=color.yellow)
plot(bar_index, color=color.blue)

plotshape(barstate.islast, "xxxx" )

//##### Alert




