

''' Indique a mensagem que apresentará a execução da seguinte função. Considere como
parâmetro de entrada a string ‘ABCDEF’ '''


def funcao2(palavra):
   str = ""
   k = 0
   while k < len(palavra):
      str = str + palavra[k]
      k = k + 1
   while k > 0:
      k = k - 1
      str = str + palavra[k]
   return str

resultado = funcao2("ABCDEF")

print(resultado)

''' Resposta > ABCDEFFEDCBA '''