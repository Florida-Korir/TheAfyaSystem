from flask import Flask, render_template, request
import africastalking

# Set your API key and username
username = 'YOUR_USERNAME'
api_key = 'YOUR_API_KEY'

# Initialize the Africas Talking SMS service
africastalking.initialize(username, api_key)
sms = africastalking.SMS

# Create a Flask app
app = Flask(__name__)

# Define the home page route
@app.route('/')
def home():
    return render_template('index.html')

# Define the send SMS route
@app.route('/send_sms', methods=['POST'])
def send_sms():
    # Get the phone number and message from the form
    to = request.form['phone']
    message = request.form['message']

    # Send the SMS message
    response = sms.send(message, [to])

    # Print the response
    return response

# Run the app
if __name__ == '__main__':
    app.run()