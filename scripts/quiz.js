// Define an array of musical notes
const notes = ["C", "D", "E", "F", "G", "A", "B"];

// Get the required elements from the DOM
const playBtn = document.getElementById("playBtn");
const submitBtn = document.getElementById("submitBtn");
const nextBtn = document.getElementById("nextBtn");
const noteInput = document.getElementById("note");
const piano = document.getElementById("piano");

// Add event listeners
playBtn.addEventListener("click", playNote);
submitBtn.addEventListener("click", submitAnswer);
nextBtn.addEventListener("click", nextQuestion);

// Variable to store the current question index
let questionIndex = 0;

// Function to play a random music note
function playNote() {
    const randomNote = getRandomNote();
    // Play the note using your preferred method
    // For example, you can use the Web Audio API or an external library like Howler.js
}

// Function to get a random note from the notes array
function getRandomNote() {
    const randomIndex = Math.floor(Math.random() * notes.length);
    return notes[randomIndex];
}

// Function to handle submitting the answer
function submitAnswer() {
    const userAnswer = noteInput.value.toUpperCase();
    const correctAnswer = getCurrentQuestion().interval;

    // Check if the user's answer is correct
    if (userAnswer === correctAnswer) {
        // Increment the score or perform any other necessary actions
        // For example, you can use AJAX to update the score on the server-side
        alert("Correct answer! You earned a point.");
    } else {
        // Deduct points for incorrect answer
        alert("Incorrect answer. Point deducted.");
    }

    // Disable input and buttons until next question
    noteInput.disabled = true;
    submitBtn.disabled = true;
    nextBtn.style.display = "block";
}

// Function to get the current question object
function getCurrentQuestion() {
    // Define your question objects with intervals and other properties
    // Return the appropriate question object based on the current question index
    // For example:
    const questions = [
        { interval: "P1", /* other properties */ },
        { interval: "M2", /* other properties */ },
        { interval: "P5", /* other properties */ },
        // Add more question objects as needed
    ];

    return questions[questionIndex];
}

// Function to proceed to the next question
function nextQuestion() {
    questionIndex++;
    noteInput.value = "";
    noteInput.disabled = false;
    submitBtn.disabled = false;
    nextBtn.style.display = "none";
    playNote();
}
