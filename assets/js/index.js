const baseURL = $('#baseURL').val();

const templateHTML = (url, title, img) => {
    return `
    <div class="item">
        <div class="image">
            <img src="${img}" alt="${title}" height="55px">
        </div>
        
        <div class="title">
            <a href="${url}" target="_blank">
                ${title}
            </a>
        </div>
    </div>
    `
}

$('.search-bar-input input').one('click', () => {
    const filter = "airing";
    const limit = 10;

    $('.search-bar-result').show();

    $.ajax({
        method: "GET",
        url: `https://api.jikan.moe/v4/top/anime`,
        data: {
            filter: filter,
            limit: limit,
        },
        success: (animeResult) => {
            const {data} = animeResult;

            data.forEach(v => {
                let url = baseURL + "anime/" + v.mal_id;
                let title = v.title;
                let img = v.images.webp.large_image_url;

                const HTML = templateHTML(url, title, img);
                
                $('.search-bar-result').append(HTML);

                $('.search-bar-input input').addClass("remove-bottom-border-radius");
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
            let errorStatus = `${textStatus} : ${errorThrown}`;

            console.error(errorStatus)
        }
    })
})

$('.search-bar-input input').on('input', function(e) {
    const limit = 10;
    const searchValue = $(this).val();

    if (searchValue === "") return;

    clearTimeout(this.delay);

    this.delay = setTimeout(function(){
        $.ajax({
            method: "GET",
            url: "https://api.jikan.moe/v4/anime",
            data: {
                q: searchValue,
                limit: limit,
            },
            success: (animeResult) => {
                const {data} = animeResult;
                
                $('.search-bar-result').empty();

                data.forEach(v => {
                    let url = baseURL + "anime/" + v.mal_id;
                    let title = v.title;
                    let img = v.images.webp.large_image_url;

                    const HTML = templateHTML(url, title, img);

                    $('.search-bar-result').append(HTML);
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                let errorStatus = `${textStatus} : ${errorThrown}`;

                console.error(errorStatus)
            }
        })
        
    }.bind(this), 500);
})