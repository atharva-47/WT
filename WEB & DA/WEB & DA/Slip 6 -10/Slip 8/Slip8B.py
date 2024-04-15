import pandas as pd
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, association_rules

# Step 1: Read the dataset and display its information
data = pd.read_csv(r,'groceries.csv', header=None)
print("Dataset Information:")
print(data.info())

# Step 2: Preprocess the data (drop null values)
data.dropna(inplace=True)

# Step 3: Convert categorical values into numeric format using one-hot encoding
te = TransactionEncoder()
data_encoded = te.fit(data.values).transform(data.values)
data_df = pd.DataFrame(data_encoded, columns=te.columns_)

# Step 4: Apply the Apriori algorithm
min_support = 0.01  # Adjust min_support as needed
frequent_itemsets = apriori(data_df, min_support=min_support, use_colnames=True)

# Step 5: Generate association rules
rules = association_rules(frequent_itemsets, metric="confidence", min_threshold=0.5)

# Step 6: Display frequent itemsets and association rules
print("\nFrequent Itemsets:")
print(frequent_itemsets)

print("\nAssociation Rules:")
print(rules)