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
if barstate.islast
    lable.new(bar_index, high, text="Close"+ str.tostring(close))
//##### Calculation


//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
//##### Alert
//##### Note
