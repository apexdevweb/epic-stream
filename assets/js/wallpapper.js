const papperCtnr = document.querySelectorAll(
  ".vid__article--primary-container"
);
const papperImg = document.querySelectorAll(".vid__article--img");
papperCtnr.forEach((imgCover, index) => {
  const coveridx = papperImg[index];
  if (coveridx && coveridx.src) {
    imgCover.style.backgroundImage = `url(${coveridx.src})`;
  }
});
