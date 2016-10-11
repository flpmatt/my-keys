
'''Crie uma função que permita inverter uma palavra dada como parâmetro.'''

def inverter_palavra(palavra):
   temporal = ""
   i = len(palavra) - 1
   while i >= 0:
      temporal = temporal + palavra[i]
      i = i - 1
   return temporal
   
result = inverter_palavra("felipe")
print(result)