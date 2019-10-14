document.getElementById("news-content").innerHTML = '<div style="margin: 0 auto;"><img src="assets/img/preloader.svg" /></div>';var fetchUrl="https://dashboard.robo-one.cl",headers=new Headers,options={method:"GET",headers:headers};fetch(fetchUrl+"/news/api",options).then(e=>e.json()).then(e=>{var n=Object.values(e).reverse(),a=document.getElementById("news-content");a.innerHTML='';n.map(e=>{var n=new Date(e.created);n=n.getDate().toString()+"-"+(n.getMonth()+1).toString()+"-"+n.getFullYear().toString(),a.innerHTML+=`\n                <div class="news-item col-12 mb-4">\n                    <div class="row">\n                        <div class="col-lg-4 mb-5 mb-lg-0">\n                        <div class="card">\n                            <div>\n                            <img src="${e.image}" alt="${e.title}">\n                            </div>\n                        </div>\n                        </div>\n                        <div class="col-lg-8">\n                        <div class="text-gray">\n                            <h5 class="text-uppercase fw-600"><a href="/new?id=${e.id}">${e.title}</a></h5>\n                            <div class="small-3 mb-2">\n                            <span class="mr-2"><i class="fas fa-user-alt mr-1"></i> ${e.author}</span>\n                            <span class="mr-2"><i class="fas fa-calendar-alt mr-1"></i> ${n}</span>\n                            </div>\n                            <p>${e.content}</p>\n                        </div>\n                        </div>\n                    </div>\n                </div>\n                `})});