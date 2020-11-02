document.getElementById("CalendarFilter").onkeyup = function () { myFunction() };

function myFunction() {
    var input, filter, cards, cardContainer, h5, title, i;
    input = document.getElementById("CalendarFilter");
    filter = input.value.toUpperCase();
    cardContainer = document.getElementById("CalendarItems");
    cards = cardContainer.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        title = cards[i].querySelector(".card-body h5.card-title");
        if (title.innerText.toUpperCase().indexOf(filter) > -1) {
            cards[i].parentElement.style.display = "";
        } else {
            cards[i].parentElement.style.display = "none";
        }
    }
}