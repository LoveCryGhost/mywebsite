// © andylinx
// entry points, up/down trends and reversals

study(title="Andy-EMA-Old", shorttitle="Andy-EMA-Old", precision=0)

exponential = input(true, title="Exponential MA")
src = close

ma05 = exponential ? ema(src, 05) : sma(src, 05)
ma10 = exponential ? ema(src, 10) : sma(src, 10)
ma15 = exponential ? ema(src, 15) : sma(src, 15)
ma20 = exponential ? ema(src, 20) : sma(src, 20)
ma25 = exponential ? ema(src, 25) : sma(src, 25)
ma30 = exponential ? ema(src, 30) : sma(src, 30)
ma35 = exponential ? ema(src, 35) : sma(src, 35)
ma40 = exponential ? ema(src, 40) : sma(src, 40)
ma45 = exponential ? ema(src, 45) : sma(src, 45)
ma50 = exponential ? ema(src, 50) : sma(src, 50)
ma55 = exponential ? ema(src, 55) : sma(src, 55)
ma60 = exponential ? ema(src, 60) : sma(src, 60)
ma65 = exponential ? ema(src, 65) : sma(src, 65)
ma70 = exponential ? ema(src, 70) : sma(src, 70)
ma75 = exponential ? ema(src, 75) : sma(src, 75)
ma80 = exponential ? ema(src, 80) : sma(src, 80)
ma85 = exponential ? ema(src, 85) : sma(src, 85)
ma90 = exponential ? ema(src, 90) : sma(src, 90)
ma95 = exponential ? ema(src, 95) : sma(src, 95)
ma100 = exponential ? ema(src, 100) : sma(src, 100)

//顏色
colorLightGreen = #33CC66 //color.lime
colorDarkGreen = #009933 //color.green
colorLightRed =  #FF3300 //color.red
colorDarkRed = #660000 //color.maroon
colorGray =  #969696 //color.gray #969696


maColor(ma, maRef) =>
change(ma)>=0 and ma05>maRef ? color(colorLightGreen,70)
    : change(ma)<0  and ma05>maRef ? color(colorDarkRed,70)
    : change(ma)<=0 and ma05<maRef ? color(colorLightRed,70)
    : change(ma)>=0 and ma05<maRef ? color(colorDarkGreen,70)
    : colorGray


plot( 05, color=maColor(ma05, ma100), style=columns, title="MMA05", linewidth=2, histbase=00)
plot( 10, color=maColor(ma10, ma100), style=columns, title="MMA10", linewidth=2, histbase=05)
plot( 15, color=maColor(ma15, ma100), style=columns, title="MMA15", linewidth=2, histbase=10)
plot( 20, color=maColor(ma20, ma100), style=columns, title="MMA20", linewidth=2, histbase=15)
plot( 25, color=maColor(ma25, ma100), style=columns, title="MMA25", linewidth=2, histbase=20)
plot( 30, color=maColor(ma30, ma100), style=columns, title="MMA30", linewidth=2, histbase=25)
plot( 35, color=maColor(ma35, ma100), style=columns, title="MMA35", linewidth=2, histbase=30)
plot( 40, color=maColor(ma40, ma100), style=columns, title="MMA40", linewidth=2, histbase=35)
plot( 45, color=maColor(ma45, ma100), style=columns, title="MMA45", linewidth=2, histbase=40)
plot( 50, color=maColor(ma50, ma100), style=columns, title="MMA50", linewidth=2, histbase=45)
plot( 55, color=maColor(ma55, ma100), style=columns, title="MMA55", linewidth=2, histbase=50)
plot( 60, color=maColor(ma60, ma100), style=columns, title="MMA60", linewidth=2, histbase=55)
plot( 65, color=maColor(ma65, ma100), style=columns, title="MMA65", linewidth=2, histbase=60)
plot( 70, color=maColor(ma70, ma100), style=columns, title="MMA70", linewidth=2, histbase=65)
plot( 75, color=maColor(ma75, ma100), style=columns, title="MMA75", linewidth=2, histbase=70)
plot( 80, color=maColor(ma80, ma100), style=columns, title="MMA80", linewidth=2, histbase=75)
plot( 85, color=maColor(ma85, ma100), style=columns, title="MMA85", linewidth=2, histbase=80)
plot( 90, color=maColor(ma90, ma100), style=columns, title="MMA90", linewidth=2, histbase=85)
plot( 95, color=maColor(ma90, ma100), style=columns, title="MMA95", linewidth=2, histbase=90)
plot( 100, color=maColor(ma90, ma100), style=columns, title="MMA100", linewidth=2, histbase=95)
