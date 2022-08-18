//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Getting User Inputs", shorttitle="User Inputs", overlay=false)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
// Import libraries
import ZenAndTheArtOfTrading/ZenLibrary/2 as zen

// Get user input
vwapType = input.string(title="VWAP Type", defval="VWAP", options=["VWAP", "VWMA"])
vwmaLength = input.int(title="VWMA Length", defval=20)

// Get VWAP
vwapValue = vwapType == "VWAP" ? ta.vwap : ta.vwma(hlc3, vwmaLength)

//##### Functions
//##### Logic
// Get VWAP
vwapValue = vwapType == "VWAP" ? ta.vwap : ta.vwma(hlc3, vwmaLength)

// Detect VWAP Filter
bull_filter = close > vwapValue and close[1] > vwapValue
bear_filter = close < vwapValue and close[1] < vwapValue

// Prepare filters
swingLow  = low == ta.lowest(low, 4) or low[1] == ta.lowest(low, 4)
swingHigh = high == ta.highest(high, 4) or high[1] == ta.highest(high, 4)

// Detect engulfing candles
bull_ec = zen.isBullishEC() and swingLow
bear_ec = zen.isBearishEC() and swingHigh

// Detect valid trading signals
longSignal  = bull_filter and bull_ec
shortSignal = bear_filter and bear_ec

//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
// Draw signals to the chart
plot(vwapValue, color=close > vwapValue ? color.green : color.red, linewidth=2)
plotshape(longSignal, style=shape.triangleup, color=color.green, location=location.belowbar)
plotshape(shortSignal, style=shape.triangledown, color=color.red, location=location.abovebar)



//##### Alert
// Trigger alerts
alertcondition(longSignal or shortSignal, title="VWAP Alert!", message="VWAP Alert For {{ticker}}")


//##### Note




