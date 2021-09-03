#INCLUDE "PROTHEUS.CH"
/*
+====================================+
/ Programa: Laço de repetição While  /  
/ Autor: Lucas Rafael                /
/ Data:02/09/2021                    /
+====================================+
*/
User function While_laço()
    
Local nAux := 350
Local nCnt := 15
Local nRgs := 0

nAux := Int(nAux /2 )

While nAux < 350 

    nAux += nCnt
    nRgs++

Enddo    

Alert("O laço foi executado " + cValToChar(nRgs) + "Vezes!")

Return
