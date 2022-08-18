// 描板目輸畫提
//# Description
//This source code is subject to the terms of the Mozilla Public License 2.0 at https://mozilla.org/MPL/2.0/
//© thriftyDingo63711
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//# Version
//@version=5


//# Purpose
indicator(title="Indicator 範本", shorttitle="i範本", overlay=true, precision=1)
//library(title="Indicator 範本", shorttitle="i範本", overlay=true, precision=1)
//strategy(title="Indicator 範本", shorttitle="i範本", overlay=true, precision=1)


//# User Inputs
//Get User Inputs 取得使用者設定參數
ipt_integer = input.int(title="整數", defval=3, minval=1, maxval=10, step=1)
ipt_float = input.float(title="小數", defval=0.3, minval=0.1, maxval=10, step=0.5)
ipt_bool = input.bool(title="布林", defval=true)
ipt_string = input.string(title="字串", defval="my string")


//# Drawing
//Plot
plot(close, linewidth=5, color=color.yellow)

//Plotshape
//plotshape(true, text="Hello World")
plotshape(barstate.islast, text="Hello World")


//# Alert






