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
// Get user input
periodK = input.int(title="%K Length", defval=14, minval=1)
smoothK = input.int(title="%K Smoothing", defval=1, minval=1)
periodD = input.int(title="%D Smoothing", defval=3, minval=1)
upperBand = input.int(title="Upper Band", defval=80)
lowerBand = input.int(title="Lower Band", defval=20)

//##### Functions
//##### Logic
// Calculate stochastic values
k = ta.sma(ta.stoch(close, high, low, periodK), smoothK)
d = ta.sma(k, periodD)

//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
// Draw signals
bgcolor(longSignal ? color.green : na)
bgcolor(shortSignal ? color.red : na)

// Draw data to chart
plot(k, title="%K", color=#2962FF)
plot(d, title="%D", color=#FF6D00)
h1 = hline(upperBand, "Upper Band", color=#787B86)
h2 = hline(lowerBand, "Lower Band", color=#787B86)
fill(h1, h2, color=color.rgb(33, 150, 243, 90), title="Background")

//##### Alert
// Trigger alerts


//##### Note
//r=Relative



