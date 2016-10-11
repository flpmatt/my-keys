
'''  Fazer uma função que receba como parâmetro uma string e verifique se ela é palíndroma,
isto é, se ela é igual lida da esquerda para a direita e vice-versa. Exemplos: `RADAR' e `B123321B'. `python' não é palíndroma.  '''

def palindroma(str):
   n = len(str)
   k = 0
   while k < n / 2:
      if str[k] != str[n - k - 1]:
         return False
      k = k + 1
   return True
result = palindroma("radar")
print(result)
