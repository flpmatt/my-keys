
''' Crie uma função determinar o maior numero que receba três números (inteiros ou
reais) e retorne o maior valor do números. '''

def determinar_o_maior_numero(a, b, c):
   if a < b:
      if b < c:
         return c
      else :
         return b
   else :
      if a < c:
         return c
      else :
         return a
   
result = determinar_o_maior_numero(5,10,15)

print(result)