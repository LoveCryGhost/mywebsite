//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Indentation & Scopes[縮進]", shorttitle="Switches", overlay=true)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
parentScopeVariable=0

if close > open
    myVarialbe = 1
newVarialbe = myVarialbe*2
parentScopeVariable = 4
//顯示提醒
//line 21: Shadowing variable 'parentScopeVariable' which exists in parent scope. Did you want to use the ':=' operator instead of '=' ?

if close > high[1]
    thirdScopeVariable =3
parentScopeVariable := thirdScopeVariable * newVarialbe


parentScopeVariable := newVarialbe + 3
//會顯示錯誤，外層無法讀取內層變數

optipnVariable = switch options
    "defval" => 1
        "option A" => 2
        "option B" => "B"
//這會報錯，這是因為，輸出的變數型態不同

//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
// Draw MA
        plot(na)

//##### Alert
//##### Note




