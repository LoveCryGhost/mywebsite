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
//##### Calculation


//=========== [DA] Drawing & Alert ============================================
//##### Drawing

// h = plot(high)
// l = plot(low)
// fill(h, l, color=color.new(color.red,50), title="Fill", editable=false, fillgaps=true, show_last=10)


h = hline(30000)
l = hline(2500)
fill(h, l, color=color.new(color.red,50), title="Fill")


// h = plot(high > 25000? high:na)
// l = plot(low > 25000? low:na)
// fill(h, l, color=color.new(color.red,50), title="Fill", editable=false, fillgaps=true, show_last=10)



//##### Alert




