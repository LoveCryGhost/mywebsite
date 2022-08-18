//=========== [DVD] Description, Version & Destination =================================
//##### Description
//##### Version
//@version=5

//##### Destination
indicator(title="", shorttitle="", overlay=false)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
// 1 line custom function
singleLineFuntion(x, y) => x + y


// Multi-line function
multiplier = 2
multiLineFunction(x, y) =>
value = x * y
value * multiplier


// Multi-result function
multiResult(x, y) =>
a = x + y
b = x - y
    [a, b]

    [r1, r2] = multiResult(1, 1)


//##### Logic
//##### Calculation


//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plot(singleLineFuntion(23, 33))
plot(multiLineFunction(3, 6), color=color.red)

plot(r1, color=color.blue)
plot(r2, color=color.red)

//##### Alert
//##### Note
