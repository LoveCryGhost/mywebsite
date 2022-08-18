//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Engulfing Candles[吞滅型態]", shorttitle="User Inputs", overlay=true)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic

//牛市吞滅型態
bull_ec = close[1] < open[1] and open <= close[1] and close >= open[1]

//熊市吞滅型態
bear_ec = close[1] > open[1] and open <= close[1] and close <= open[1]


//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plotshape(bull_ec, style=shape.triangleup, location=location.belowbar, color=color.green)
plotshape(bear_ec, style=shape.triangledown, location=location.abovebar, color=color.red)

//##### Alert

//##### Note




