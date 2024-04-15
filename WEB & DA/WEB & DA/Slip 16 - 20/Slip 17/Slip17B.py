import re
from sklearn.feature_extraction.text import CountVectorizer
from sklearn.metrics.pairwise import cosine_similarity
import numpy as np

# Original text
original_text = "So, keep working. Keep striving. Never give up. Fall down seven times, get up eight. Ease is a greater threat to progress than hardship. Ease is a greater threat to progress than hardship. So, keep moving, keep growing, keep learning. See you at work."

# Preprocess the text
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

print('Preprocessed Text:\
', preprocessed_text)
print('\
Extractive Summary:\
', summary)


