let size = 4;
let numberOfTiles = size ** 2;
let highlighted = numberOfTiles;
let shuffled = false;

let buttonContainer = document.getElementById('tiles');

// Define variables for the timer
var startTime, endTime, totalTime;
var points = 0;

startTimer()
// Start the timer when the game starts
function startTimer() {
    startTime = new Date();
}

// Stop the timer when the puzzle is solved
function stopTimer() {
    endTime = new Date();
    totalTime = Math.floor((endTime - startTime) / 1000); // Calculate total time in seconds

    // Calculate points based on total time
    if (totalTime < 100) {
        points = 500;
    } else if (totalTime < 200) {
        points = 400;
    } else if (totalTime < 300) {
        points = 300;
    } else if (totalTime < 400) {
        points = 200;
    } else if (totalTime > 500) {
        points = 100;
    }

    // Store the points earned in local storage
    localStorage.setItem("points", points);
}

// When the page loads, check if there are any points stored in local storage
window.onload = function () {
    var storedPoints = localStorage.getItem("points");

    // If points are found, display them on the page
    if (storedPoints) {
        var score = document.getElementById("score");
        alert("Your score: " + storedPoints);
    }
};

// Keyboard controls
const RIGHT_ARROW = 39;
const LEFT_ARROW = 37;
const UP_ARROW = 40;
const DOWN_ARROW = 38;
window.onkeydown = function (event) {
    console.log(event.keyCode);
    if (event.keyCode === RIGHT_ARROW) {
        swap(highlighted + 1);
    } else if (event.keyCode === LEFT_ARROW) {
        swap(highlighted - 1);
    } else if (event.keyCode === UP_ARROW) {
        swap(highlighted + size);
    } else if (event.keyCode === DOWN_ARROW) {
        swap(highlighted - size);
    }
};

newGame();

function newGame() {
    loadTiles(size);
    setTimeout(() => {
        shuffle();
    }, 500);
}

// Create buttons
function loadTiles(n) {
    for (let b = 1; b <= numberOfTiles; b++) {
        var newTile = document.createElement('button');
        newTile.id = `btn${b}`;
        newTile.setAttribute('index', b);
        newTile.innerHTML = b;
        newTile.classList.add('btn');
        newTile.addEventListener('click', function () {
            swap(parseInt(this.getAttribute('index')));
        });
        buttonContainer.append(newTile);
    }
    selectedTileId = 'btn' + highlighted;
    selectedTile = document.getElementById(selectedTileId);
    selectedTile.classList.add("selected");
}

function shuffle() {
    let minShuffles = 100;
    let totalShuffles = minShuffles + Math.floor(Math.random() * (200 - 100) + 100);

    for (let i = minShuffles; i <= totalShuffles; i++) {
        setTimeout(function timer() {
            let x = Math.floor(Math.random() * 4);
            let direction = 0;
            if (x == 0) {
                direction = highlighted + 1;
            } else if (x == 1) {
                direction = highlighted - 1;
            } else if (x == 2) {
                direction = highlighted + size;
            } else if (x == 3) {
                direction = highlighted - size;
            }
            swap(direction);
            if (i >= totalShuffles - 1) {
                shuffled = true;
            }
        }, i * 10);
    }
}

// Swap tiles 
function swap(clicked) {
    if (clicked < 1 || clicked > (numberOfTiles)) {
        return;
    }

    // Check if we are trying to swap right
    if (clicked == highlighted + 1) {
        if (clicked % size != 1) {
            setSelected(clicked);
        }
        // Check if we are trying to swap left
    } else if (clicked == highlighted - 1) {
        if (clicked % size != 0) {
            setSelected(clicked);
        }
        // Check if we are trying to swap up
    } else if (clicked == highlighted + size) {
        setSelected(clicked);
        // Check if we are trying to swap down 
    } else if (clicked == highlighted - size) {
        setSelected(clicked);
    }

    if (shuffled) {
        if (checkHasWon()) {
            alert("Congratulations! You have solved the puzzle and found the treasure!");
            stopTimer();
            setTimeout(function () {
                window.location.href = "treasure.html";
            }, 3000); // Redirect after 3 seconds (adjust as needed)
        }
    }
}

function checkHasWon() {
    for (let b = 1; b <= numberOfTiles; b++) {
        currentTile = document.getElementById(`btn${b}`);
        currentTileIndex = currentTile.getAttribute('index');
        currentTileValue = currentTile.innerHTML;
        if (parseInt(currentTileIndex) != parseInt(currentTileValue)) {
            return false;
        }
    }
    return true;
}

// Applies stylings to the selected tile
function setSelected(index) {
    currentTile = document.getElementById(`btn${highlighted}`);
    currentTileText = currentTile.innerHTML;
    currentTile.classList.remove('selected');
    newTile = document.getElementById(`btn${index}`);
    currentTile.innerHTML = newTile.innerHTML;
    newTile.innerHTML = currentTileText;
    newTile.classList.add("selected");
    highlighted = index;
}