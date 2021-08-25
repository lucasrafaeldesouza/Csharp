/*
CHAR: É utilizado para gravar informações do tipo caracter
NUMBER: É utilizado para gravar informações numericas, pode ser um valor inteiro ou decimal
DATE: É utilizado para gravar data
LOGICAL(BOOLEAN):É utilizado para gravar informações do tipo binaria, como True ou false(.T. ou .F.)
ARRAY:É utilizado para gravar uma coleção de dados 
BLOCK(CODEBLOCK): É utilizado para gravar uma coleção de comandos
OBJECT: É utilizado para gravar um objeto que pode ser usado para criar uma interface
NULL: OU NULLO
*/
User Function VarTipos()

Local cTexto  := "Variavel do tipo Caracter"
Local nNumero := 0
Local dData   := CTOD("01/05/2021")
Local lLogical:= .T. // .F.
Local aMatriz := {"Lucas Rafael",20,.T.}
Local bBloco  := {||5+10}
Local oObjeto := nil
Local xNull   := nil

alert(cTexto)

cTexto := cTexto + 10

alert(cTexto)

Return
