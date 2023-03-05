const url = "https://www.googleapis.com/blogger/v3/blogs/1383530952145414934/posts?key=AIzaSyBF1EzuTYPxaywlsYZAzCC7H4Zxw6j7XbQ";

const xhr = new XMLHttpRequest();

xhr.open("GET", url, true);

xhr.onload = function () {
    if (xhr.status === 200) {
        const response = JSON.parse(xhr.responseText);
        const posts = response.items.slice(0, 4); // Obtener los primeros 4 elementos del array
        
        console.log(posts);

        function createPostCard(post) {
            return `
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card feed-card h-100">
                        <img src="${post.content.match(/src="(.*?)"/)[1]}" alt="Post Image" class="feed-card-img card-img-top">
                        <div class="card-body">
                            <h4 class="card-text">${post.title}</h4>
                            <a href="${post.url}" target="_blank" class="btn btn-outline-primary btn-sm feed-btn">Leer más</a>
                        </div>
                    </div>
                </div>
            `;
        }

        const postCardsContainer = document.querySelector('#post-cards');
        for (const post of posts) {
            postCardsContainer.insertAdjacentHTML('beforeend', createPostCard(post));
        }
    }
};

xhr.send();
