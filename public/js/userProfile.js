function selectImage() {
    const imageInput = document.getElementById('imageInput');
    imageInput.click();
  }
  
  document.getElementById('imageInput').addEventListener('change', function() {
    const file = this.files[0]; 
    uploadProfilePicture(file);
  });
  
  function uploadProfilePicture(file) {
    const formData = new FormData();
    formData.append('profilePicture', file);

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
  
    fetch('/uploadProfilePicture', {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the request headers
      },
      body: formData
    })
    .then(response => {
      if (response.ok) {
        console.log('Image uploaded successfully');
      } else {
        console.log('Image upload failed');
      }
    })
    // Upload the image without reloading the page
    .then(() => {
        // Create a URL from the file object
        const imageUrl = URL.createObjectURL(file);
        document.getElementById('profileImage').src = imageUrl;
    })
    .catch(error => {
      console.error('An error occurred:', error);
    });
  }
  