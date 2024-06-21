import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.pipeline import make_pipeline
from sklearn.svm import LinearSVC
import csv
import sys

# Load the data
data = []
with open(r'/Users/qandilafa/Downloads/ai hamed/dataset.csv', newline='') as f:
    reader = csv.reader(f)
    data = list(reader)

# Create a DataFrame
df = pd.DataFrame(data, columns=["question", "answer"])

# Split into features and target
X = df["question"]
y = df["answer"]

# Create a text processing and classification pipeline
pipeline = make_pipeline(
    TfidfVectorizer(),
    LinearSVC()
)

# Train the model
pipeline.fit(X, y)

# Create Flask app
if len(sys.argv) > 1:
    question = sys.argv[1];
    prediction = pipeline.predict([question])[0]
    print(prediction)
else:
    print({})