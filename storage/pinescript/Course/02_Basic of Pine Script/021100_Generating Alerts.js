//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Getting User Inputs", shorttitle="User Alert", overlay=false)



//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
hc = close > high[1]
lc = close < high[1]

//##### Calculation


//=========== [DA] Drawing & Alert ============================================


//##### Alert
if hc
    alert(message="高收HC ==> This bar closed higher then privios bar:" + str.tostring(close), freq=alert.freq_once_per_bar_close)

if lc
    alert(message="低收LC ==> This bar closed lower then privios bar:" + str.tostring(close), freq=alert.freq_once_per_bar)

//alertcondition(hc, "Higher Close Alert", "Thhis bar closed than previos bar: " + str.tostring(close)) //錯誤
alertcondition(hc, "Higher Close Alert", "This bar closed than previos bar: {{close}}" )
alertcondition(hc or lc, "HC/LC Alert", "This bar closed than previos bar: {{close}} on {{ticker}}" ) //ticker 是交易幣種, ex:SHIBUSDT

//##### Drawing
plot(close)

