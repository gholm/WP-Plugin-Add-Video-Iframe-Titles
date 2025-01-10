document.addEventListener("DOMContentLoaded", function () {
    const iframes = document.querySelectorAll("iframe");

    iframes.forEach((iframe) => {
        const src = iframe.src;

        // Handle YouTube
        if (src.includes("youtube.com/embed/") || src.includes("youtube-nocookie.com/embed/")) {
            const videoId = src.split("/embed/")[1]?.split("?")[0];
            if (videoId) {
                fetch(`https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=${videoId}&format=json`)
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.title) {
                            iframe.setAttribute("title", data.title);
                        }
                    })
                    .catch((error) => console.error("Error fetching YouTube title:", error));
            }
        }

        // Handle Vimeo
        if (src.includes("player.vimeo.com/video/")) {
            const videoId = src.split("/video/")[1]?.split("?")[0];
            if (videoId) {
                fetch(`https://vimeo.com/api/oembed.json?url=https://vimeo.com/${videoId}`)
                    .then((response) => response.json())
                    .then((data) => {
                        if (data.title) {
                            iframe.setAttribute("title", data.title);
                        }
                    })
                    .catch((error) => console.error("Error fetching Vimeo title:", error));
            }
        }
    });
});
