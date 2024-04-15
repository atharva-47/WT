import pandas as pd

# Read the dataset
df = pd.read_csv("INvideos.csv")

# Data cleaning operations
# Drop duplicates
df.drop_duplicates(inplace=True)

# Drop rows with missing values
df.dropna(inplace=True)

# Convert relevant columns to numeric
numeric_cols = ['views', 'likes', 'dislikes', 'comment_count']
df[numeric_cols] = df[numeric_cols].apply(pd.to_numeric, errors='coerce')

# Find total views, total likes, total dislikes, and comment count
total_views = df['views'].sum()
total_likes = df['likes'].sum()
total_dislikes = df['dislikes'].sum()
total_comment_count = df['comment_count'].sum()

print("Total Views:", total_views)
print("Total Likes:", total_likes)
print("Total Dislikes:", total_dislikes)
print("Total Comment Count:", total_comment_count)

