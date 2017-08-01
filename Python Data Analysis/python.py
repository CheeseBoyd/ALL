from sklearn import tree

#[height, weight, shoe-size]

x = [[180, 80, 44], 
	[177, 70, 43], 
	[160, 60, 38], 
	[154, 54, 37],
	[166,65,40],
	[190,90,47],
	[175,64,39],
	[177,77,40],
	[159,55,33],
	[171,75,42],
	[181,85,43]]

# Gender lists	

y = ['male', 'female','female','female','male','male','male','female','male','female','male']

clf = tree.DecisionTreeClassifier()
clf = clf.fit(x,y)

prediction = clf.predict([[170,62,44]]) 

print(prediction)