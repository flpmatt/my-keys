'''Cire uma função para determinar o fatorial de um número dada como entrada'''

def fatorial(n):
   f = 1
   while n>1:
      f = f*n
      n = n-1
   return f
result = fatorial(10)
print(result)