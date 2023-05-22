// Check if the current section is "tentang" and load the hardcoded content
window.addEventListener('DOMContentLoaded', function() {
    // Get the current island from data-island
    const currentIsland = document.querySelector('.nav__menu a.menu--active').dataset.island;
    console.log("currentIsland = " + currentIsland);
    if (currentIsland === 'jawa') {
        const tentangSection = document.getElementById('kontainer');
        tentangSection.innerHTML = getHardcodedTentangContentJawa(currentIsland);
    }
    else if (currentIsland === 'bali') {
        const tentangSection = document.getElementById('kontainer');
        tentangSection.innerHTML = getHardcodedTentangContentBali(currentIsland); 
    }
    else if (currentIsland === 'sumatera') {
        const tentangSection = document.getElementById('kontainer');
        tentangSection.innerHTML = getHardcodedTentangContentSumatera(currentIsland);   
    }
    else if (currentIsland === 'kalimantan') {
        const tentangSection = document.getElementById('kontainer');
        tentangSection.innerHTML = getHardcodedTentangContentKalimantan(currentIsland);
    }
    else if (currentIsland === 'sulawesi') {
        const tentangSection = document.getElementById('kontainer');
        tentangSection.innerHTML = getHardcodedTentangContentSulawesi(currentIsland);
    }
    else if (currentIsland === 'papua') {
        const tentangSection = document.getElementById('kontainer');
        tentangSection.innerHTML = getHardcodedTentangContentPapua(currentIsland);
    }
});

document.querySelectorAll('.nav__menu a').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        // Remove active class from current active link
        const activeLink = document.querySelector('.nav__menu a.menu--active');
        activeLink.classList.remove('menu--active');
        // Add active class to clicked link
        this.classList.add('menu--active');
        // Get link data-island value
        const currentIsland = link.dataset.island;
        // Get link html value and remove any spaces and lowercase it
        const currentNavLinks = link.innerHTML.replace(/\s+/g, '').toLowerCase();
        loadContent(currentIsland, currentNavLinks);
    });
});

function loadContent(currentIsland, currentNavLinks) {
    if (currentNavLinks === 'tentang') {
        // Directly set the hardcoded "tentang" section
        const tentangSection = document.getElementById('kontainer');
        if (currentIsland === 'jawa') {
            tentangSection.innerHTML = getHardcodedTentangContentJawa(currentIsland);
        }
        else if (currentIsland === 'bali') {
            tentangSection.innerHTML = getHardcodedTentangContentBali(currentIsland); 
        }
        else if (currentIsland === 'sumatera') {
            tentangSection.innerHTML = getHardcodedTentangContentSumatera(currentIsland);   
        }
        else if (currentIsland === 'kalimantan') {
            tentangSection.innerHTML = getHardcodedTentangContentKalimantan(currentIsland);
        }
        else if (currentIsland === 'sulawesi') {
            tentangSection.innerHTML = getHardcodedTentangContentSulawesi(currentIsland);
        }
        else if (currentIsland === 'papua') {
            tentangSection.innerHTML = getHardcodedTentangContentPapua(currentIsland);
        }
        return;
    }
    // Perform an AJAX fetch request to retrieve the content data from the server
    fetch(`/pulau/${currentIsland}/content/${currentNavLinks}`)
    .then(response => response.json())
    .then(data => {
            // Replace the content of the "kontainer" section
            const kontainerSection = document.getElementById('kontainer');
            kontainerSection.innerHTML = ''; // Clear existing content
            kontainerSection.innerHTML = generateHTML(data, currentIsland);
        })
        .catch(error => {
            console.error('Error:', error);
        });
}

