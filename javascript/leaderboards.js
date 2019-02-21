var ranking_array = [];
var temp_array = [];
var leaderboards_placing = ['one', 'two', 'three', 'four', 'five'];

window.onload = function(){
	populate();
	ranking();
	update_leaderboards();
}
function populate () {
	for ( var i =0; i < localStorage.length; i++) {
		if ((JSON.parse(localStorage.getItem(localStorage.key (i)))).hasOwnProperty('wins')) {
			temp_array.push(JSON.parse(localStorage.getItem(localStorage.key (i))));
		}
	}
}

function ranking() {
	var points_win=10;
	var points_loss=-5;
	var points_tie=2;
	var score = [];
	for ( var i = 0; i < temp_array.length; i++) {
		temp_array[i].score = temp_array[i].wins*points_win + temp_array[i].loss*points_loss +temp_array[i].tie*points_tie;
		temp_array[i].rank = i + 1;
		localStorage[temp_array[i].userid] = JSON.stringify(temp_array[i]);
	}
	for ( var i = 0; i < temp_array.length; i++) {
		console.log ("iteration: " + i + "  value:  " + temp_array[i].userid );
		for ( var j = 0; j < temp_array.length; j++) {
			if ( i === j ) {
				console.log (""); //please tell me a better way for a condition to do nothing
			} else if ( temp_array[i].score > temp_array[j].score && temp_array[i].rank > temp_array[j].rank ) {
					var swap_val1 = temp_array[i].rank;
					temp_array[i].rank = temp_array[j].rank;
					temp_array[j].rank = swap_val1;
					localStorage[temp_array[i].userid] = JSON.stringify(temp_array[i]);
					localStorage[temp_array[j].userid] = JSON.stringify(temp_array[j]);
			} else if ( temp_array[i].score < temp_array[j].score && temp_array[i].rank < temp_array[j].rank ) {
					var swap_val2 = temp_array[j].rank;
					temp_array[j].rank = temp_array[i].rank;
					temp_array[i].rank = swap_val2;
					localStorage[temp_array[i].userid] = JSON.stringify(temp_array[i]);
					localStorage[temp_array[j].userid] = JSON.stringify(temp_array[j]);
			} else {
				console.log ("");
			}
		}
	}
}

function update_leaderboards() {
	for ( var i = 0; i < leaderboards_placing.length; i++) {
		for ( var j = 0; j < temp_array.length; j++) {
			if (temp_array[j].rank === i + 1) {
				document.getElementById(leaderboards_placing[i]).innerHTML =
				"<b>" + (i + 1) + ". " + temp_array[j].userid + "</b> Score: " + temp_array[j].score + " W: " + temp_array[j].wins + " L: " + temp_array[j].loss + " T: " + temp_array[j].tie;
			}
		}
	}
}
