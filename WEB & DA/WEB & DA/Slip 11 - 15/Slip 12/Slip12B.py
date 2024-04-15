import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression

# Simulate 'heights-and-weights' dataset
np.random.seed(42)  # For reproducibility
heights = np.random.normal(170, 10, 1000)  # Mean = 170 cm, SD = 10 cm, N = 1000
weights = heights * 0.5 + np.random.normal(60, 5, 1000)  # Simple linear relation with noise

# Create DataFrame
df = pd.DataFrame({'Height': heights, 'Weight': weights})

# Split the data
X = df[['Height']]  # Independent variable
y = df['Weight']  # Target variable
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Initialize and fit the linear regression model
model = LinearRegression()
model.fit(X_train, y_train)

# Predicting weights based on heights in the testing set
predictions = model.predict(X_test)

# Print the testing sets and predictions
print('Testing Set Heights:\
', X_test.head())
print('Actual Weights:\
', y_test.head())
print('Predicted Weights:\
', predictions[:5])
print('done')

