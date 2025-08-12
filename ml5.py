import pandas as pd
from sklearn import tree
from sklearn.preprocessing import LabelEncoder
from sklearn.naive_bayes import GaussianNB
from sklearn.metrics import accuracy_score, precision_score, recall_score
data=pd.read_csv("ML5.csv")
print(data)
x=data.iloc[:,:-1]
y=data.iloc[:,-1]
x=x.copy()
le_outlook=LabelEncoder()
x.outlook=le_outlook.fit_transform(x.outlook)
le_temperature=LabelEncoder()
x.temperature=le_temperature.fit_transform(x.temperature)
print("\nNow the training data output is\n",x)
le_play=LabelEncoder()
y=le_play.fit_transform(y)
print("\nNow the training data output is\n",y)
from sklearn.model_selection import train_test_split
x_train,x_test,y_train,y_test=train_test_split(x,y,test_size=0.20)
classifier=GaussianNB()
classifier.fit(x_train,y_train)
print("Accuracy:",accuracy_score(classifier.predict(x_test),y_test))
print("Recall:",recall_score(classifier.predict(x_test),y_test))
print("Precision:",precision_score(classifier.predict(x_test),y_test))
