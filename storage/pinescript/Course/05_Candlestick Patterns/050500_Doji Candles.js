//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Doji Candles", shorttitle="Doji", overlay=true)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
maxWickSize = input.float(title="Max Wick Size", defval=2.0)
maxBodySize = input.float(title="Max Body Size", defval=0.05)

//##### Functions
//##### Logic
topWickSize = high - (close > open ? close : open) //上燈芯
bottomWickSize =  (close < open ? open : close) - low //下燈芯
bodyPercent = math.abs(open-close) / (high-low) //實體比例

doji = topWickSize <= bottomWickSize * maxWickSize
and bottomWickSize <= topWickSize * maxWickSize
and bodyPercent <= maxBodySize

swingHigh = high == ta.highest(high, 10)
swingLow  = low == ta.lowest(low, 10)

dojiBull = doji and swingLow
dojiBear = doji and swingHigh
//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plotshape(dojiBull, style=shape.triangleup, location=location.belowbar, color=color.green, size=size.small)
plotshape(dojiBear, style=shape.triangledown, location=location.abovebar, color=color.red, size=size.small)

//##### Alert

//##### Note




