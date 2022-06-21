const baseURL = $('#baseURL');

$('#searchBar').on('input', function(e) {
    const searchLength = $(this).val().length;
    const MIN_INPUT = 3;

    if (searchLength === MIN_INPUT) {
        setTimeout(() => {
            const limit = 10;
            const searchValue = $(this).val();
    
            const templateHTML = (url, title) => {
                return `
                <div>
                    <a href="${url}" target="_blank">${title}</a>
                </div>
                `
            }
    
            $.ajax({
                method: "GET",
                url: "https://api.jikan.moe/v4/anime",
                data: {
                    q: searchValue,
                    limit: limit,
                },
                success: (animeResult) => {
                    const {data} = animeResult;
    
                    $('.list-anime').empty();
    
                    data.forEach(v => {
                        let url = v.url;
                        let title = v.title;
    
                        const HTML = templateHTML(url, title)
    
                        $('.list-anime').append(HTML);
                    });
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    let errorStatus = `${textStatus} : ${errorThrown}` 

                    console.error(errorStatus)
                }
            })
        }, 1000);   
    }
})