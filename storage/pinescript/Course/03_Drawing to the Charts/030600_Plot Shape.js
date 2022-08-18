//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator( title="Plot", shorttitle="User Inputs", overlay=true, precision=8)
//,precision=8, scale=scale.right ,timeframe="D"


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
higherClose = close > high[1]
lowerClose = close < close[1]
//##### Calculation


//=========== [DA] Drawing & Alert ============================================
//##### Drawing
plotshape(
    higherClose
    , title="Higher Close"
    , style=shape.triangleup
    , location=location.belowbar
    , offset=3, text="HC"
    , textcolor=color.white
    , size=size.auto
    , show_last=100
)
plotshapex(lowerClose, title="Lower Close", style=shape.arrowdown, location=location.abovebar)
plotshape(lowerClose, title="Lower Close", style=shape.labelup, location=location.bottom)



//##### Alert




