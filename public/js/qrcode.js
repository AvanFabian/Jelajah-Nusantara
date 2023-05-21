var qrCode = new QRCode(document.getElementById("qrcode"), {
    text: "http://127.0.0.1:8000/home", // Replace with the desired content for the QR code
    width: 128,
    height: 128,
  });
  
  qrCode.makeCode();
  