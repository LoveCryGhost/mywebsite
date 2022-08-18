//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Switches", shorttitle="Switches", overlay=true)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic


// Get user input
maType = input.string(title="MA Type", defval="EMA", options=["EMA", "SMA", "RMA", "WMA", "Random Input"])
maLength = input.int(title="MA Length", defval=50, minval=1)

// Get MA using switch with an expression
movingAverage = switch maType
    "EMA" => ta.ema(close, maLength)
        "SMA" => ta.sma(close, maLength)
        "RMA" => ta.rma(close, maLength)
        "WMA" => ta.wma(close, maLength)
    =>
        runtime.error("No matching MA type found!")
        na


//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
// Draw MA
        plot(movingAverage)

//##### Alert
// Get boolean values using switch without an expression
        hc = close > high[1]
        lc = close < low[1]

        switch
            hc => alert("Higher close detected!", alert.freq_once_per_bar_close)
            lc => alert("Lower close detected!", alert.freq_once_per_bar_close)
//##### Note




