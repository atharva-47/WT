#Step 1: Download the dataset (you can manually download it from UCI and place it in your working directory)

# Step 2: Load the dataset
import pandas as pd

# Assuming the dataset file name is "nursery.csv"
df = pd.read_csv(r,'nursery.csv')

# Step 3: Explore the dataset
print(df.head())  # Print the first few rows to understand the structure of the dataset
# ... Explore further as needed

# Step 4: Preprocess the data
# Encode categorical variables using one-hot encoding, if necessary
# Identify independent variables (features) and the target variable (purchase)

# Step 5: Split the data into training and testing sets
from sklearn.model_selection import train_test_split

# Assuming 'X' contains independent variables and 'y' contains the target variable 'purchase'
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Step 6: Build and train the model
from sklearn.linear_model import LinearRegression

# Initialize the linear regression model
model = LinearRegression()

# Train the model on the training data
model.fit(X_train, y_train)

# Step 7: Evaluate the model
# Predict the target variable on the testing data
y_pred = model.predict(X_test)

# Evaluate the model's performance
from sklearn.metrics import mean_squared_error, r2_score

mse = mean_squared_error(y_test, y_pred)
r2 = r2_score(y_test, y_pred)

print("Mean Squared Error:", mse)
print("R^2 Score:", r2)

# Print the training and testing sets
print("Training set:")
print(X_train, y_train)
print("Testing set:")
print(X_test, y_test)

