//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="", shorttitle="", overlay=false)

//=========== [IC] Inputs & Functions & Calculation=================================
//##### Inputs
// Import library
import ZenAndTheArtOfTrading/ZenLibrary/3 as zen

// Get user input
atrMulti   = input.float(title="ATR SL Multiplier", defval=1.0)
riskReward = input.float(title="Risk:Reward", defval=1.0)

//##### Calculation
// Detect pattern(s)
hammer = zen.isHammer()
star   = zen.isStar()

// Check filters
ema = ta.ema(close, 50)
atr = ta.atr(14)
readyToTrade = not na(ema) and not na(atr)

// Combine patterns & filters
validLong  = readyToTrade and hammer and close > ema
validShort = readyToTrade and star and close < ema

// Calculate long stops & targets
longStop = low - (atr * atrMulti) // Stop loss price
longStopDistance = close - longStop // Stop distance in pips
longTarget = close + (longStopDistance * riskReward) // Target price

// Calculate short stops & targets
shortStop = high + (atr * atrMulti) // Stop loss price
shortStopDistance = shortStop - close // Stop distance in pips
shortTarget = close - (shortStopDistance * riskReward) // Target price

// Save stops & targets
var float t_stop = na
var float t_target = na
if validLong or validShort
t_stop := validLong ? longStop : shortStop
t_target := validLong ? longTarget : shortTarget




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
// Draw signals & data
plot(ema, title="EMA")
plotshape(validLong, style=shape.triangleup, color=color.green, location=location.belowbar, text="Long", title="Long")
plotshape(validShort, style=shape.triangledown, color=color.red, location=location.abovebar, text="Short", title="Short")

// Draw stops & targets
plot(validLong or validShort ? t_stop : na, style=plot.style_linebr, color=color.red, title="Trade Stop")
plot(validLong or validShort ? t_target : na, style=plot.style_linebr, color=color.green, title="Trade Target")
//##### Alert
//##### Note



