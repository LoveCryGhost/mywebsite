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

plot(close, title="Our Plot", color=color.new(color.red, 50), linewidth=2, style=plot.style_line)
//plot.style_line
//plot.style_linebr
//plot.style_stepline
//plot.style_stepline_diamond
//plot.style_cross
//plot.style_area
//plot.style_histogram
//plot.style_areabr
//plot.style_columns
//plot.style_circles



//plot(close, title="Our Plot", color=color.red, linewidth=2, style=plot.style_line, offset=10)
//offset > 10 => 右移
//offset < 10 => 左移


//plot(close, title="Our Plot", color=color.red, linewidth=2, style=plot.style_columns, trackprice=true, histbase=0.00001160)
//histbase 限制
//plot.style_histogram, plot.style_columns 或 plot.style_area


//plot(close, title="Our Plot", color=color.red, linewidth=2, style=plot.style_columns, editable=false, show_last=10, display=display.none)
//editable= true / false 可否編輯
//show_last = 整數 => 顯示最後的幾筆資料
// display=display.none => 是否顯示, 通常拿來Debug


plot(na)




//##### Alert




