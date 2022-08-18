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
// Import Zen Library
import ZenAndTheArtOfTrading/ZenLibrary/2 as zen

// Get user input
lookback    = input.int(title="Lookback", defval=7)
rsiLen      = input.int(title="RSI Length", defval=7)
rsiOB       = input.float(title="RSI Overbought", defval=80.0)
rsiOS       = input.float(title="RSI Oversold", defval=20.0)

//##### Functions
//##### Logic

// Get RSI value
rsi = ta.rsi(close, rsiLen)
rsiSell = rsi > rsiOB
rsiBuy  = rsi < rsiOS

// Detect candle patterns
bullEC = zen.isBullishEC()
bearEC = zen.isBearishEC()

// Detect buy and sell signals
buySignal  = bullEC and (rsiBuy or rsiBuy[1])
sellSignal = bearEC and (rsiSell or rsiSell[1])

//##### Calculation



//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
// Draw data to chart
plot(rsi, title="RSI", color=rsiBuy ? color.lime : rsiSell ? color.red : color.gray, linewidth=2)
hline(rsiOB, title="RSI Overbought", color=color.red)
hline(rsiOS, title="RSI Oversold", color=color.lime)
bgcolor(buySignal ? color.lime : sellSignal ? color.red : na, title="Trade Signal")

//##### Alert
// Trigger alerts
alertcondition(buySignal or sellSignal, title="RSI Signal", message="RSI Exhaustion Setup for {{ticker}} - RSI value = {{plot_0}}")

//##### Note




