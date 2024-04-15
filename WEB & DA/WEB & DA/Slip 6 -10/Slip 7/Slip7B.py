import pandas as pd
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, association_rules

# Read the dataset
df = pd.read_csv(r'C:\Users\1bram\Downloads\DA_exam\market_basket.csv', header=None)

# Display dataset information
print("Dataset Information:")
print(df.info())

# Preprocess the data (drop null values)
df.dropna(inplace=True)

# Create transactions
transactions = []
for i in range(len(df)):
    transactions.append([str(item) for item in df.iloc[i] if str(item) != 'nan'])

# Convert transactions into a one-hot encoded DataFrame
te = TransactionEncoder()
te_ary = te.fit_transform(transactions)
df_encoded = pd.DataFrame(te_ary, columns=te.columns_)

# Apply Apriori algorithm
min_support = 0.01  # Adjust min_support as needed
frequent_itemsets = apriori(df_encoded, min_support=min_support, use_colnames=True)

# Generate association rules
rules = association_rules(frequent_itemsets, metric="confidence", min_threshold=0.5)

# Display frequent itemsets and association rules
print("\nFrequent Itemsets:")
print(frequent_itemsets)

print("\nAssociation Rules:")
print(rules)

