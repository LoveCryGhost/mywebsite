//=========== [DVD] Description, Version & Destination =================================
//##### Description
//##### Version
//@version=5

//##### Destination
indicator(title="Bar States", shorttitle="", overlay=true)


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions

//Logic
barStateConfirmed = barstate.isconfirmed
plot(barStateConfirmed)
//##### Calculation


//=========== [DAN] Drawing & Alert ============================================
//##### Drawing


//##### Alert
//##### Note
