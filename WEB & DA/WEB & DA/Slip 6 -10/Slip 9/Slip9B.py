import pandas as pd
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, association_rules

# Step 1: Create your own transactions dataset
transactions_data = [
    ['bread', 'milk', 'cheese'],
    ['bread', 'coffee'],
    ['bread', 'milk'],
    ['bread', 'cheese'],
    ['milk', 'coffee'],
    ['coffee']
]

# Step 2: Convert the dataset into a DataFrame
df = pd.DataFrame(transactions_data)

# Step 3: Preprocess the data (drop null values)
df.dropna(inplace=True)

# Step 4: Convert categorical values into numeric format using one-hot encoding
te = TransactionEncoder()
data_encoded = te.fit(df.values).transform(df.values)
data_df = pd.DataFrame(data_encoded, columns=te.columns_)

# Step 5: Apply the Apriori algorithm
min_support = 0.01  # Adjust min_support as needed
frequent_itemsets = apriori(data_df, min_support=min_support, use_colnames=True)

# Step 6: Generate association rules
rules = association_rules(frequent_itemsets, metric="confidence", min_threshold=0.5)

# Step 7: Display frequent itemsets and association rules
print("\nFrequent Itemsets:")
print(frequent_itemsets)

print("\nAssociation Rules:")
print(rules)
