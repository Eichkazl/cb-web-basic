let playerPoints = 0;
let computerPoints = 0;

function ssp (player) {
    let computer = (getRandomInt(3)+1);
    let result = player + computer;
    let sspComputer = sspString(computer);
    let sspPlayer;

    switch(player) {
        case 0: sspPlayer = sspString(1); break;
        case 3: sspPlayer = sspString(2); break;
        case 6: sspPlayer = sspString(3); break;
    }

    $('#matchUp').text("\(You\)" + sspPlayer + " VS " + sspComputer + "\(Pc\)");

    switch(result) {
        case 1: case 5: case 9: $('#winner').text("Its a draw"); break;
        case 3: case 4: case 8: $('#winner').text("You win"); playerPoints += 1; break;
        case 2: case 6: case 8: $('#winner').text("You lose"); computerPoints += 1; break;
    }

    $('#points').text(playerPoints + " vs " + computerPoints);

     if (playerPoints > ($('#roundCount').val()/2)) {
        alert("You win! " + playerPoints + " vs " + computerPoints);
        reset();
     } else if (computerPoints > ($('#roundCount').val()/2)) {
        alert("you lose! " + playerPoints + " vs " + computerPoints);
        reset();
     }
}

function reset () {
    playerPoints = computerPoints = 0;
    $('#matchUp').text("\(You\) VS \(Pc\)");
    $('#points').text("0 vs 0");
}

function sspString (i) {
    switch (i) {
        case 1: return("Paper");
        case 2: return("Scissors");
        case 3: return("Rock");
    }
}

function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}



// 0 & 1 = paper   3 & 2 = scissors   6 & 3 = rock

// 0 >< 1 = 1 = draw
// 0 >< 2 = 2 = lose
// 0 >< 3 = 3 = win

// 3 >< 1 = 4 = win
// 3 >< 2 = 5 = draw
// 3 >< 3 = 6 = lose

// 6 >< 1 = 7 = lose
// 6 >< 2 = 8 = win
// 6 >< 3 = 9 = draw