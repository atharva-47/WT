import nltk
from nltk.corpus import stopwords
from nltk.tokenize import word_tokenize

# Sample text paragraph
text = """Hello all, Welcome to Python Programming Academy. Python
Programming Academy is a nice platform to learn new programming skills. It is difficult to get enrolled
in this Academy."""

# Tokenize the text
tokens = word_tokenize(text)

# Remove stopwords
stop_words = set(stopwords.words('english'))
filtered_tokens = [word for word in tokens if word.lower() not in stop_words]

# Join the filtered tokens back into a paragraph
filtered_text = ' '.join(filtered_tokens)

print("Original Text:")
print(text)

print("\nText after removing stopwords:")
print(filtered_text)

