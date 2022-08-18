//=========== [DVD] Description, Version & Destination =================================
//##### Description
//##### Version
//@version=5

//##### Destination
indicator(title="Highest, Lowest & Barssince", shorttitle="", overlay=true)


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions

session = input.session(title="Time Session to Highlight", defval="0900-1800")

isInSession(_sess) => not na(time(timeframe.period, _sess))

bgcolor(isInSession(session) ? color.new(color.red,75) : na)


//##### Calculation


//=========== [DAN] Drawing & Alert ============================================
//##### Drawing


//##### Alert
//##### Note
