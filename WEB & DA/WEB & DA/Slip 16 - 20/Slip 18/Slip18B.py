
import nltk
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize, sent_tokenize
from nltk.probability import FreqDist
from wordcloud import WordCloud
import matplotlib.pyplot as plt

# Sample text paragraph
text = """
Natural Language Processing (NLP) is a field of artificial intelligence that deals with the interaction
between computers and humans using natural language. It enables computers to understand, interpret, and
generate human language in a valuable way. NLP techniques are used in various applications such as
text classification, sentiment analysis, machine translation, and more.
"""

# Download NLTK resources
nltk.download('punkt')
nltk.download('stopwords')

# Tokenize the text into words
words = word_tokenize(text)

# Remove stopwords
stop_words = set(stopwords.words('english'))
filtered_words = [word for word in words if word.lower() not in stop_words]

# Tokenize the text into sentences
sentences = sent_tokenize(text)

# Calculate word frequency distribution
word_freq = FreqDist(filtered_words)

# Plot word frequency distribution
plt.figure(figsize=(10, 6))
word_freq.plot(20, cumulative=False)
plt.title('Word Frequency Distribution')
plt.xlabel('Word')
plt.ylabel('Frequency')
plt.show()

# Create wordcloud
wordcloud = WordCloud(width=800, height=400, background_color='white').generate(' '.join(filtered_words))

# Plot the wordcloud
plt.figure(figsize=(10, 6))
plt.imshow(wordcloud, interpolation='bilinear')
plt.axis('off')
plt.title('Word Cloud')
plt.show()

