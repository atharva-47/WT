import re
import nltk
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize, sent_tokenize

# Input text paragraph
text = """Hello all, Welcome to Python Programming Academy. Python
Programming Academy is a nice platform to learn new programming skills. It is difficult to get enrolled
in this Academy."""

# Preprocess the text: Remove special characters and digits
text = re.sub(r'[^a-zA-Z\s]','', text)

# Tokenize sentences
sentences = sent_tokenize(text)

# Tokenize words and remove stopwords
word_tokens = word_tokenize(text)
filtered_sentence = [w for w in word_tokens if not w in stopwords.words('english')]

# Calculate sentence scores based on the frequency of non-stopwords
sentence_scores = {}
for sent in sentences:
    sentence_scores[sent] = sum(1 for word in sent if word in filtered_sentence)

# Generate the summary by selecting sentences with highest scores
summary = ''
for sent in sorted(sentence_scores, key=sentence_scores.get, reverse=True):
    summary += sent + ' '

# Print the generated summary
print(summary)

