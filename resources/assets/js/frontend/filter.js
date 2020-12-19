document.getElementById("CalendarFilter").onkeyup = function () { TitelFunction() };
/* document.getElementById("CityFilter").onkeyup = function () { CityFunction() }; */

function TitelFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("CalendarFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("CalendarItems");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].parentElement.parentElement.style.display = "";
        } else {
            cards[i].parentElement.parentElement.style.display = "none";
        }
    }
}

/* function CityFunction() {
    var input, filter, cards, cardContainer, p, title, i;
    input = document.getElementById("CityFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("CalendarItems");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h6.card-text");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].parentElement.parentElement.style.display = "";
        } else {
            cards[i].parentElement.parentElement.style.display = "none";
        }
    }
} */