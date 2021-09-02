#INCLUDE "PROTHEUS.CH"
#DEFINE ENTER CHR(13)+CHR(10)

/*
+====================================+
/ Programa: estrutura básica em ADVPL/ 
/ Autor: Lucas Rafael                /
/ Data:02/09/2021                    /
+====================================+
*/
User function variaveis()

Local nMultiplicador, nResult
nMultiplicador := 10
nResult := 100 * nMultiplicador

Alert("O resultado é: " + cValToChar(nResult))

Return     