function generateHTML(data, currentIsland) {
    // Generate the HTML for the content using the fetched data
    let html = `
        <div class="bg-curve" style="background-image: url('${getBackgroundImageURL(currentIsland)}');"></div>
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

function getBackgroundImageURL(currentIsland) {
    if (currentIsland === 'jawa') {
        return '/images/mainContent/jawa/img/core-img/curve.png';
    }
    else if (currentIsland === 'bali') {
        return '/images/mainContent/bali/img/core-img/curve.png';
    }
    else if (currentIsland === 'sumatera') {
        return '/images/mainContent/sumatera/img/core-img/curve.png';
    }
    else if (currentIsland === 'kalimantan') {
        return '/images/mainContent/kalimantan/img/core-img/curve.png';
    }
    else if (currentIsland === 'sulawesi') {
        return '/images/mainContent/sulawesi/img/core-img/curve.png';
    }
    else if (currentIsland === 'papua') {
        return '/images/mainContent/papua/img/core-img/curve.png';
    }
}

function getHardcodedTentangContentJawa(island) {
    return `
        <div class="bg-curve" style="background-image: url('${getBackgroundImageURL(island)}');">
        </div>
        <div class="gallery__page">
        <div class="gallery__warp float-element" id="popup">
            <div class="row">
                <div class="frame">
                    <h1 class="animated-text" style="text-align: center; font-family: 'Lobster', cursive; color: #9E6F21    ;">
                    Selamat Datang di <br><span class="">Pulau Jawa</span></h1>

                    <p class="description" style="font-size: 20px; font-family: Helvetica Neue", Arial, sans-serif;">
                    Selamat datang di Pulau Jawa, tempat di mana keindahan budaya, sejarah yang kaya, dan pesona alam yang
                    menawan bergabung
                    dalam harmoni yang memukau. Di sini, kami mengajak Anda untuk menjelajahi kekayaan dan keunikan Pulau
                    Jawa.
                    <br>
                    <br>

                    Pulau Jawa adalah pusat kehidupan dan kegiatan di Indonesia. Dengan beragam suku etnis, Pulau Jawa
                    menawarkan budaya yang kaya dan beragam.
                    Anda dapat menemukan keindahan tari-tarian tradisional seperti Tari Gambyong dari Jawa Tengah, Tari
                    Reog Ponorogo dari Jawa Timur, '
                    atau Tari Kuda Lumping dari Jawa Barat. Setiap gerakan tari menggambarkan cerita dan nilai-nilai yang
                    terkandung dalam budaya Pulau Jawa.
                    <br>
                    <br>

                    Selain kekayaan budaya, Pulau Jawa juga memiliki sejarah yang sangat berharga.
                    Kota-kota seperti Yogyakarta dengan Keraton Ngayogyakarta Hadiningratnya, Solo dengan Kasunanan
                    Surakarta, dan
                    Semarang dengan kawasan Kota Lama, merupakan saksi bisu kejayaan kerajaan dan peninggalan sejarah yang
                    memukau.
                    Anda dapat menjelajahi Candi Borobudur, Candi Prambanan, atau Candi Sukuh yang merupakan peninggalan
                    agung dari masa lalu.
                    Sejarah Pulau Jawa akan membawa Anda dalam perjalanan yang mengesankan.
                    <br>
                    <br>

                    Tidak hanya itu, Pulau Jawa juga menyimpan keajaiban alam yang luar biasa. Anda dapat menikmati
                    keindahan Gunung Bromo di Jawa Timur,
                    menikmati keindahan pantai-pantai yang mempesona seperti Pantai Parangtritis di Yogyakarta, atau
                    menjelajahi kawasan pegunungan hijau
                    seperti Dieng Plateau di Jawa Tengah. Pesona alam Pulau Jawa akan membuat Anda terpesona dan
                    terinspirasi.
                    <br>
                    <br>

                    Dengan senang hati kami mengundang Jentarian untuk menjelajahi keindahan dan pesona Pulau Jawa.
                    Nikmati kekayaan budayanya, terpesona dengan sejarahnya, dan kagumi keindahan alamnya.
                    Semoga Penjelajahan di Pulau Jawa membawa kenangan tak terlupakan dan membuka wawasan baru tentang
                    keindahan negeri ini.
                    <br>
                    <br>

                    Salam hangat dari kami, JentTeam, yang menghargai keberagaman budaya dan kekayaan Pulau Jawa.
                    Kami berharap Anda menikmati pengalaman yang luar biasa dan menemukan keajaiban yang ada di Pulau
                    Jawa.

                    <h1 class="penutup"
                    style="text-align: center; font-size: 30px; color: #CBB279; font-family: 'Helvetica Neue', Arial, sans-serif;">
                    Nikmati Penjelajahan Budaya Bersama JENTARA</h1>

                    </p>
                    <p>
                    <!-- Salam hangat dari kami, pembuat web ini, yang turut mengapresiasi keberagaman budaya dan kekayaan Pulau Sumatera. Kami berharap Anda menikmati pengalaman yang luar biasa dan mendapatkan wawasan baru yang memperkaya jiwa. Selamat menjelajah! -->
                    </p>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    `
}
function getHardcodedTentangContentBali(island){
    return `
        <div class="bg-curve" style="background-image: url('${getBackgroundImageURL(island)}');">
        </div>
        <div class="gallery__page">
        <div class="gallery__warp float-element" id="popup">
            <div class="row">
                <div class="frame">
                    <h1 class="animated-text" style="text-align: center; font-family: 'Lobster', cursive; color: #9E6F21    ;">
                    Selamat Datang di <br><span class="">Pulau Dewata Bali</span></h1>

                    <p class="description" style="font-size: 20px; font-family: Helvetica Neue", Arial, sans-serif;">
                    Selamat datang di Pulau Bali, tempat di mana keajaiban budaya, legenda yang mempesona, dan tarian
                    tradisional
                    yang memikat bergabung dalam harmoni yang menakjubkan. Di sini, kami mengajak Anda untuk menjelajahi
                    kekayaan
                    dan keunikan budaya Pulau Bali.
                    <br>
                    <br>
                    Dalam setiap gerakan tari tradisional yang anggun, Pulau Bali menghidupkan cerita-cerita lama yang
                    penuh makna.
                    Melalui tarian-tarian seperti Tari Barong, Tari Legong, dan Tari Kecak, kita bisa merasakan getaran
                    sejarah yang
                    terjalin dengan lekatnya dalam setiap gerakan. Tari tradisional Pulau Bali adalah wujud nyata
                    keindahan dan kearifan
                    budaya yang diwariskan dari generasi ke generasi.
                    <br>
                    <br>
                    Selain tarian tradisional yang memikat, Pulau Bali juga terkenal dengan legenda-legenda yang
                    melegenda.
                    Cerita-cerita seperti Legenda Raja Gede Macaling dan Legenda Tanah Lot menjadikan Pulau Bali sebagai
                    tempat yang sarat
                    dengan mitos dan cerita rakyat yang menarik.
                    <br>
                    <br>
                    Tidak hanya itu, budaya unik yang ada di Pulau Bali juga patut disaksikan. Dari upacara adat yang kaya
                    akan nilai-nilai
                    keagamaan hingga seni ukir, anyaman, dan tenun tradisional, budaya Pulau Bali adalah cerminan dari
                    keindahan dan kekayaan
                    masyarakatnya. Melalui seni pahat, seni patung, dan kerajinan lainnya, Pulau Bali mengajarkan
                    nilai-nilai kesakralan, keindahan, dan kearifan lokal.
                    <br>
                    <br>
                    Dengan senang hati kami mengundang Anda untuk menjelajahi keindahan dan pesona Pulau Bali. Nikmati
                    tarian tradisional yang memukau,
                    ikuti jejak legenda yang mempesona, dan saksikan keunikan budaya yang tidak akan terlupakan. Semoga
                    perjalanan Anda di Pulau Bali
                    membawa kenangan tak terlupakan dan menjadikan Anda semakin terkagum-kagum dengan keindahan negeri
                    ini.
                    Salam hangat dari kami, pembuat web ini, yang turut mengapresiasi keberagaman budaya dan kekayaan
                    Pulau Bali. Kami berharap Anda menikmati pengalaman yang luar biasa dan mendapatkan wawasan baru yang
                    memperkaya jiwa.


                    <h1 class="penutup"
                    style="text-align: center; font-size: 30px; color: #CBB279; font-family: 'Helvetica Neue', Arial, sans-serif;">
                    Nikmati Penjelajahan Budaya Bersama JENTARA</h1>

                    </p>
                    <p>
                    <!-- Salam hangat dari kami, pembuat web ini, yang turut mengapresiasi keberagaman budaya dan kekayaan Pulau Sumatera. Kami berharap Anda menikmati pengalaman yang luar biasa dan mendapatkan wawasan baru yang memperkaya jiwa. Selamat menjelajah! -->
                    </p>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    `
}
function getHardcodedTentangContentSumatera(island){
    return `
        <div class="bg-curve"
        style="background-image: url('${getBackgroundImageURL(island)}');"></div>
        <div class="gallery__page">
            <div class="gallery__warp float-element" id="popup">
            <div class="row">
                <div class="frame">
                    <h1 class="animated-text" style="text-align: center; font-family: 'Lobster', cursive; color: #9E6F21    ;">
                        Selamat Datang di <br><span class="">Pulau Sumatera</span></h1>

                    <p class="description" style="font-size: 20px; font-family: Helvetica Neue", Arial, sans-serif;">
                        Selamat datang di Pulau Sumatera, tempat di mana keajaiban budaya,
                        legenda yang mempesona, dan tarian tradisional yang memikat bergabung dalam harmoni yang menakjubkan.
                        Di sini, kami mengajak Anda untuk menjelajahi kekayaan dan keunikan budaya Pulau Sumatera.

                        <br>
                        <br>

                        Dalam setiap gerakan tari tradisional yang anggun, Pulau Sumatera menghidupkan cerita-cerita lama yang
                        penuh makna.
                        Melalui tarian-tarian seperti Tari Piring Minangkabau, Tari Zapin Melayu, dan Tari Sigale-Gale Batak,
                        kita bisa merasakan getaran sejarah yang terjalin dengan lekatnya dalam setiap gerakan.
                        Tari tradisional Pulau Sumatera adalah wujud nyata keindahan dan kearifan budaya yang diwariskan dari
                        generasi ke generasi.

                        <br>
                        <br>

                        Selain tarian tradisional yang memikat, Pulau Sumatera juga terkenal dengan legenda-legenda yang
                        melegenda.
                        Cerita-cerita seperti Legenda Danau Toba yang mengisahkan asal-usul danau terbesar di Asia Tenggara,
                        atau Legenda Keris Pusaka yang menceritakan tentang kekuatan mistis keris,
                        menjadikan Pulau Sumatera sebagai tempat yang sarat dengan mitos dan cerita rakyat yang menarik.

                        <br>
                        <br>

                        Tidak hanya itu, budaya unik yang ada di Pulau Sumatera juga patut disaksikan.
                        Dari tradisi adat yang kuat dan terjaga hingga kerajinan tangan yang kreatif dan mengagumkan,
                        budaya Pulau Sumatera adalah cerminan dari keragaman dan kekayaan masyarakatnya. Melalui seni ukir,
                        anyaman, tenun, dan beragam
                        kerajinan lainnya, Pulau Sumatera mengajarkan nilai-nilai kebersamaan, keindahan, dan kearifan lokal.

                        <br>
                        <br>

                        Dengan senang hati kami mengundang Anda untuk menjelajahi keindahan dan pesona Pulau Sumatera.
                        Nikmati tarian tradisional yang memukau, ikuti jejak legenda yang mempesona, dan saksikan keunikan
                        budaya yang tidak akan terlupakan.
                        Semoga perjalanan Anda di Pulau Sumatera membawa kenangan tak terlupakan dan menjadikan Anda semakin
                        terkagum-kagum dengan keindahan negeri ini.
                        <br>
                        <br>
                        Salam hangat dari kami, JentTeam, yang turut mengapresiasi keberagaman budaya dan kekayaan Pulau
                        Sumatera.
                        <br>Kami berharap Anda menikmati pengalaman yang luar biasa dan mendapatkan wawasan baru yang
                        memperkaya jiwa.
                    <h1 class="penutup"
                        style="text-align: center; font-size: 30px; color: #CBB279; font-family: 'Helvetica Neue', Arial, sans-serif;">
                        Nikmati Penjelajahan Budaya Bersama JENTARA</h1>

                    </p>
                    <p>
                        <!-- Salam hangat dari kami, pembuat web ini, yang turut mengapresiasi keberagaman budaya dan kekayaan Pulau Sumatera. Kami berharap Anda menikmati pengalaman yang luar biasa dan mendapatkan wawasan baru yang memperkaya jiwa. Selamat menjelajah! -->
                    </p>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    `
}
function getHardcodedTentangContentKalimantan(island){
    return `
        <div class="bg-curve"
        style="background-image: url('${getBackgroundImageURL(island)}');"></div>
        <div class="gallery__page">
            <div class="gallery__warp float-element" id="popup">
            <div class="row">
                <div class="frame">
                    <h1 class="animated-text" style="text-align: center; font-family: 'Lobster', cursive; color: #9E6F21    ;">
                        Selamat Datang di <br><span class="">Pulau Kalimantan</span></h1>

                    <p class="description" style="font-size: 20px; font-family: Helvetica Neue", Arial, sans-serif;">
                        Selamat datang di Pulau Kalimantan, tempat di mana keajaiban budaya, keindahan alam, dan kekayaan
                        etnisitas bermekaran
                        dalam harmoni yang mempesona. Di sini, kami mengajak Anda untuk menjelajahi pesona dan keunikan Pulau
                        Kalimantan.
                        <br>
                        <br>
                        Pulau Kalimantan dikenal dengan keindahan alamnya yang menakjubkan. Dari hutan hujan tropis yang lebat
                        hingga gunung-gunung
                        yang menjulang tinggi, Pulau Kalimantan menawarkan pengalaman petualangan yang luar biasa. Anda dapat
                        menjelajahi Taman Nasional
                        Tanjung Puting, tempat melihat orangutan liar, atau mendaki Gunung Kinabalu, salah satu puncak
                        tertinggi di Asia Tenggara.
                        Keindahan alam Pulau Kalimantan akan memukau hati dan merasuk ke dalam jiwa Anda.
                        <br>
                        <br>
                        Tidak hanya alamnya yang menakjubkan, Pulau Kalimantan juga kaya akan budaya dan tradisi yang beragam.
                        Setiap suku etnis di Pulau Kalimantan memiliki keunikan dan kekayaan budaya tersendiri. Dari suku
                        Dayak
                        yang memiliki tradisi adat yang kuat hingga suku Banjar yang terkenal dengan seni tari dan musiknya,
                        keberagaman
                        budaya Pulau Kalimantan adalah sebuah keajaiban yang harus Anda eksplorasi.
                        <br>
                        <br>

                        Dengan senang hati kami mengundang Anda untuk menjelajahi keindahan dan pesona Pulau Kalimantan.
                        Nikmati keajaiban alamnya dan ikuti jejak kekayaan budayanya. Semoga Penjelajahan Anda di Pulau
                        Kalimantan
                        membawa kenangan tak terlupakan dan memperkaya pengalaman hidup Anda.
                        <br>
                        <br>
                        Salam hangat dari kami, JentTeam, yang turut mengapresiasi keberagaman budaya dan kekayaan Pulau
                        Kalimantan.
                        Kami berharap Anda menikmati pengalaman yang luar biasa dan menemukan keindahan yang ada di Pulau
                        Kalimantan.

                    <h1 class="penutup"
                        style="text-align: center; font-size: 30px; color: #CBB279; font-family: 'Helvetica Neue', Arial, sans-serif;">
                        Nikmati Penjelajahan Budaya Bersama JENTARA</h1>

                    </p>
                    <p>
                        <!-- Salam hangat dari kami, pembuat web ini, yang turut mengapresiasi keberagaman budaya dan kekayaan Pulau Sumatera. Kami berharap Anda menikmati pengalaman yang luar biasa dan mendapatkan wawasan baru yang memperkaya jiwa. Selamat menjelajah! -->
                    </p>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    `
}
function getHardcodedTentangContentSulawesi(island){
    return `
        <div class="bg-curve"
        style="background-image: url('${getBackgroundImageURL(island)}');"></div>
        <div class="gallery__page">
            <div class="gallery__warp float-element" id="popup">
            <div class="row">
                <div class="frame">
                    <h1 class="animated-text" style="text-align: center; font-family: 'Lobster', cursive; color: #9E6F21    ;">
                        Selamat Datang di <br><span class="">Pulau Sulawesi</span></h1>

                    <p class="description" style="font-size: 20px; font-family: Helvetica Neue", Arial, sans-serif;">
                        Selamat datang di Pulau Sulawesi, tempat di mana keindahan alam yang menakjubkan, budaya yang kaya,
                        dan tradisi yang unik bergabung dalam harmoni yang memukau. Di sini, kami mengajak Anda untuk
                        menjelajahi kekayaan dan pesona Pulau Sulawesi.
                        <br>
                        <br>

                        Pulau Sulawesi terkenal dengan keindahan alamnya yang memikat. Dari pemandangan pegunungan yang
                        menjulang
                        tinggi hingga pantai-pantai yang menakjubkan, Pulau Sulawesi menawarkan pengalaman alam yang luar
                        biasa.
                        Anda dapat menikmati keindahan Taman Nasional Bunaken di Manado, menjelajahi kekayaan terumbu karang
                        di Taman Nasional Wakatobi,
                        atau menjelajahi hutan tropis yang lebat di Taman Nasional Lore Lindu. Keindahan alam Pulau Sulawesi
                        akan memukau mata dan menyentuh hati Anda.
                        <br>
                        <br>

                        Selain keindahan alamnya, Pulau Sulawesi juga memiliki budaya yang kaya dan beragam. Suku-suku etnis
                        seperti suku Toraja,
                        suku Bugis, dan suku Makassar memiliki tradisi dan adat istiadat yang unik. Anda dapat menyaksikan
                        upacara adat tradisional,
                        seperti Rambu Solo' di Tana Toraja yang merupakan upacara pemakaman unik, atau melihat seni dan
                        kerajinan tangan khas
                        seperti tenun ikat, patung kayu, dan ukiran tradisional. Budaya Pulau Sulawesi akan membawa Anda dalam
                        perjalanan yang
                        memperkaya pengetahuan dan pengalaman.
                        <br>
                        <br>

                        Dengan senang hati kami mengundang Anda untuk menjelajahi keindahan dan pesona Pulau Sulawesi.
                        Nikmati kekayaan budayanya sekaligus terpesona dengan keindahan alamnya. Semoga Penjelajahan Anda di
                        Pulau Sulawesi
                        membawa kenangan tak terlupakan dan menginspirasi jiwa Anda.
                        <br>
                        <br>

                        Salam hangat dari kami, JentTeam, yang menghargai keberagaman budaya dan kekayaan Pulau Sulawesi.
                        Kami berharap Anda menikmati pengalaman yang luar biasa dan menemukan keajaiban yang ada di Pulau
                        Sulawesi.

                    <h1 class="penutup"
                        style="text-align: center; font-size: 30px; color: #CBB279; font-family: 'Helvetica Neue', Arial, sans-serif;">
                        Nikmati Penjelajahan Budaya Bersama JENTARA</h1>

                    </p>
                    <p>
                        <!-- Salam hangat dari kami, pembuat web ini, yang turut mengapresiasi keberagaman budaya dan kekayaan Pulau Sumatera. Kami berharap Anda menikmati pengalaman yang luar biasa dan mendapatkan wawasan baru yang memperkaya jiwa. Selamat menjelajah! -->
                    </p>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    `
}
function getHardcodedTentangContentPapua(island){
    return `
        <div class="bg-curve" style="background-image: url('${getBackgroundImageURL(island)}');">
        </div>
        <div class="gallery__page">
        <div class="gallery__warp float-element" id="popup">
            <div class="row">
                <div class="frame">
                    <h1 class="animated-text" style="text-align: center; font-family: 'Lobster', cursive; color: #9E6F21    ;">
                    Selamat Datang di <br><span class="">Pulau New Geunea Papua</span></h1>

                    <p class="description" style="font-size: 20px; font-family: Helvetica Neue", Arial, sans-serif;">
                    Selamat datang di Pulau Papua, tempat di mana keindahan alam yang menakjubkan, keanekaragaman budaya,
                    dan warisan adat yang kaya bersatu dalam harmoni yang mempesona. Di sini, kami mengajak Anda untuk
                    menjelajahi kekayaan dan pesona Pulau Papua.
                    <br>
                    <br>

                    Pulau Papua adalah surga bagi pecinta alam dan petualangan. Dari hutan hujan tropis yang lebat hingga
                    pegunungan menjulang tinggi,
                    Pulau Papua menawarkan keindahan alam yang memukau. Anda dapat menjelajahi Taman Nasional Lorentz,
                    situs Warisan Dunia UNESCO,
                    yang mencakup gunung-gunung tertinggi di Indonesia dan hutan yang tak tertandingi. Anda juga dapat
                    mengeksplorasi Raja Ampat,
                    surganya dunia bawah laut dengan terumbu karang yang spektakuler. Keindahan alam Pulau Papua akan
                    memukau mata dan menyentuh jiwa Anda.
                    <br>
                    <br>

                    Selain keindahan alamnya, Pulau Papua juga kaya dengan budaya yang beragam. Pulau ini adalah rumah
                    bagi berbagai suku etnis,
                    seperti suku Dani, suku Asmat, dan suku Lani, yang mempertahankan tradisi dan adat istiadat mereka.
                    Anda dapat menyaksikan tarian tradisional yang memukau sekaligus mengagumi seni patung kayu dan
                    ukiran.
                    Keanekaragaman budaya Pulau Papua akan memperkaya pengalaman Anda dan memberikan pemahaman yang
                    mendalam tentang warisan manusia.
                    <br>
                    <br>

                    Dengan senang hati kami mengundang Anda untuk menjelajahi keindahan dan pesona Pulau Papua.
                    Nikmati kekayaan budayanya dan terpesona dengan keindahan alamnya.
                    Semoga Penjelajahan Anda di Pulau Papua membawa kenangan tak terlupakan dan memberikan inspirasi baru
                    dalam hidup Anda.
                    <br>
                    <br>

                    Salam hangat dari kami,JentTeam, yang menghargai keberagaman budaya dan kekayaan Pulau Papua.
                    Kami berharap Anda menikmati pengalaman yang luar biasa dan menemukan keajaiban yang ada di Pulau
                    Papua.


                    <h1 class="penutup"
                    style="text-align: center; font-size: 30px; color: #CBB279; font-family: 'Helvetica Neue', Arial, sans-serif;">
                    Nikmati Penjelajahan Budaya Bersama JENTARA</h1>

                    </p>
                    <p>
                    <!-- Salam hangat dari kami, pembuat web ini, yang turut mengapresiasi keberagaman budaya dan kekayaan Pulau Sumatera. Kami berharap Anda menikmati pengalaman yang luar biasa dan mendapatkan wawasan baru yang memperkaya jiwa. Selamat menjelajah! -->
                    </p>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    `
}

