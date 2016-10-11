
''' Crie uma função que permita imprimir a palavra PYTHON 'n' vezes. '''

#Usando o laço for
def imprimir_python_for(n):
   for i in range(1, n + 1):
      print ("PYTHON")
   
#Usando o laço while
def imprimir_python_while(n):
   i = 1
   while i <= n:
      print ("PYTHON")
      i = i + 1

imprimir_python_while(2)
imprimir_python_for(2)