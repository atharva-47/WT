transactions = [
  "Bought groceries for $100. Paid with credit card #1234.",
  "Filled up gas tank for $40. Paid in cash.",
  "Paid electricity bill of $150 online. Bill due date Jan 15.",
  "Returned shoes to store. Received $50 refund to bank account.",
  "Dinner at restaurant. Total was $80 including 15% tip."
]

# Function to preprocess text
def preprocess(text):
  text = re.sub(r'[^\w\s]', '', text)
  text = re.sub(r'\d+', '', text)
  return text

# Preprocess each transaction
preprocessed = [preprocess(t) for t in transactions]

print("Preprocessed transactions:")
for t in preprocessed:
  print(t)

# Tokenize into sentences
sentences = [sent_tokenize(t) for t in preprocessed]
sentences = sum(sentences, [])

# Extract top 2 sentences by word count
sentence_words = [[len(sentence.split()), sentence] for sentence in sentences]
sentence_words.sort(reverse=True)

summary = []
for words, sentence in sentence_words[:2]:
  summary.append(sentence)

print("Summary: ")
print(" ".join(summary))
