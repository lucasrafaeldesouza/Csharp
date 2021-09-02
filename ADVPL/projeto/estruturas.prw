/*
Programa: variaveis
Autor: Lucas Rafael 
Data:02/09/2021
*/
//BIBLIOTECAS PADRÃO DO ADVPL 
#INCLUDE "PROTHEUS.CH"
#DEFINE ENTER CHR(13)+CHR(10)

User function estruturas()

// n: numerica - c: caracter - a: array 
    Local nPrimeiro := 10
    Local nSegundo  := 2
    Local nResult   := 0
    Local cNome     := "Lucas"

//ESTRUTURA DO PROGRAMA 
    nResult := nPrimeiro * nSegundo
//EXIBIR NA TELA 
    alert(cNome + " O resultado é: " + ENTER + ;
    cValToChar(nResult))

Return nResult    

