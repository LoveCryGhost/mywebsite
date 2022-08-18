//=========== [DVD] Description, Version & Destination =================================
//##### Description


//##### Version
//@version=5

//##### Destination
indicator(title="Test Over-上-2", shorttitle="Test Over-上-2", overlay=true, precision=0)


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//決定平均線, 簡單移動平均線(SMA) 或 指數移動平均線(EMA)
//var ema_boolena = input.bool(true, title="Exponential MA")
ema_boolena = true


//資料來源? 開高收低
//source_string = input.source(title="Source", defval=close)
source_string = close

//決定平均線, 簡單移動平均線(SMA) 或 指數移動平均線(EMA)
ma05 = ema_boolena ? ta.ema(source_string, 05) : ta.sma(source_string, 05)
ma10 = ema_boolena ? ta.ema(source_string, 10) : ta.sma(source_string, 10)
ma15 = ema_boolena ? ta.ema(source_string, 15) : ta.sma(source_string, 15)
ma20 = ema_boolena ? ta.ema(source_string, 20) : ta.sma(source_string, 20)
ma25 = ema_boolena ? ta.ema(source_string, 25) : ta.sma(source_string, 25)
ma30 = ema_boolena ? ta.ema(source_string, 30) : ta.sma(source_string, 30)
ma35 = ema_boolena ? ta.ema(source_string, 35) : ta.sma(source_string, 35)
ma40 = ema_boolena ? ta.ema(source_string, 40) : ta.sma(source_string, 40)
ma45 = ema_boolena ? ta.ema(source_string, 45) : ta.sma(source_string, 45)
ma50 = ema_boolena ? ta.ema(source_string, 50) : ta.sma(source_string, 50)
ma55 = ema_boolena ? ta.ema(source_string, 55) : ta.sma(source_string, 55)
ma60 = ema_boolena ? ta.ema(source_string, 60) : ta.sma(source_string, 60)
ma65 = ema_boolena ? ta.ema(source_string, 65) : ta.sma(source_string, 65)
ma70 = ema_boolena ? ta.ema(source_string, 70) : ta.sma(source_string, 70)
ma75 = ema_boolena ? ta.ema(source_string, 75) : ta.sma(source_string, 75)
ma80 = ema_boolena ? ta.ema(source_string, 80) : ta.sma(source_string, 80)
ma85 = ema_boolena ? ta.ema(source_string, 85) : ta.sma(source_string, 85)
ma90 = ema_boolena ? ta.ema(source_string, 90) : ta.sma(source_string, 90)
ma95 = ema_boolena ? ta.ema(source_string, 95) : ta.sma(source_string, 95)
ma100 = ema_boolena ? ta.ema(source_string, 100) : ta.sma(source_string, 100)

//顏色
colorLightGreen = #33CC66 //color.lime
colorDarkGreen = #009933 //color.green
colorLightRed =  #FF3300 //color.red
colorDarkRed = #660000 //color.maroon
// colorGray =  #969696 //color.gray #969696

//##### Functions
//亮色為強買盤/賣盤, 暗色為弱買盤/賣盤
transperency = 0
maColor(ma, maRef) =>
ta.change(ma)>=0 and ma05>maRef ? color.new(colorLightGreen, transperency)
    : ta.change(ma)>=0 and ma05<maRef ? color.new(colorDarkGreen, transperency)
    : ta.change(ma)<0  and ma05>maRef ? color.new(colorDarkRed, transperency)
    : ta.change(ma)<0 and ma05<maRef ? color.new(colorLightRed, transperency)
    //: colorGray
    : ma05>maRef ? color.new(colorDarkRed, transperency) : color.new(colorLightRed, transperency)


//##### Logic
//##### Calculation
var mybar = array.new_string(last_bar_index+1,"")

colorResult = ""
colorDetect(colorDetect, transperency) =>
switch colorDetect
    color.new(colorLightGreen, transperency) => "colorLightGreen"
        color.new(colorDarkGreen, transperency) => "colorDarkGreen"
        color.new(colorLightRed, transperency) => "colorLightRed"
        color.new(colorDarkRed, transperency) => "colorDarkRed"
    => "N/A"


//=========== [DAN] Drawing & Alert ============================================

//##### Drawing

        if colorDetect(maColor(ma05, ma100),transperency) == colorDetect(maColor(ma10, ma100),transperency) and
        colorDetect(maColor(ma10, ma100),transperency) == colorDetect(maColor(ma15, ma100),transperency) and
        colorDetect(maColor(ma15, ma100),transperency) == colorDetect(maColor(ma20, ma100),transperency) and
        colorDetect(maColor(ma20, ma100),transperency) == colorDetect(maColor(ma25, ma100),transperency) and
        colorDetect(maColor(ma25, ma100),transperency) == colorDetect(maColor(ma30, ma100),transperency) and
        colorDetect(maColor(ma30, ma100),transperency) == colorDetect(maColor(ma35, ma100),transperency) and
        colorDetect(maColor(ma35, ma100),transperency) == colorDetect(maColor(ma40, ma100),transperency) and
        colorDetect(maColor(ma40, ma100),transperency) == colorDetect(maColor(ma45, ma100),transperency) and
        colorDetect(maColor(ma45, ma100),transperency) == colorDetect(maColor(ma50, ma100),transperency) and
        colorDetect(maColor(ma50, ma100),transperency) == colorDetect(maColor(ma55, ma100),transperency) and
        colorDetect(maColor(ma55, ma100),transperency) == colorDetect(maColor(ma60, ma100),transperency) and
        colorDetect(maColor(ma60, ma100),transperency) == colorDetect(maColor(ma65, ma100),transperency) and
        colorDetect(maColor(ma65, ma100),transperency) == colorDetect(maColor(ma70, ma100),transperency) and
        colorDetect(maColor(ma70, ma100),transperency) == colorDetect(maColor(ma75, ma100),transperency) and
        colorDetect(maColor(ma75, ma100),transperency) == colorDetect(maColor(ma80, ma100),transperency) and
        colorDetect(maColor(ma80, ma100),transperency) == colorDetect(maColor(ma85, ma100),transperency) and
        colorDetect(maColor(ma85, ma100),transperency) == colorDetect(maColor(ma90, ma100),transperency)
        array.set(mybar, bar_index, colorDetect(maColor(ma05, ma100),transperency))
    else
        array.set(mybar, bar_index, na)

