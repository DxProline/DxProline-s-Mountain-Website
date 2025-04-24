var fullImgBox;
var fullimg;
var currentImageIndex;
var imageSources = [];

document.addEventListener("DOMContentLoaded", function () {
    fullImgBox = document.getElementById("fullimgbox");
    fullimg = document.getElementById("fullimg");
    currentImageIndex = 0;

    imageSources = [
        "/Praxe_Web/produkty/xeros.jpg",
        "/Praxe_Web/produkty/Svycarak.jpg",
        "/Praxe_Web/produkty/batoh.jpg",
    ];
});
function openImgOnfull(pic) {
    fullImgBox.style.display = "flex";
    fullimg.src = pic;
    currentImageIndex = imageSources.indexOf(pic);
}
function closefullimg() {
    fullImgBox.style.display = "none";
}
function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % imageSources.length;
    fullimg.src = imageSources[currentImageIndex];
}
function ImageBefore() {
    currentImageIndex = (currentImageIndex - 1 + imageSources.length) % imageSources.length;
    fullimg.src = imageSources[currentImageIndex];
}
document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
        closefullimg();
    }
    if (event.key === "ArrowLeft") {
        ImageBefore();
    }
    if (event.key === "ArrowRight") {
        nextImage();
    }
});


//AJAX pro kontrolu dostupnosti zboží

document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".check-stock");

    links.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault();

            const productId = this.getAttribute("data-id");
            const stockInfo = document.getElementById(`stock-info-${productId}`);

            fetch(`action/checkStock.php?id=${productId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        stockInfo.textContent = `Je dostupných ${data.stock} kusů.`;
                    } else {
                        stockInfo.textContent = data.message;
                    }
                })
                .catch(error => {
                    console.error("Chyba:", error);
                    stockInfo.textContent = "Došlo k chybě při ověřování dostupnosti.";
                });
        });
    });
});
