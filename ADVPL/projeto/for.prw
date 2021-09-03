#INCLUDE "PROTHEUS.CH"
/*
+====================================+
/ Programa: Laço de repetição For    /  
/ Autor: Lucas Rafael                /
/ Data:02/09/2021                    /
+====================================+
*/
//SOMA DE 1 Á 10 E DEPOIS DE 2 Á 10
User function for()

Local i
Local j

    For i := 1 to 2
    
    MsgAlert("Soma do " + Str(i))

    for j := 1 to 10
        
    MsgAlert(AllTrim(Str(j)) + " + " + AllTrim(Str(i)) + " = " +  AllTrim(Str(j+i)))

    NEXT

    NEXT

Return     

User function ParDois()
//CONTE ATÉ 120 E SAIR NO 110

Local i
Local nIni, nFim

nIni := 100
nFim := 120

    for i := nIni to nFim step 2

    If i == 110
     Exit // ENCERRA O LOOP
    EndIf 
     MsgAlert(i)
    NEXT
Return
