import re
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.metrics.pairwise import cosine_similarity
import numpy as np

# Replace 'your_text_here' with your actual text paragraph
original_text = "your,dmdkdkd&&&&&keckod2;cokdkcjd!!!lkcndk,vjioecjioecjdojdko.cjdfkekcisjcffy,,,,fioeodf,,,jiudvjiodknckdlloioukasjf;llkdbkjdljhcbjskkjchklbhdbwvkjndkjvkdkjvjlhlviljd"

# Preprocess the text to remove any special characters and digits
preprocessed_text = re.sub('[^A-Za-z ]+', '', original_text)

# Split text into sentences
sentences = preprocessed_text.split('. ')

# Remove empty sentences
sentences = [s for s in sentences if s]

# Vectorize sentences
vectorizer = CountVectorizer().fit_transform(sentences)
vectors = vectorizer.toarray()

# Compute cosine similarity
cosine_matrix = cosine_similarity(vectors)

# Summarize by selecting the sentence with the highest sum of cosine similarities
summary_index = np.argmax(cosine_matrix.sum(axis=1))
summary = sentences[summary_index]

print('Preprocessed Text:\n', preprocessed_text)
print('\nExtractive Summary:\n', summary)


