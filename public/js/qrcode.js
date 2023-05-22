var qrCode = new QRCode(document.getElementById("qrcode"), {
    text: "https://github.com/AvanFabian/WebKebudayaan", // Replace with the desired content for the QR code
    width: 128,
    height: 128,
  });
  
  qrCode.makeCode();
  