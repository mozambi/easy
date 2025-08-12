import csv
def loaddata(filename):
    with open(filename,'r') as f:
        reader=csv.reader(f)
        data=list(reader)
        header=data[0]
        instances=data[1:]
    return header,instances
def finds(data):
    for instance in data:
        if instance[-1].lower()=='yes':
            hypothesis=instance[:-1]
            break
    else:
        None
    for instance in data:
        if instance[-1].lower()=='yes':
            for i in range(len(hypothesis)):
                if hypothesis[i]!=instance[i]:
                    hypothesis[i]='?'
    return hypothesis
filename='climate.csv'
header,data=loaddata(filename)
print('Attribute',header)
print('')
print('trainingdata')
for row in data:
    print(row)
hypothesis=finds(data)
if hypothesis:
    print('Most specific hypothesis by FIND_s')
    print(hypothesis)
else:
    print('No positive training example in training data')
