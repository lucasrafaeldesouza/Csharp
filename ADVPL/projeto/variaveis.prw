#INCLUDE "PROTHEUS.CH"
#DEFINE ENTER CHR(13)+CHR(10)
/*
+====================================+
/ Programa: Variaveis                / 
/ Autor: Lucas Rafael                /
/ Data:02/09/2021                    /
+====================================+
*/
User function variaveis()
/*
Local nMultiplicador, nResult
nMultiplicador := 10
nResult := 100 * nMultiplicador

Alert("O resultado �: " + cValToChar(nResult))
*/
Local xVariavel

xVariavel := "Variavel � do tipo caracter"
    Alert("A variavel � : " + xVariavel)

xVariavel := 10
    Alert("A variavel �: " + cValToChar(xVariavel))

xVariavel := .T.
    if xVariavel
    Alert("A variavel � verdadeira")
    else
    Alert("A variavel � falsa")
    ENDIF

xVariavel := Date()
    Alert("A variavel �: " + DToC(xVariavel))

Return     
