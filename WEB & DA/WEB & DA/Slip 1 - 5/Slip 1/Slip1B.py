##SLIP 1

# Step 1: Import libraries
import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression

# Step 2: Create the 'Position_Salaries' dataset
data = {
    'Position': ['Intern', 'Associate', 'Manager', 'Director', 'Senior Director', 'Executive'],
    'Level': [1, 2, 3, 4, 5, 6],
    'Salary': [45000, 60000, 80000, 120000, 180000, 250000]
}
df = pd.DataFrame(data)

# Step 3: Identify the independent and target variables
X = df[['Level']]  # Independent variable
y = df['Salary']   # Target variable

# Step 4: Split the variables into training and testing sets with a 7:3 ratio
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.3, random_state=42)

# Step 5: Build a simple linear regression model
model = LinearRegression()
model.fit(X_train, y_train)

# Step 6: Print the training and testing sets
print("Training Set:")
print(X_train)
print(y_train)
print("\nTesting Set:")
print(X_test)
print(y_test)
