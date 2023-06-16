/*Sajal Khadgi*/
//still need to figure it out

const pitchButton = document.getElementById("pitch-button");
const repeatButton = document.getElementById("repeat-button");
const answerButtons = document.querySelectorAll(".answer-button");
const scoreTracker = document.getElementById("score-tracker");
const submitButton = document.getElementById("submit-button");

let randomPitch = getRandomPitch();
let userAnswer = "";
let score = 0;

updatePitchButtonLabel();
resetScoreTracker();

pitchButton.addEventListener("click", handlePitchButtonClick);
repeatButton.addEventListener("click", handleRepeatButtonClick);
answerButtons.forEach((button) => {
    button.addEventListener("click", handleAnswerButtonClick);
});
submitButton.addEventListener("click", handleSubmitButtonClick);

function handlePitchButtonClick() {
    playTune(randomPitch);
}

function handleRepeatButtonClick() {
    playTune(randomPitch);
}

function handleAnswerButtonClick() {
    userAnswer = this.dataset.pitch;
    checkAnswer();
}

function handleSubmitButtonClick() {
    submitScore();
}

function getRandomPitch() {
    const pitches = ["a", "d", "e", "f", "g", "h", "j", "k", "l", "o", "p", "s", "t", "u", "w", "y"];
    const randomIndex = Math.floor(Math.random() * pitches.length);
    return pitches[randomIndex];
}

function playTune(pitch) {
    const audio = new Audio(`tunes/${pitch}.wav`);
    audio.play();
}

function updatePitchButtonLabel() {
    pitchButton.textContent = `Play ${randomPitch.toUpperCase()}`;
}

function checkAnswer() {
    if (userAnswer === randomPitch) {
        score++;
        updateScoreTracker();
        randomPitch = getRandomPitch();
        updatePitchButtonLabel();
    }
}

function updateScoreTracker() {
    scoreTracker.textContent = `Score: ${score}`;
}

function resetScoreTracker() {
    score = 0;
    updateScoreTracker();
}

function submitScore() {
    // Implement your code for submitting the score here
}