// if array.get(mybar, bar_index)==na
//     label.new(bar_index, high, textcolor=color.white, text="x", style=label.style_label_up)

        if bar_index-1 > 0
            // label.new(bar_index, high, textcolor=color.white, text=array.get(mybar, bar_index-1) + ":" + array.get(mybar, bar_index), style=label.style_label_up)
            if array.get(mybar, bar_index-1) == "colorLightRed" and array.get(mybar, bar_index) == "colorDarkGreen"
        label.new(bar_index, low, textcolor=color.white, text="強買", style=label.style_label_up, color=color.new(colorLightGreen,0))

        if array.get(mybar, bar_index-1) == "colorLightGreen" and array.get(mybar, bar_index) == "colorLightRed"
        label.new(bar_index, low, textcolor=color.white, text="強賣", style=label.style_label_up, color=color.new(colorDarkGreen,0))
// if array.get(mybar, bar_index-2) == "colorDarkGreen" or array.get(mybar, bar_index-1) == "colorLightGreen"
// label.new(bar_index, high, textcolor=color.white, text="強買x", style=label.style_label_up)

//##### Alert
// if barstate.islast
//     var colorResult="XXX"
//     // if maColor(ma05, ma100) == color.new(colorLightGreen, transperency)
//     //     colorResult := "colorLightGreen"
//     // if maColor(ma05, ma100) == color.new(colorDarkGreen, transperency)
//     //     colorResult := "colorDarkGreen"
//     // if maColor(ma05, ma100) == color.new(colorLightRed, transperency)
//     //     colorResult := "colorLightRed"
//     // if maColor(ma05, ma100) == color.new(colorDarkRed, transperency)
//     //     colorResult := "colorDarkRed"

// plot( 05, histbase=00, color=maColor(ma05, ma100), style=plot.style_columns, title="MMA05", linewidth=1, editable=false, display=display.status_line)
// plot( 10, histbase=05, color=maColor(ma10, ma100), style=plot.style_columns, title="MMA10", linewidth=1, editable=false)
// plot( 15, histbase=10, color=maColor(ma15, ma100), style=plot.style_columns, title="MMA15", linewidth=1, editable=false)
// plot( 20, histbase=15, color=maColor(ma20, ma100), style=plot.style_columns, title="MMA20", linewidth=1, editable=false)
// plot( 25, histbase=20, color=maColor(ma25, ma100), style=plot.style_columns, title="MMA25", linewidth=1, editable=false)

// plot( 30, histbase=25, color=maColor(ma30, ma100), style=plot.style_columns, title="MMA30", linewidth=1, editable=false)
// plot( 35, histbase=30, color=maColor(ma35, ma100), style=plot.style_columns, title="MMA35", linewidth=1, editable=false)
// plot( 40, histbase=35, color=maColor(ma40, ma100), style=plot.style_columns, title="MMA40", linewidth=1, editable=false)
// plot( 45, histbase=40, color=maColor(ma45, ma100), style=plot.style_columns, title="MMA45", linewidth=1, editable=false)
// plot( 50, histbase=45, color=maColor(ma50, ma100), style=plot.style_columns, title="MMA50", linewidth=1, editable=false)

// plot( 55, histbase=50, color=maColor(ma55, ma100), style=plot.style_columns, title="MMA55", linewidth=1, editable=false)
// plot( 60, histbase=55, color=maColor(ma60, ma100), style=plot.style_columns, title="MMA60", linewidth=1, editable=false)
// plot( 65, histbase=60, color=maColor(ma65, ma100), style=plot.style_columns, title="MMA65", linewidth=1, editable=false)
// plot( 70, histbase=65, color=maColor(ma70, ma100), style=plot.style_columns, title="MMA70", linewidth=1, editable=false)

// plot( 75, histbase=70, color=maColor(ma75, ma100), style=plot.style_columns, title="MMA75", linewidth=1, editable=false)
// plot( 80, histbase=75, color=maColor(ma80, ma100), style=plot.style_columns, title="MMA80", linewidth=1, editable=false)
// plot( 85, histbase=80, color=maColor(ma85, ma100), style=plot.style_columns, title="MMA85", linewidth=1, editable=false)
// plot( 90, histbase=85, color=maColor(ma90, ma100), style=plot.style_columns, title="MMA90", linewidth=1, editable=false)
// plot( 95, histbase=90, color=maColor(ma90, ma100), style=plot.style_columns, title="MMA95", linewidth=1, editable=false)
// plot( 100, histbase=95, color=maColor(ma90, ma100), style=plot.style_columns, title="MMA100", linewidth=1, editable=false)
        
