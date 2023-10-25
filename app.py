import africastalking

# Your Africa's Talking API key and username
api_key = 'ivyleagueapp'
username = 'fa81951a916c2a2ed9bb97e1791277b6a6018e700a3e90e3c70114926363edd1'

# Create an Africa's Talking client
africastalking.initialize(api_key, username)
sms = africastalking.SMS

# Send an SMS message
message = "Hello from Python and Africa's Talking!"
recipients = ["+254796023689"]
response = sms.send(message, recipients)

# Print the response
print(response)