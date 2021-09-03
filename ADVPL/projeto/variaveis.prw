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

Alert("O resultado é: " + cValToChar(nResult))
*/
Local xVariavel

xVariavel := "Variavel é do tipo caracter"
    Alert("A variavel é : " + xVariavel)

xVariavel := 10
    Alert("A variavel é: " + cValToChar(xVariavel))

xVariavel := .T.
    if xVariavel
    Alert("A variavel é verdadeira")
    else
    Alert("A variavel é falsa")
    ENDIF

xVariavel := Date()
    Alert("A variavel é: " + DToC(xVariavel))

Return     
