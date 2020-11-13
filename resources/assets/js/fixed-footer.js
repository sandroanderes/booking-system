document.addEventListener("DOMContentLoaded", function (event) {
    var elem = document.querySelector('.accordion');
    var bounding = elem.getBoundingClientRect();
    console.log(bounding);

    if (bounding.bottom < (window.innerHeight || document.documentElement.clientHeight)) {
        document.getElementsByTagName("footer")[0].classList.add("fixed-bottom");
    }
});