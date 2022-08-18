//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(
    title="Getting User Inputs"
    ,shorttitle="User Inputs"
    ,overlay=false
    //,precision=8
    //,scale=scale.right
    //,timeframe="D"
)



//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
inputBoolen1 = input.bool(title="On/Off_1", defval=true, tooltip="Turn On/Off this Setting", inline="x", group="-----Group1-----") //confirm=false
inputBoolen2 = input.bool(title="On/Off_2", defval=true, tooltip="Turn On/Off this Setting", inline="x", group="-----Group1-----")
inputBoolen3 = input.bool(title="On/Off_3", defval=true, tooltip="Turn On/Off this Setting", inline="y", group="-----Group2-----")

inputColor = input.color(title="Color", defval=color.black)

inputInteger1 = input.int(title="integer_1", defval=2, minval=1, maxval=30, step=3, inline="x")
inputInteger2 = input.int(title="integer_2", defval=2, minval=1, maxval=30, step=3, inline="x")
inputInteger3 = input.int(title="integer_3", defval=3, options=[1,3,5,7,9], inline="y")

inputFloat = input.float(title="Float_1", defval=-0.5, minval=-3.14, maxval=3.14, step=0.01)

inputSymbol = input.symbol(title="Symbol", defval="SPY")
//inputSymbol = input.symbol(title="Symbol", defval="SHIB/USDT")

//設定Price標準用
inputPrice = input.price(title="Price", defval=0)

inputSource = input.source(title="Source", defval=close)
//open, close, high, low, hl2 高低2, hlc3 高低收3, ohlc4 開高低收4

var G_Time = "Time Settings"
inputTime = input.time(title="Time", defval=timestamp("01 Jan 2000 20:30 +0800"), group=G_Time) //confirm=true

inputResolution = input.timeframe(title="Timeframe", defval="D", group=G_Time)
//options=['D', 'W', 'M']

inputString = input.string(title="String", tooltip="Frame", defval="D", options=['D', 'W', 'M'], group=G_Time)

inputSession = input.session(title="Session", defval="0300-0330", group=G_Time)

//##### Functions
//##### Logic
//##### Calculation




//=========== [DA] Drawing & Alert ============================================
//##### Drawing
plot(na)

//##### Alert




