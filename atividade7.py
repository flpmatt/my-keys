

'''Crie uma função para imprimir a tabuada de 'a' até 'b'. Considere a ≤ b.  '''

def tabuada(a, b):
   for i in range(a, b + 1):
      print ("\nTabuada: " + str(i))
      for j in range(1, 11):
         print (str(i) + "x" + str(j) + "=" + str(i * j))

tabuada(4,5)