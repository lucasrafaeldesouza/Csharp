#INCLUDE "PROTHEUS.CH"
/*
+====================================+
/ Programa: La�o de repeti��o While  /  
/ Autor: Lucas Rafael                /
/ Data:02/09/2021                    /
+====================================+
*/
User function While_la�o()
    
Local nAux := 350
Local nCnt := 15
Local nRgs := 0

nAux := Int(nAux /2 )

While nAux < 350 

    nAux += nCnt
    nRgs++

Enddo    

Alert("O la�o foi executado " + cValToChar(nRgs) + "Vezes!")

Return
