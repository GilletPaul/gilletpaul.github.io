import qrcode

# URL of the webpage
url = "https://gilletpaul.github.io/"

# Generate QR Code
qr = qrcode.make(url)

# Save the QR code image
qr.save("webpage_qr.png")
