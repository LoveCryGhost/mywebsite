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
myTotalAwesomeColor1=color.red
myTotalAwesomeColor2=color.rgb(255,0,0, 90)
myTotalAwesomeColor3=color.new(color.yellow, 50)
myTotalAwesomeColor4= #ff0000
//##### Calculation


//=========== [DA] Drawing & Alert ============================================
//##### Drawing
//bgcolor(myTotalAwesomeColor1)
bgcolor(myTotalAwesomeColor2)
//bgcolor(myTotalAwesomeColor3)

plot(close, color=color.yellow)


//##### Alert




