//=========== [DVD] Description, Version & Destination =================================
//##### Description
// Author: andy.mytutor@gmail.com
// Website: www.xxxyyyzzz.com/pinescript

//##### Version
//@version=5

//##### Destination
indicator(title="Company Financials", shorttitle="Company Financials", overlay=false)

//=========== [IFLC] Inputs & Functions & Calculation=================================
//##### Inputs
//##### Functions
//##### Logic
f = request.financial(syminfo.tickerid, "ACCOUNTS_PAYABLE", "FQ", gaps=barmerge.gaps_off)

//##### Calculation




//=========== [DAN] Drawing & Alert ============================================
//##### Drawing
plot(f)

//##### Alert

//##### Note




