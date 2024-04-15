
# Step 1: Import libraries
import numpy as np
import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.metrics import mean_squared_error, r2_score

# Step 2: Load the dataset
df = pd.read_csv(r,'fish.csv')

# Step 3: Prepare the data and split into features and target variable
X = df.drop(columns=['Weight'])  # Features (independent variables)
y = df['Weight']                 # Target variable

# One-hot encode the 'Species' column
X_encoded = pd.get_dummies(X, columns=['Species'], drop_first=True)

# Step 4: Split the data into training and testing sets
X_train, X_test, y_train, y_test = train_test_split(X_encoded, y, test_size=0.2, random_state=42)

# Step 5: Build and train the linear regression model
model = LinearRegression()
model.fit(X_train, y_train)

# Step 6: Evaluate the model's performance
y_pred = model.predict(X_test)
mse = mean_squared_error(y_test, y_pred)
r2 = r2_score(y_test, y_pred)
print("Mean Squared Error:", mse)
print("R-squared Score:", r2)
