# Step 1: Import libraries
import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression

# Step 2: Create the 'Salary' dataset
data = {
    'YearsExperience': [1.1, 1.3, 1.5, 2.0, 2.2, 2.9, 3.0, 3.2, 3.2, 3.7, 3.9, 4.0, 4.0, 4.1, 4.5, 4.9, 5.1, 5.3, 5.9, 6.0],
    'Salary': [39343, 46205, 37731, 43525, 39891, 56642, 60150, 54445, 64445, 57189, 63218, 55794, 56957, 57081, 61111, 67938, 66029, 83088, 81363, 93940]
}
df = pd.DataFrame(data)

# Step 3: Identify the independent and target variables
X = df[['YearsExperience']]  # Independent variable
y = df['Salary']             # Target variable

# Step 4: Split the variables into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Step 5: Build a simple linear regression model for predicting purchases
model = LinearRegression()
model.fit(X_train, y_train)

# Step 6: Print the training and testing sets
print("Training Set:")
print(X_train)
print(y_train)
print("\nTesting Set:")
print(X_test)
print(y_test)