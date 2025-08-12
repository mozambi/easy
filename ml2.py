import pandas as pd
import numpy as np
def loaddata(filename):
    data = pd.read_csv(filename)
    print(data)
    concepts = data.iloc[:,:-1].values
    target = data.iloc[:,-1].values
    return concepts,target
def candidate(concepts,target):
    nf = len(concepts[0])
    s = concepts[0].copy()
    g = [["?" for _ in range(nf)] for _ in range(nf)]
    for i,example in enumerate(concepts):
        if target[i].lower()=="yes":
            for x in range(nf):
                if s[x]!=example[x]:
                    s[x]="?"
                    g[x][x] = "?"
        else:
            for x in range(nf):
                if s[x]!=example[x]:
           
                    g[x][x] = s[x]
                else:
                    g[x][x] = "?"
    g = [h for h in g if any(attr != "?" for attr in h)]
    return s,g
filename = "weather.csv"
concepts,target = loaddata(filename)
s,g = candidate(concepts,target)
print("most specific hypothesis using candidate")
print(s)
print("most general hypothesis using candidate")
print(g)
