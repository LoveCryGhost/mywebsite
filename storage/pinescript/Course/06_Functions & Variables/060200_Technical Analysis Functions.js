//=========== [DVD] Description, Version & Destination =================================
//##### Description
//##### Version
//@version=5

//##### Destination
indicator(title="", shorttitle="", overlay=false)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
[macdLine, sigLine, histLine] = ta.macd(close, 12, 26, 9)
//##### Calculation


//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plot(macdLine)
plot(sigLine)
plot(histLine)

//##### Alert
//##### Note
