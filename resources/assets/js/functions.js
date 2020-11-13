var cards = document.getElementsByClassName("card");
for (var i = 0; i < cards.length; i += 1) {
    cards[i].style.borderBottomColor = generateRandomColor();
}

function generateRandomColor()
{
    var randomColor = '#'+Math.floor(Math.random()*16777215).toString(16);
    return randomColor;
}