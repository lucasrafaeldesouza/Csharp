/*
LOCAL: Visivel apenas dentro da função onde ela foi criada
PRIVATE: Visivel na função onde ela foi criada e nas seguintes
PUBLIC: Está disponivel a partir do momento em que ela foi criada
STATIC: Visivel em todas as funções dentro da fonte onde ela foi criada
*/

Static cVar5 := "Static"

User Function escopos()

Local cVar1 := "Local"
Private cVar2 := "Private"

U_func4()

U_func2()

alert(cVar3)
alert(cVar4)

Return

User Function Func2()
public cVar3 := "public"
private cVar4 := "private cVar4"

Alert(cVar2)//Private
Alert(cVar3)//Local

U_func3()

Return

User Function Func3()

alert(cVar3)//public
alert(cVar2)//private

Return
