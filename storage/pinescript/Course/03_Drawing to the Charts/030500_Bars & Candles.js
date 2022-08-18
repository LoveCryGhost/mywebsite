//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator( title="Plot", shorttitle="User Inputs", overlay=false, precision=8)
//,precision=8, scale=scale.right ,timeframe="D"


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
c = close > open ? color.green : color.red
//##### Calculation


//=========== [DA] Drawing & Alert ============================================
//##### Drawing
plotcandle(open, high, low, close, color=c)
// plotbar(open, high, low, close, color=c)


//##### Alert




