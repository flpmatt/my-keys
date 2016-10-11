''' Crie uma funcão numero_par que permita verificar um dado numero 'x', passado como parametro, é numero par. '''

x = 3

def numero_par(x):
   if x % 2 == 0:
      return True
   else :
      return False
    
result = numero_par(x)

print (result)
