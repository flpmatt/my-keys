'''Crie uma função recursiva para calcula n elevado a x '''

def potencia(n,x):
   if x==1:
      return n
   else:
      return n*potencia(n,x-1)
      
result = potencia(4,2)

print(result)