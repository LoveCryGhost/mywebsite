//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Hammer & Shooting", shorttitle="Hammer & Shooting", overlay=true)


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
fibLevel    = input.float(title="Fib Level", defval= 0.33)
colorFilter = input.bool(title="Color Filter", defval=false)

//##### Functions
//##### Logic
//算出 Fibonacci Y-axis 值
bullFib = high - (high-low) * fibLevel
bearFib = low + (high - low) * fibLevel

//實體的高低點
bodyLowest = close > open ? open : close
bodyHighest = close > open ? close : open

//判別是否為流星,鐵鎚
shootingCandle = bodyLowest >= bullFib and (not colorFilter or close > open)
hammerCandle = bodyHighest <= bearFib and (not colorFilter or close < open)

//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plotshape(hammerCandle, style=shape.triangleup, location=location.belowbar, color=color.green)
plotshape(shootingCandle, style=shape.triangledown, location=location.abovebar, color=color.red)

//##### Alert

//##### Note

