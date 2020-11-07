document.getElementById("posts").innerHTML = '<div style="margin: 0 auto;"><img src="/static/assets/front/assets/img/preloader.svg" /></div>';
var posts = document.getElementById('posts');
var data = {
  params: {
    categories: 2,
    per_page: 2,
  }
}
axios
  .get('https://dash.robo-one.la/wp-json/wp/v2/posts', data)
  .then(function (response) {
    document.getElementById("posts").innerHTML = '';
    response.data.forEach(function (element) {
      var date = new Date(element.date);
      posts.innerHTML += `<div class="col-12 mb-8">
              <div class="row">
                <div class="col-lg-4 mb-6 mb-lg-0">
                  <div class="card">
                    <div class="img__news_wrapper"><img src="${element.jetpack_featured_media_url}" alt="News"></div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <h4 class="text-uppercase mb-3"><a href="/news/${element.id}/">${element.title.rendered}</a></h4>
                  <div class="mb-3 small text-info">
                    <span><i class="fas fa-calendar-alt mr-1"></i> ${date.getDate()}-${date.getMonth() + 1}-${date.getFullYear()}</span>
                  </div>
                  ${element.excerpt.rendered.substr(0, 300)}
                </div>
              </div>
            </div>`;
    });
  });