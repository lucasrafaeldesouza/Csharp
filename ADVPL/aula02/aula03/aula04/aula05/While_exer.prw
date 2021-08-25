/*
while <condição>
   - comandos
   - comandos
   - comandos
  exit
  loop
  - comandos
  - comandos
  - comandos
End
*/
User Function While_exer()
Local nCont := 1

    While nCont  <= 10

    if nCont == 5
    exit
    end

    if nCont %2 ==0
    nCont++
    loop
    EndIf

    Alert(nCont)
    nCont++
    
    End
    alert("Finalizada a execução da rotina")

Return
