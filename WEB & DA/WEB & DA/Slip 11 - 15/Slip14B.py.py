import pandas as pd
from mlxtend.preprocessing import TransactionEncoder
from mlxtend.frequent_patterns import apriori, association_rules

# Create the dataset
data = {
    'TID': [1, 2, 3, 4],
    'Items': [
        {'Apple', 'Mango', 'Banana'},
        {'Mango', 'Banana', 'Cabbage', 'Carrots'},
        {'Mango', 'Banana', 'Carrots'},
        {'Mango', 'Carrots'}
    ]
}

df = pd.DataFrame(data)

# Convert categorical values into numeric format
te = TransactionEncoder()
te_ary = te.fit(data['Items']).transform(data['Items'])
df_encoded = pd.DataFrame(te_ary, columns=te.columns_)

# Apply Apriori algorithm with different min_sup values
min_sup_values = [0.2, 0.3]  # Example minimum support values

for min_sup in min_sup_values:
    frequent_itemsets = apriori(df_encoded, min_support=min_sup, use_colnames=True)
    rules = association_rules(frequent_itemsets, metric="confidence", min_threshold=0.5)

    print(f"\nFrequent Itemsets with min_support={min_sup}:")
    print(frequent_itemsets)

    print(f"\nAssociation Rules with min_support={min_sup}:")
    print(rules)