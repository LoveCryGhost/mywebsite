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
inside = high < high[1] and low > low[1]

//##### Calculation


//=========== [DA] Drawing & Alert ============================================
//##### Drawing
bgcolor(inside? color.new(color.blue, 80): na, title="bg Color", offset=-1, editable=true, show_last=10)


//##### Alert




