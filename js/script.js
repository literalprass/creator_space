const titleInput = document.querySelector("#title");
const creator = document.querySelector("#creator");
const category = document.querySelector("#category");
// const image = document.querySelector("#image");
const description = document.querySelector("#description");
const success = document.querySelector("#success");
const errorNodes = document.querySelectorAll(".error");
// const hasDuplicatedItems = function (inputArray) {
//     const obj = {};
//     const numItems = inputArray.length;
//     const duplicateRemoved = [];

//     for (const i in inputArray) {
//         obj[inputArray[i]] = 0;
//     }

//     for (const i in obj) {
//         duplicateRemoved.push(obj[i]);
//     }

//     return duplicateRemoved.length === numItems;
// };

// let notEmptyCount = 0;
// const obj = {};
// const duplicateRemoved = [];

// for (const i in titleInput) {
//     const v = titleInput[i].value;
//     if (v !== '') {
//         obj[v] = 0;
//         notEmptyCount++;
//     }
// }

// for (const i in obj) {
//     duplicateRemoved.push(obj[i]);
// }

// if (duplicateRemoved.length === 0) {

// } else if (duplicateRemoved.length !== notEmptyCount) {

// }
function validateForm(){

	let errorFlag = false;

	if (titleInput.value.length < 1) {
		errorNodes[0].innerText = "Title cannot be blank";
		titleInput.classList.add("error-border");
		errorFlag = true;
	}

	if (creator.value.length < 1) {
		errorNodes[1].innerText = "The creator field must be filled";
		creator.classList.add("error-border");
		errorFlag = true;
	}

	if (category.value.length < 1) {
		errorNodes[2].innerText = "Please fill the Category field";
		category.classList.add("error-border");
		errorFlag = true;
	}

	// if (image.value.length < 1) {
	// 	errorNodes[4].innerText = "please attach an image";
	// 	image.classList.add("error-border");
	// 	errorFlag = true;
	// }
	
	if (description.value.length < 1) {
		errorNodes[3].innerText = "Description cannot be blank";
		description.classList.add("error-border");
		errorFlag = true;
	}

	if (errorFlag) {
		return false;
	} else {
		return true;
	}

}
