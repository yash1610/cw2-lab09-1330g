document.getElementById("rps").style.background = "grey";
document.getElementById("user_prompt").style.color = "white";
document.getElementById("difficulty_input").focus();
document.getElementById("user_input").disabled = true;
var temp_object = JSON.parse(localStorage.logged_in_user);
var user_object = JSON.parse (localStorage[temp_object.id]);

//Graphics--------------------------------------------------------------
var canvas = document.getElementById("animate_area");
var ctx = canvas.getContext ("2d");
var img_rock = new Image();
img_rock.src = "../media/rock.png";
var img_paper = new Image();
img_paper.src = "../media/paper.png";
var img_scissors = new Image();
img_scissors.src = "../media/scissors.png";
var img_lizard = new Image();
img_lizard.src = "../media/lizard.png";
var img_spock = new Image();
img_spock.src = "../media/spock.png";
var x = 0;
var y = 1600;

document.getElementById("difficulty_input").addEventListener("keyup", function(event) {
  event.preventDefault();
  if (event.keyCode === 13) {
    document.getElementById("difficulty_input_btn").click();
  }
});

function win() {
  user_object.wins = user_object.wins + 1;
  localStorage[user_object.userid] = JSON.stringify(user_object);
}

function loss() {
  user_object.loss = user_object.loss + 1;
  localStorage[user_object.userid] = JSON.stringify(user_object);
}

function tie() {
  user_object.tie = user_object.tie + 1;
  localStorage[user_object.userid] = JSON.stringify(user_object);
}

function play_again() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  x = 0;
  y = 1600;
  document.getElementById("user_input").value = "";
  document.getElementById("player_input").innerHTML = "";
  document.getElementById("computer_input").innerHTML = "";
  document.getElementById("result").innerHTML = "";
  document.getElementById("difficulty_input").disabled = true;
  document.getElementById("user_input").disabled = false;
  document.getElementById("user_input").focus();
}

function reset() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  x = 0;
  y = 1600;
  document.getElementById("difficulty_input").value = "";
  document.getElementById("user_input").value = "";
  document.getElementById("player_input").innerHTML = "";
  document.getElementById("computer_input").innerHTML = "";
  document.getElementById("result").innerHTML = "";
  document.getElementById("difficulty_input").disabled = false;
  document.getElementById("user_input").disabled = true;
  document.getElementById("difficulty_input").focus();

}

function animate(img_1, img_2) {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  ctx.drawImage(img_1,x,0, 200, 200);
  ctx.drawImage(img_2,y,0, 200, 200);
  x+=50;
  y-=50;
  if(x <= 700 && y >= 900) {
    requestAnimationFrame(function() {animate(img_1,img_2)});
  }
}

