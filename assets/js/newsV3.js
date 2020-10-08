document.getElementById("news-content").innerHTML = '<div style="margin: 0 auto;"><img src="assets/img/preloader.svg" /></div>';

var posts = document.getElementById('news-content');

axios
    .get('https://dash.robo-one.la/wp-json/wp/v2/posts?categories=2,5')
    .then(function (response) {
        document.getElementById("news-content").innerHTML = '';
        response.data.forEach(function (element) {
            var date = new Date(element.date);
            posts.innerHTML += `<div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
        <div class="card">
            <div>
            <img src="${element.jetpack_featured_media_url}" alt="${element.title.rendered}">
            </div>
        </div>
        </div>
        <div class="col-lg-8">
        <div class="text-gray">
            <h5 class="text-uppercase fw-600"><a href="/new.php?id=${element.id}">${element.title.rendered}</a></h5>
            <div class="small-3 mb-2">
            <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> ${date.getDate()}-${date.getMonth() + 1}-${date.getFullYear()}</span>
            </div>
            ${element.excerpt.rendered.substr(0, 200)}
        </div>
        </div>
    </div>
</div>`;
        });
    });