/*Пошук */
function filterContent() {
  const searchQuery = document.getElementById("search").value.toLowerCase();
  const contentElements = document.querySelectorAll(
    ".feature, .text, .header-md, .subtext, .intro, .main-header,.fs-2, .map, .footer, .hr,.txt, .header-2, .photo, .news-container,.carousel"
  );

  contentElements.forEach((element) => {
    const textContent = element.textContent.toLowerCase();
    if (textContent.includes(searchQuery)) {
      element.style.display = "block";
    } else {
      element.style.display = "none";
    }
  });
}

function clearSearch() {
  document.getElementById("search").value = "";
  const contentElements = document.querySelectorAll(
    ".feature, .text, .header-md, .subtext, .intro"
  );

  contentElements.forEach((element) => {
    element.style.display = "block";
  });
}

/*Стрелка */
window.onscroll = function () {
  scrollFunction();
};

document.getElementById("scroll-to-top").onclick = function () {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
};

document
  .querySelector(".container-main")
  .style.setProperty("padding-bottom", "0", "important");

/*Обновление страницы*/
window.addEventListener("load", function () {
  window.scrollTo(0, 0);
});
