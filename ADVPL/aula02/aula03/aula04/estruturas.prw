/*
If <condi��o> (obrigat�rio)

       - comandos
       - comandos

ElseIf <condi��o> (N�O obrigat�rio)

       - comandos
       - comandos

Else (N�O obrigat�rio)

       - comandos
       - comandos 

Endif (obrigat�rio)
*/
User Function estruturas()

Local nEstoque := 100
Local nVenda   := 300
Local cEstNeg  := "SIM"


If nEstoque >= nVenda 
     MsgAlert("Pedido liberado","Valida venda")
ElseIf nVenda > nEstoque .and. cEstNeg == "SIM"
     MsgAlert("Pode vender, porem o saldo em estoque ficara negativo.","Valida venda")
Else 
     MsgAlert("Sem saldo para liberar o pedido","Valida venda") 
Endif

return
