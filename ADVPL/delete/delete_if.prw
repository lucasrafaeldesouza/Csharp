#INCLUDE 'Protheus.ch'

User function delete_if()

Local diaquente
Local carroOk

diaquente := .F. // TRUE = VERDADEIRO
carroOk    := .F. // TRUE = VERDADEIRO

if (diaquente = .T. .OR. carroOk = .T.)
   MsgInfo("Hoje vai dar Praia")
   else
   MsgInfo("Hoje vai dar Netflix")
ENDIF

RETURN


