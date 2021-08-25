/*
Do case
case <condição>
 - comandos
 - comandos 

case <condição>
 - comandos
 - comandos

case <condição>
 - comandos
 - comandos

OtherWise
 - comandos
 - comandos


Endcase

*/

User Function Do_case()
Local nNumero := 10

Do case
   case nNumero > 0
   MsgAlert("Numero POSITIVO", "Valida numero")

   case nNumero < 0
   MsgAlert("Numero NEGATIVO", "Valida numero")

   OtherWise
   MsgAlert("O numero é ZERO", "Valida numero")


Endcase

Return 
