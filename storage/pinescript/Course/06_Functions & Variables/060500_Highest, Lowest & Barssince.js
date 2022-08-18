//=========== [DVD] Description, Version & Destination =================================
//##### Description
//##### Version
//@version=5

//##### Destination
indicator(title="Highest, Lowest & Barssince", shorttitle="", overlay=true)


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
// highest = ta.highest(high, 50)
// brekout = close > highest[1]
// bgcolor(brekout? color.green: na)
// plot(highest)


// rsi = ta.rsi(close, 14)
// lowest = ta.lowest(rsi, 50)
// plot(lowest)

lowestLowBarCount = ta.lowestbars(50)
plot(lowestLowBarCount)



//##### Calculation


//=========== [DAN] Drawing & Alert ============================================
//##### Drawing


//##### Alert
//##### Note
