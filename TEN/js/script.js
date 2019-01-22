let lilSquare = document.getElementsByClassName("smollone");
let color1 = "red";
let color2 = "blue";
let color3 = "green";
const btnCLR1 = document.querySelectorAll("#clrP1 .colorSlctBtn");
const btnCLR2 = document.querySelectorAll("#clrP2 .colorSlctBtn");
const btnCLR3 = document.querySelectorAll("#clrP3 .colorSlctBtn");
const rulesbtn = document.getElementById("rulesPop");

rulesbtn.addEventListener("click", toggleRules);

function toggleRules() {
	if (document.getElementById("rules").style.display != "flex") {
		document.getElementById("rules").style.display = "flex";
	}
	else {
		document.getElementById("rules").style.display = "none"
	}
}

for (let i=0; i < lilSquare.length; i++) {
	lilSquare[i].addEventListener("click", function() {
		changeClr(i);
		hideOpt();
	});
};

function changeClr(oui) {
	if (lilSquare[oui].style.backgroundColor == color1) {
		lilSquare[oui].style.backgroundColor = color2;
	}
	else if (lilSquare[oui].style.backgroundColor == color2) {
		lilSquare[oui].style.backgroundColor = color3;
	}
	else if (lilSquare[oui].style.backgroundColor == color3) {
		lilSquare[oui].style.backgroundColor = "white";
	}
	else {
		lilSquare[oui].style.backgroundColor = color1;
	}
};

function hideOpt() {
	document.getElementById("options").style.display = "none";
}

// COLOR PICKER

for (let ib=0; ib < btnCLR1.length; ib++) {
	btnCLR1[ib].addEventListener("click", function() {
		CLRoptCHNG1(ib);
	});
}
for (let ib=0; ib < btnCLR1.length; ib++) {
	btnCLR2[ib].addEventListener("click", function() {
		CLRoptCHNG2(ib);
	});
}
for (let ib=0; ib < btnCLR1.length; ib++) {
	btnCLR3[ib].addEventListener("click", function() {
		CLRoptCHNG3(ib);
	});
}
// POUR MODIFIER LES COULEURS
// VEUILLEZ MODIFIER SEULEMENT L'ATTRIBUTION DES VARIABLES "COLOR1", "COLOR2", et "COLOR3" dans les fonctions CI DESSOUS
function CLRoptCHNG1(nbri) {
	for (i=0; i< btnCLR1.length; i++) {
			btnCLR1[i].style.backgroundColor = "white";
		}
	if (nbri == 0) {
		btnCLR1[0].style.backgroundColor = "red";
		color1 = "red";
	}
	else if (nbri == 1) {
		btnCLR1[1].style.backgroundColor = "green";
		color1 = "green";
	}
	else if (nbri == 2) {
		btnCLR1[2].style.backgroundColor = "blue";
		color1 = "blue";
	}
	else if (nbri == 3) {
		btnCLR1[3].style.backgroundColor = "cyan";
		color1 = "cyan";
	}
	else if (nbri == 4) {
		btnCLR1[4].style.backgroundColor = "yellow";
		color1 = "yellow";
	}
	else if (nbri == 5) {
		btnCLR1[5].style.backgroundColor = "purple";
		color1 = "purple";
	}
	else if (nbri == 6) {
		btnCLR1[6].style.backgroundColor = "pink";
		color1 = "pink";
	}
	else if (nbri == 7) {
		btnCLR1[7].style.backgroundColor = "orange";
		color1 = "orange";
	}
	else if (nbri == 8) {
		btnCLR1[8].style.backgroundColor = "brown";
		color1 = "brown";
	}
	else if (nbri == 9) {
		btnCLR1[9].style.backgroundColor = "gray";
		color1 = "gray";
	}
}
function CLRoptCHNG2(nbri) {
	for (i=0; i< btnCLR2.length; i++) {
			btnCLR2[i].style.backgroundColor = "white";
		}
	if (nbri == 0) {
		btnCLR2[0].style.backgroundColor = "red";
		color2 = "red";
	}
	else if (nbri == 1) {
		btnCLR2[1].style.backgroundColor = "green";
		color2 = "green";
	}
	else if (nbri == 2) {
		btnCLR2[2].style.backgroundColor = "blue";
		color2 = "blue";
	}
	else if (nbri == 3) {
		btnCLR2[3].style.backgroundColor = "cyan";
		color2 = "cyan";
	}
	else if (nbri == 4) {
		btnCLR2[4].style.backgroundColor = "yellow";
		color2 = "yellow";
	}
	else if (nbri == 5) {
		btnCLR2[5].style.backgroundColor = "purple";
		color2 = "purple";
	}
	else if (nbri == 6) {
		btnCLR2[6].style.backgroundColor = "pink";
		color2 = "pink";
	}
	else if (nbri == 7) {
		btnCLR2[7].style.backgroundColor = "orange";
		color2 = "orange";
	}
	else if (nbri == 8) {
		btnCLR2[8].style.backgroundColor = "brown";
		color2 = "brown";
	}
	else if (nbri == 9) {
		btnCLR2[9].style.backgroundColor = "gray";
		color2 = "gray";
	}
}
function CLRoptCHNG3(nbri) {
	for (i=0; i< btnCLR3.length; i++) {
			btnCLR3[i].style.backgroundColor = "white";
		}
	if (nbri == 0) {
		btnCLR3[0].style.backgroundColor = "red";
		color3 = "red";
	}
	else if (nbri == 1) {
		btnCLR3[1].style.backgroundColor = "green";
		color3 = "green";
	}
	else if (nbri == 2) {
		btnCLR3[2].style.backgroundColor = "blue";
		color3 = "blue";
	}
	else if (nbri == 3) {
		btnCLR3[3].style.backgroundColor = "cyan";
		color3 = "cyan";
	}
	else if (nbri == 4) {
		btnCLR3[4].style.backgroundColor = "yellow";
		color3 = "yellow";
	}
	else if (nbri == 5) {
		btnCLR3[5].style.backgroundColor = "purple";
		color3 = "purple";
	}
	else if (nbri == 6) {
		btnCLR3[6].style.backgroundColor = "pink";
		color3 = "pink";
	}
	else if (nbri == 7) {
		btnCLR3[7].style.backgroundColor = "orange";
		color3 = "orange";
	}
	else if (nbri == 8) {
		btnCLR3[8].style.backgroundColor = "brown";
		color3 = "brown";
	}
	else if (nbri == 9) {
		btnCLR3[9].style.backgroundColor = "gray";
		color3 = "gray";
	}
}