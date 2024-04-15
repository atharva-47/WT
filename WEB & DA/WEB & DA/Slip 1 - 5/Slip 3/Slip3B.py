# Step 1: Import libraries
import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
from sklearn.preprocessing import StandardScaler
from sklearn.metrics import accuracy_score, classification_report

# Step 2: Create the 'User' dataset
data = {
    'User ID': [1, 2, 3, 4, 5],
    'Gender': ['Male', 'Female', 'Male', 'Female', 'Male'],
    'Age': [25, 30, 35, 40, 45],
    'Estimated Salary': [40000, 60000, 80000, 70000, 90000],
    'Purchased': [0, 1, 1, 0, 1]  # 0 - Not purchased, 1 - Purchased
}
df = pd.DataFrame(data)

# Step 3: Prepare the data and split it into features and target variable
X = df[['Age', 'Estimated Salary']]  # Features (independent variables)
y = df['Purchased']                   # Target variable

# Step 4: Split the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Step 5: Build a logistic regression model
model = LogisticRegression()

# Step 6: Train the model on the training data
model.fit(X_train, y_train)

# Step 7: Evaluate the model's performance
y_pred = model.predict(X_test)
accuracy = accuracy_score(y_test, y_pred)
print("Accuracy:", accuracy)
print("\nClassification Report:")
print(classification_report(y_test, y_pred))

# Step 8: Make predictions using the testing data
new_data = pd.DataFrame({'Age': [35, 50], 'Estimated Salary': [75000, 80000]})
predictions = model.predict(new_data)
print("\nPredictions for new data:")
print(predictions)
