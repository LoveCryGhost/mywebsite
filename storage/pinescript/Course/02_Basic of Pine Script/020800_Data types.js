//=========== [DVD] Description, Version & Destination =================================
//##### Description
//This source code is subject to the terms of the Mozilla Public License 2.0 at https://mozilla.org/MPL/2.0/
//© thriftyDingo63711
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Indicator 範本", shorttitle="i範本", overlay=false, precision=5, scale=scale.right, timeframe="D")
//precision 精度 => 座標軸的小數點位數
//scale 座標軸 => 座標軸的顯示的位置, 左邊或右邊或不顯示
//timeframe 時框 => D,W,M,S,Y
//library(title="Indicator 範本", shorttitle="i範本", overlay=true, precision=1)
//strategy(title="Indicator 範本", shorttitle="i範本", overlay=true, precision=1)


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
integerType = 20
floatType = 20.2
floatTypeE = 0.1e2
boolenType = true
colorType = color.red
colorType := color.rgb(255, 0, 0, 100) //100為透明率, :=overwrite
stringType = "Text or Symbol"

//##### Functions


//##### Logic
if boolenType
    colorType := color.yellow

//##### Calculation
candeOpen = open
candeClose = close
candehigh = high
candeLow = low

candleSize = high - low
candleSize_10 = high[10] - low[10]
candleSize_Ratio = candleSize / candleSize_10


//=========== [DA] Drawing & Alert ============================================
//##### Drawing
plot(candleSize, color=color.orange)
plot(candleSize_Ratio, color=colorType)


//##### Alert




