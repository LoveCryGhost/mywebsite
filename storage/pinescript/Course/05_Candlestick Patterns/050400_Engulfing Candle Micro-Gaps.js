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
pointAllowance = input.int(title="Point Allowance", defval=0, tooltip="Maximum gap allowed in points on engulfing candles")

//##### Functions
//##### Logic

swingHigh = high == ta.highest(high, 10) or high[1] == ta.highest(high, 10)
swingLow = low == ta.lowest(low, 10) or low[1] == ta.lowest(low, 10)

ema = ta.ema(close, 50)


//Gap Allowance
var allowance = syminfo.mintick * pointAllowance // mintick = 最小單位
//牛市吞滅型態
bull_ec =
    (close[1] < open[1] and open <= (close[1] + allowance)) //吞滅 + 允收
and close >= (open[1] + allowance)
and swingHigh and close > ema

//熊市吞滅型態
bear_ec =
    (close[1] > open[1] and (open <= close[1] )) //吞滅 + 允收
and close <= (open[1] + allowance)
and swingLow and close < ema




//##### Calculation


//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plotshape(bull_ec, style=shape.triangleup, location=location.belowbar, color=color.green, size=size.small)
plotshape(bear_ec, style=shape.triangledown, location=location.abovebar, color=color.red, size=size.small)
plot(ema)

//##### Alert

//##### Note




