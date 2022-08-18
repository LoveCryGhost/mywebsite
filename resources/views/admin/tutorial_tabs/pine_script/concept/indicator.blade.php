//@version=5
indicator(shorttitle="MACD_[1-1]_[1-1]", title="myMACD", overlay=true)

//parameters
source = input(title="Source", defval=close)
fast_length = input.int(title="Fast Length", defval=12)
slow_length = input.int(title="Slow Length", defval=26)

signal_length = input.int(title="Signal Smoothing",  minval = 1, maxval = 50, defval = 9)
sma_source = input.string(title="Oscillator MA Type",  defval="EMA", options=["SMA", "EMA"])
sma_signal = input.string(title="Signal Line MA Type", defval="EMA", options=["SMA", "EMA"])


//Style
col_macd = input.color(#2962FF, "MACD Line", group="Color Settings", inline="MACD")
col_signal = input.color(#FF6D00, "Signal Line", group="Color Settings", inline="Signal")
col_grow_above = input.color(#26A69A, "Above Grow", group="Histogram", inline="Above")
col_fall_above = input.color(#B2DFDB, "Fall", group="Histogram", inline="Above")
col_grow_below = input.color(#FFCDD2, "Below Grow", group="Histogram", inline="Below")
col_fall_below = input.color(#FF5252, "Fall", group="Histogram", inline="Below")


//Logic
fast_ma = sma_source == "SMA" ? ta.sma(source, fast_length) : ta.ema(source, fast_length)
slow_ma = sma_source == "SMA" ? ta.sma(source, slow_length) : ta.ema(source, slow_length)
macd = fast_ma - slow_ma
signal = sma_signal == "SMA" ? ta.sma(macd, signal_length) : ta.ema(macd, signal_length)
hist = macd - signal


macd_bullCondition() =>
(hist>=0 and hist[1] > hist) and (hist[1]>=0 and hist[2] > hist[1]) and (hist[2]>=0 and hist[3] > hist[2]) and (hist[3]>=0 and hist[4] > hist[3]) and (hist[4]>=0 and hist[5] < hist[4])

plotshape(macd_bullCondition(), style=shape.triangledown, location=location.abovebar, color=color.red, size=size.small)
