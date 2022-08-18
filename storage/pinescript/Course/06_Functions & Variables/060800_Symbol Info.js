//=========== [DVD] Description, Version & Destination =================================
//##### Description
//##### Version
//@version=5

//##### Destination
indicator(title="Bar States", shorttitle="", overlay=true)


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions

//Logic
// if barstate.islast
//     label.new(bar_index, high, text=syminfo.ticker)

// if barstate.islast
//     label.new(bar_index, high, text=syminfo.tickerid) //幣種 + 交易所


// if barstate.islast
//     label.new(bar_index, high, text=syminfo.description) //幣種的描述

// if barstate.islast
//     label.new(bar_index, high, text=syminfo.type) //股票或虛擬貨幣

// if barstate.islast
//     label.new(bar_index, high, text=syminfo.prefix) //交易所

if barstate.islast
    label.new(bar_index, high, text=syminfo.root)



//syminfo.mintick //小數點位數
plot(syminfo.mintick)




//##### Calculation



//=========== [DAN] Drawing & Alert ============================================
//##### Drawing


//##### Alert
//##### Note
