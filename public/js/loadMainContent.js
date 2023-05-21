document.querySelectorAll('.nav__menu a').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
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
            const section = document.getElementById(content);
            // Generate the HTML for the content using the fetched data
            const html = `
                <div class="bg-curve" style="background-image: url('{{ asset('images/mainContent/jawa/img/core-img/curve.png') }}');"></div>
                <div class="gallery__page">
                    <div class="gallery__warp float-element" id="popup">
                        <div class="row">
                            <!-- konten 1 -->
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <a class="gallery__item fresco" href="${data.ytLink}" data-fresco-group="gallery" data-fancybox title="${data.title}">
                                    <img src="${data.thumbnailLink}" alt="Video Thumbnail">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            // Set the generated HTML as the content of the section
            section.innerHTML = html;
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
// console.log("LINK NAVBAR :"); 
// console.log(link);
// console.log("ISLAND :");
// console.log(island);
// console.log("CONTENT :");
// console.log(content);
