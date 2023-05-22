document.querySelectorAll('.nav__menu a').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        // Remove active class from current active link
        const activeLink = document.querySelector('.nav__menu a.active');
        activeLink.classList.remove('active');
        // Add active class to clicked link
        this.classList.add('active');
        // Get link data-island value
        const island = link.dataset.island;
        // Get link html value and remove any spaces and lowercase it
        const content = link.innerHTML.replace(/\s+/g, '').toLowerCase();
        loadContent(island, content);
    });
});

function loadContent(island, content) {
    // Perform an AJAX fetch request to retrieve the content data from the server
    fetch(`/pulau/${island}/content/${content}`)
    .then(response => response.json())
    .then(data => {
            // Replace the content of the "tentang" section
            const tentangSection = document.getElementById('tentang');
            tentangSection.innerHTML = ''; // Clear existing content
            tentangSection.innerHTML = generateHTML(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function generateHTML(data) {
    // Generate the HTML for the content using the fetched data
    let html = `
        <div class="bg-curve" style="background-image: url('{{ asset('images/mainContent/jawa/img/core-img/curve.png') }}');"></div>
        <div class="gallery__page">
            <div class="gallery__warp float-element" id="popup">
                <div class="row">
    `;
    // Generate the HTML for each item in the data
    data.forEach(item => {
        html += `
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="gallery__item fresco" href="${item.ytLink}" data-fresco-group="gallery" data-fancybox title="${item.title}">
                    <img src="${item.thumbnailLink}" alt="Video Thumbnail">
                    <i class="fa fa-play" aria-hidden="true"></i>
                </a>
            </div>
        `;
    });
        html += `
                </div>
            </div>
        </div>
        `;

    return html;
}
// With this updated code, when visiting an island page, the "Tentang" link will have the active class by default. When you click on other links, the active class will be removed from the current active link and added to the clicked link. The content of the "tentang" section will be dynamically replaced with the generated content based on the clicked link's data.

// console.log("LINK NAVBAR :"); 
// console.log(link);
// console.log("ISLAND :");
// console.log(island);
// console.log("CONTENT :");
// console.log(content);
// <!-- konten 1 -->
// <div class="col-lg-3 col-md-4 col-sm-6">
//     <a class="gallery__item fresco" href="${data.ytLink}" data-fresco-group="gallery" data-fancybox title="${data.title}">
//         <img src="${data.thumbnailLink}" alt="Video Thumbnail">
//         <i class="fa fa-play" aria-hidden="true"></i>
//     </a>
// </div>
