function renderSinglePost(fetchUrl) {
    axios.get(fetchUrl)
        .then(function (response) {
            var element = response.data;

            if (Array.isArray(response.data)) {
                element = response.data[0]
            }

            console.log("element", element)

            var date = new Date(element.date)
            date = date.getDate().toString() + "-" + (date.getMonth() + 1).toString() + "-" + date.getFullYear().toString()
            document.getElementById('new-title').innerHTML = element.title.rendered
            document.getElementById('new-author').innerHTML += 'Robo One'
            document.getElementById('new-date').innerHTML += date;
            document.getElementById('new-content').innerHTML = element.content.rendered
            document.getElementById('new-image').innerHTML = '<img src="' + element.jetpack_featured_media_url + '" width="100%" alt="Robo One">';
        });
}

function renderTournaments(fetchUrl) {
    var lastCompetitions = document.getElementById('last-competitions-items');

    axios.get(fetchUrl)
        .then(function (response) {
            Object.values(response.data)
                .map(function (element) {
                    lastCompetitions.innerHTML += `<div class="col-md-6 col-lg-12">
                    <!-- news-item -->
                    <div class="news-item">
                      <div class="row no-gutters">
                        <div class="col-lg-5 mb-5 mb-lg-0">
                          <div class="rounded overflow-h">
                            <div>
                              <img src="${element.jetpack_featured_media_url}" alt="Robo One">
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <div class="text-gray pl-lg-3">
                            <div class="lh-1"><a href="#" class="badge badge-secondary mb-2">Robo One</a></div>
                            <h6 class="text-uppercase mb-0 small-2 fw-400"><a href="?id=${element.id}">${element.title.rendered}</a></h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.news-item -->
                  </div>`
                })
        });
}