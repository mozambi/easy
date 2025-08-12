from sklearn.datasets import load_iris
from sklearn.model_selection import train_test_split
from sklearn.tree import DecisionTreeClassifier
from sklearn.metrics import accuracy_score

iris = load_iris()
x = iris.data
y = iris.target
print(iris)

x_train, x_test, y_train, y_test = train_test_split(x, y, test_size = 0.2, random_state=42)

clf = DecisionTreeClassifier()
clf.fit(x_train, y_train)
y_pred = clf.predict(x_test)


accuracy = accuracy_score(y_test, y_pred)
print(f"accuracy :{accuracy:.2f}")

new_sample = [[5.1, 2.5, 4.6, 1.5]]

predicted_class_index = clf.predict(new_sample)[0]
predicted_class_name = iris.target_names[predicted_class_index]
print(f"Predicted class for the new sample {new_sample} is : {predicted_class_name}")
