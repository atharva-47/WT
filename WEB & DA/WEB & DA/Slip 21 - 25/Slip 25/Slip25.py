import pandas as pd
from nltk.tokenize import word_tokenize
from nltk.sentiment.vader import SentimentIntensityAnalyzer
import nltk

# Reading the CSV file containing comments
df = pd.read_csv("covid19_2021.csv")

# Dropping duplicates and NaN values
df.drop_duplicates(inplace=True)
df.dropna(subset=['comment_text'], inplace=True)

# Tokenizing comments
def tokenize_comments(comment):
    tokens = word_tokenize(str(comment))
    return tokens

df['tokenized_comments'] = df['comment_text'].apply(tokenize_comments)

# Analyzing sentiment
def analyze_sentiment(comment):
    sid = SentimentIntensityAnalyzer()
    sentiment_scores = sid.polarity_scores(" ".join(comment))  # Joining the list of tokens into a string
    if sentiment_scores['compound'] >= 0.05:
        return 'positive'
    elif sentiment_scores['compound'] <= -0.05:
        return 'negative'
    else:
        return 'neutral'

# Applying sentiment analysis to tokenized comments
df['sentiment'] = df['tokenized_comments'].apply(analyze_sentiment)

# Calculating and printing percentage of comments by sentiment
sentiment_counts = df['sentiment'].value_counts(normalize=True) * 100
print("Percentage of comments by sentiment:")
print(sentiment_counts)

