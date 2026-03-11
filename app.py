from flask import Flask

app = Flask(__name__)

@app.route("/")
def home():
    return "Sentiment Analysis API Running"