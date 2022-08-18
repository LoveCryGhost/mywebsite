//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Piercing Line & Dark Cloud", shorttitle="貫穿型態 & 烏雲罩頂", overlay=true, precision=3)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
// Calculate 50% mark of previous bar
piercingLine = (low[1] - high[1]) * 0.5 + high[1]

// Analyze filters
rsi = ta.rsi(close, 7)
bullishFilters = rsi < 30 or rsi[1] < 30
bearishFilters = rsi > 70 or rsi[1] > 70

// Detect piercing line & dark cloud
bpc = close[1] < open[1] and open < close[1] and close >= piercingLine and close < high[1] and close > open and bullishFilters
dcc = close[1] > open[1] and open > close[1] and close <= piercingLine and close > low[1] and close < open and bearishFilters



//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plotshape(bpc, style=shape.triangleup, location=location.belowbar, color=color.green, size=size.small)
plotshape(dcc, style=shape.triangledown, location=location.abovebar, color=color.red, size=size.small)

//##### Alert

//##### Note




