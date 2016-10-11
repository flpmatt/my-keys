''' Crie uma função que receba duas palavras e retorne True se uma das palavras é o
reverso da outra. Exemplo: 'pots' é reverso de 'stop'. 'livres' é reverso de 'servil' '''

def reverso(palavra1, palavra2):
   if palavra1 == inverter_palavra(palavra2):
      return True
   else:
      return False
result = reverso("Felipe","epileF")
print(result)