function rps_game(difficulty) {
  document.getElementById("difficulty_input").disabled = true;
  document.getElementById("user_input").disabled = false;
  document.getElementById("user_input").focus();
  switch(difficulty) {
    case "easy":
    document.getElementById("user_prompt").innerHTML = "rock, paper, or scissors?";
    document.getElementById("user_input").addEventListener("keyup", function(event) {
      event.preventDefault();
      if (event.keyCode === 13) {
        document.getElementById("user_input_btn").click();
        var user_choice = document.getElementById("user_input").value;
        document.getElementById("user_input").disabled = true;

        // User choice

        if (user_choice === 'rock' || user_choice === 'paper' || user_choice === 'scissors' ) {
          // User choice was undefined
          document.getElementById("player_input").innerHTML = ("Player 1:" + " " + user_choice + "<br>");

        } else {
          // Display user choice
          document.getElementById("player_input").innerHTML = ("Invalid Input");
          rps_game("easy");

        }
        // Computer choice
        var rps_items = ["rock", "paper", "scissors"];
        var computer_choice = rps_items[Math.floor(Math.random()*rps_items.length)];
        document.getElementById("computer_input").innerHTML = ("Computer:" + " " + computer_choice);
        if (user_choice === computer_choice) {
          if (user_choice === "rock") {
            animate(img_rock,img_rock);
          }else if (user_choice === "paper") {
            animate(img_paper,img_paper);
          } else if (user_choice === "scissors") {
            animate(img_scissors,img_scissors);
          }
          document.getElementById("result").innerHTML = "It's a tie";
          tie();
        }else if (user_choice === "rock") {
          if (computer_choice === "scissors") {
            // rock wins
            animate(img_rock,img_scissors);
            document.getElementById("result").innerHTML = "rock crushes scissors. You win.";
            win();
          } else {
            // paper wins
            animate(img_rock,img_paper);
            document.getElementById("result").innerHTML = "paper covers rock. You lose.";
            loss();

          }
        } else if (user_choice === "paper") {
          if (computer_choice === "rock") {
            // paper wins
            animate(img_paper,img_rock);
            document.getElementById("result").innerHTML = "paper covers rock. You Win.";
            win();

          } else {
            // scissors wins
            animate(img_paper,img_scissors);
            document.getElementById("result").innerHTML = "scissors cut paper. You lose.";
            loss();

          }
        } else if (user_choice === "scissors") {
          if (computer_choice === "rock") {
            // rock wins
            animate(img_scissors,img_rock);
            document.getElementById("result").innerHTML = "rock crushes scissors. You lose.";
            loss();

          } else {
            // scissors wins
            animate(img_scissors,img_paper);
            document.getElementById("result").innerHTML = "scissors cut paper. You win.";
            win();

          }
        }
      }});
      break;
      case "hard":
      document.getElementById("user_prompt").innerHTML = "rock, paper, scissors, lizard or spock?";
      document.getElementById("user_input").addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
          document.getElementById("user_input_btn").click();
          var user_choice = document.getElementById("user_input").value;
          document.getElementById("user_input").disabled = true;

          // User choice
          if (user_choice === 'rock' || user_choice === 'paper' || user_choice === 'scissors' || user_choice === 'lizard' || user_choice === 'spock' ) {
            // User choice was undefined
            document.getElementById("player_input").innerHTML = ("Player 1:" + " " + user_choice + "<br>");
          } else {
            // Display user choice
            document.getElementById("player_input").innerHTML = ("Invalid Input.");
            rps_game("hard");
          }
          // Computer choice
          var rps_items = ["rock", "paper", "scissors", "lizard", "spock"];
          var computer_choice = rps_items[Math.floor(Math.random()*rps_items.length)];
          document.getElementById("computer_input").innerHTML = ("Computer:" + " " + computer_choice);
          if (user_choice === computer_choice) {
            if (user_choice === "rock") {
              animate(img_rock,img_rock);
            } else if (user_choice === "paper") {
              animate(img_paper,img_paper);
            } else if (user_choice === "scissors") {
              animate(img_scissors,img_scissors);
            } else if (user_choice === "lizard") {
              animate(img_lizard,img_lizard);
            } else if (user_choice === "spock") {
              animate(img_spock,img_spock);
            }
            document.getElementById("result").innerHTML =  "Draw, try again!";
            tie();
          } else if (user_choice === "rock") {
            if (computer_choice === "paper") {
              animate(img_rock, img_paper);
              document.getElementById("result").innerHTML =  "paper covers rock. You lose.";
              loss();

            } else if (computer_choice === "scissors") {
              animate(img_rock, img_scissors);
              document.getElementById("result").innerHTML =  "rock crushes scissors. You win.";
              win();

            } else if (computer_choice === "lizard") {
              animate(img_rock, img_lizard);
              document.getElementById("result").innerHTML =  "rock smashes lizard. You win.";
              win();

            } else if (computer_choice === "spock") {
              animate(img_rock, img_spock);
              document.getElementById("result").innerHTML =  "spock vaporizes rock. You lose.";
              loss();

            }
          } else if (user_choice === "paper") {
            if (computer_choice === "rock") {
              animate(img_paper, img_rock);
              document.getElementById("result").innerHTML =  "paper covers rock. You Win.";
              win();

            } else if (computer_choice === "scissors") {
              animate(img_paper, img_scissors);
              document.getElementById("result").innerHTML =  "scissors cut paper. You lose.";
              loss();

            } else if (computer_choice === "lizard") {
              animate(img_paper, img_lizard);
              document.getElementById("result").innerHTML =  "lizard eats paper. You lose.";
              loss();

            } else if (computer_choice === "spock") {
              animate(img_paper, img_spock);
              document.getElementById("result").innerHTML =  "paper disproves spock. You Win.";
              win();

            }
          } else if (user_choice === "scissors") {
            if (computer_choice === "rock") {
              animate(img_scissors, img_rock);
              document.getElementById("result").innerHTML =  "rock crushes scissors. You lose.";
              loss();

            }
            else if (computer_choice === "paper") {
              animate(img_scissors, img_paper);
              document.getElementById("result").innerHTML =  "scissors cut paper. You win.";
              win();

            } else if (computer_choice === "lizard") {
              animate(img_scissors, img_lizard);
              document.getElementById("result").innerHTML =  "scissors decapitate lizard. You win.";
              win();

            } else if (computer_choice === "spock") {
              animate(img_scissors, img_spock);
              document.getElementById("result").innerHTML =  "spock smashes scissors. You lose.";
              loss();

            }
          } else if (user_choice === "lizard") {
            if (computer_choice === "rock") {
              animate(img_lizard, img_rock);
              document.getElementById("result").innerHTML =  "rock smashes lizard. You lose.";
              loss();

            }
            else if (computer_choice === "paper") {
              animate(img_lizard, img_paper);
              document.getElementById("result").innerHTML =  "lizard eats paper. You win.";
              win();

            } else if (computer_choice === "scissors") {
              animate(img_lizard, img_scissors);
              document.getElementById("result").innerHTML =  "scissors decapitate lizard. You lose.";
              loss();

            } else if (computer_choice === "spock") {
              animate(img_lizard, img_spock);
              document.getElementById("result").innerHTML =  "lizard poisons spock. You win.";
              win();

            }
          } else if (user_choice === "spock") {
            if (computer_choice === "rock") {
              animate(img_spock, img_rock);
              document.getElementById("result").innerHTML =  "spock vaporizes rock. You win.";
              win();

            }
            else if (computer_choice === "paper") {
              animate(img_spock, img_paper);
              document.getElementById("result").innerHTML =  "paper disproves spock. You lose.";
              loss();

            } else if (computer_choice === "lizard") {
              animate(img_spock, img_lizard);
              document.getElementById("result").innerHTML =  "lizard poisons spock. You lose.";
              loss();

            } else if (computer_choice === "scissors") {
              animate(img_spock, img_scissors);
              document.getElementById("result").innerHTML =  "spock smashes scissors. You win.";
              win();

            }
          }

        }});
        break;
        default:
        reset();
        alert("Error, please enter easy or hard");
  }
}



function difficulty_select() {
  var difficulty = document.getElementById("difficulty_input").value;
  rps_game(difficulty);
}
