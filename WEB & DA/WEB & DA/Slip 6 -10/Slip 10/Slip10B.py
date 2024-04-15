import pandas as pd
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, association_rules

# Create the dataset
data = {
    'TID': [1, 2, 3, 4, 5],
    'Items': [['eggs', 'milk', 'bread'],
              ['eggs', 'apple'],
              ['milk', 'bread'],
              ['apple', 'milk'],
              ['milk', 'apple', 'bread']]
}

df = pd.DataFrame(data)

# Convert categorical values into numeric format
te = TransactionEncoder()
te_ary = te.fit(df['Items']).transform(df['Items'])
df_encoded = pd.DataFrame(te_ary, columns=te.columns_)

# Apply Apriori algorithm with different min_sup values
min_sup_values = [0.2, 0.4]  # Adjust min_sup values as needed

for min_sup in min_sup_values:
    frequent_itemsets = apriori(df_encoded, min_support=min_sup, use_colnames=True)
    print("\nFrequent Itemsets with min_sup =", min_sup)
    print(frequent_itemsets)

    rules = association_rules(frequent_itemsets, metric="confidence", min_threshold=0.5)
    print("\nAssociation Rules with min_sup =", min_sup)
    print(rules)


