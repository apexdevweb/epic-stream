const papperCtnr = document.querySelectorAll(
  ".vid__article--primary-container"
);
const papperImg = document.querySelectorAll(".vid__article--img");
papperCtnr.forEach((imgCover, index) => {
  const coverIdx = papperImg[index];
  if (coverIdx && coverIdx.src) {
    imgCover.style.backgroundImage = `url(${coverIdx.src})`;
  }
});
