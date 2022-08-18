//=========== [DVD] Description, Version & Destination =================================
//##### Description
//##### Version
//@version=5

//##### Destination
indicator(title="Arithmetic Operator [運算符號]",shorttitle="Operator",overlay=false)


//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic


//##### Calculation
addtion = 1+1
subtraction = 10-5
division=12/2
modulo = 10 % 4 // =2
stringConcatenation_1= "EUR" + "USD"
stringConcatenation_2= syminfo.basecurrency + "/" + syminfo.currency
naValue = 10 + 3 + na

abs = math.abs(-300)
valRound=math.round(1.7)

counter = 0
counter += 1
counter += 2
counter -= 10

//math.log(-3)

//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plot(addtion, color=color.white)
plot(subtraction, color=color.white)
plot(division, color=color.white)
plot(modulo, color=color.white)
plot(abs, color=color.yellow)
plotshape(barstate.islast, text=stringConcatenation_1)


//會顯示錯誤
//plot(barstate.islast, text=stringConcatenation_2)
//取代方式
myLable = barstate.islast ? label.new(bar_index, high, text=stringConcatenation_2) : na


//##### Alert
//##### Note


