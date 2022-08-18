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
maLength = input.int(title="MA Length", defval=100)
rvolTrigger = input.float(title="RVOL Trigger", defval=2.5)

//##### Functions
//##### Logic
// Get volume data
ma = ta.sma(volume, maLength)
rvol = volume / ma

// Generate RVOL signal
rvolAlert = rvol >= rvolTrigger
volColor = rvolAlert ? color.aqua : close > open ? color.green : color.red
//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing


// Draw data to chart
plot(volume, title="Volume", style=plot.style_columns, color=volColor)
plot(ma, title="MA", color=color.black)
plot(ma * rvolTrigger, title="RVOL Threshold", color=color.blue)

//##### Alert
// Trigger alerts
alertcondition(rvolAlert, title="RVOL Alert!", message="RVOL Alert For {{ticker}}")


//##### Note
//r=Relative



