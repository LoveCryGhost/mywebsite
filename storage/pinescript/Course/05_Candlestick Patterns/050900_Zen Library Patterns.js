//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Zen Library", shorttitle="Zen Library", overlay=true, precision=3)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
// Import Zen Library
import ZenAndTheArtOfTrading/ZenLibrary/2 as zen

// Detect patterns
bullish_ec  = zen.isBullishEC()
bearish_ec  = zen.isBearishEC()
hammer      = zen.isHammer()
star        = zen.isStar()
doji        = zen.isDoji()


//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plotshape(bullish_ec, style=shape.triangleup, color=color.green, location=location.belowbar, text="EC")
plotshape(bearish_ec, style=shape.triangledown, color=color.red, location=location.abovebar, text="EC")
plotshape(hammer, style=shape.triangleup, color=color.green, location=location.belowbar, text="Hammer")
plotshape(star, style=shape.triangledown, color=color.red, location=location.abovebar, text="Star")
plotshape(doji, style=shape.xcross, color=color.blue, location=location.abovebar, text="Doji")

//##### Alert

//##### Note




