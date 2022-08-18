//===========# Description===========
//This source code is subject to the terms of the Mozilla Public License 2.0 at https://mozilla.org/MPL/2.0/
//© thriftyDingo63711
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//===========# Version===========
//@version=5


//===========# Purpose===========
indicator(title="Indicator 範本", shorttitle="i範本", overlay=false, precision=5, scale=scale.right, timeframe="D")
//precision 精度 => 座標軸的小數點位數
//scale 座標軸 => 座標軸的顯示的位置, 左邊或右邊或不顯示
//timeframe 時框 => D,W,M,S,Y

//library(title="Indicator 範本", shorttitle="i範本", overlay=true, precision=1)
//strategy(title="Indicator 範本", shorttitle="i範本", overlay=true, precision=1)


//===========# User Inputs===========
//Get User Inputs 取得使用者設定參數
// ipt_integer = input.int(title="整數", defval=3, minval=1, maxval=10, step=1)
// ipt_float = input.float(title="小數", defval=0.3, minval=0.1, maxval=10, step=0.5)
// ipt_bool = input.bool(title="布林", defval=true)
// ipt_string = input.string(title="字串", defval="my string")

//===========#Calculating===========
rsi = ta.rsi(close, 14)

//引用函數庫
//import ZenLibrary as zen

//===========# Drawing===========
//Plot
plot(rsi, linewidth=2, color=color.green)


//===========# Alert===========

