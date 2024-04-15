import pandas as pd
from mlxtend.frequent_patterns import apriori, association_rules

# Creating the dataset
data = {
    'company': ['Tata', 'MG', 'Kia', 'Hyundai'],
    'model': ['Nexon', 'Astor', 'Seltos', 'Creta'],
    'year': [2017, 2021, 2019, 2015]
}

df = pd.DataFrame(data)

# Remove the 'year' column
df.drop(columns=['year'], inplace=True)

# Convert categorical values into one-hot encoded format
df = pd.get_dummies(df, columns=['company', 'model'])

# Generate frequent itemsets with lower support threshold
frequent_itemsets = apriori(df, min_support=0.25, use_colnames=True)

# Generate association rules
rules = association_rules(frequent_itemsets, metric="confidence", min_threshold=0.7)

print("Frequent Itemsets:")
print(frequent_itemsets)
print("\nAssociation Rules:")
print(rules)
