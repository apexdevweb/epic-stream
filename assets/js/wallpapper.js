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

let myImgs = [
  "assets/images/1z0nm8ZkPfxYuIdjZXxSIgl8SCz.webp",
  "assets/images/2vHQBX5L4yoExTa55KmGIg2Q5s3.webp",
  "assets/images/6WBeq4fCfn7AN0o21W9qNcRF2l9.webp",
  "assets/images/A1no8PFhIaxgR5ppuQbKafPbCfH.webp",
  "assets/images/db32LaOibwEliAmSL2jjDF6oDdj.webp",
  "assets/images/drbERzlA4cuRWhsTXfFOY4mRR4f.webp",
  "assets/images/i0yw1mFbB7sNGHCs7EXZPzFkdA1.webp",
  "assets/images/lXfETghKc1YTrGgOJfg1CdO3dio.webp",
  "assets/images/xeEw3eLeSFmJgXZzmF2Efww0q3s.webp",
];

const titleCtnr = document.querySelector(".video__article--title-container");

titleCtnr.style.backgroundImage = `url(${myImgs[8]})`;
titleCtnr.style.backgroundSize = "cover";
titleCtnr.style.backgroundPosition = "center";
