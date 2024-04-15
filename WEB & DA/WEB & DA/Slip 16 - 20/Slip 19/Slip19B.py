import pandas as pd
from nltk.sentiment import SentimentIntensityAnalyzer
from wordcloud import WordCloud
import matplotlib.pyplot as plt

# Load the dataset into a DataFrame
df = pd.read_csv(r'C:\Users\1bram\Downloads\DA_exam\movie_review.csv')

# Perform sentiment analysis
sid = SentimentIntensityAnalyzer()
df['sentiment_score'] = df['review'].apply(lambda x: sid.polarity_scores(x)['compound'])
df['sentiment'] = df['sentiment_score'].apply(lambda x: 'Positive' if x > 0 else 'Negative' if x < 0 else 'Neutral')

# Create a wordcloud
wordcloud = WordCloud(width=800, height=400, background_color='white').generate(' '.join(df['review']))

# Plot the wordcloud
plt.figure(figsize=(10, 6))
plt.imshow(wordcloud, interpolation='bilinear')
plt.axis('off')
plt.title('Word Cloud of Movie Reviews')
plt.show()

# Display sentiment distribution
sentiment_counts = df['sentiment'].value_counts(normalize=True) * 100
print("Sentiment Distribution:")
print(sentiment_counts)

