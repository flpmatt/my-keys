'''Crie uma função que permita unir dois conjutos A E B'''
def unir_conj(A, B):
   C = [ ]
   for a in A:
      if not a in C:
         C.append(a)
   for b in B:
      if not b in C:
         C.append(b)
   return C
result = unir_conj([1,2,3,4,5],[6,7,8,9,10])

print(result)