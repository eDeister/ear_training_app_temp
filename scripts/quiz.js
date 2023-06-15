// Quiz logic using Tone.js for audio playback

// Create a new synth with a piano sound
const synth = new Tone.Synth().toDestination();

// Array of available notes
const notes = ['C', 'D', 'E', 'F', 'G', 'A', 'B'];

// Function to play a random note
function playRandomNote() {
    // Get a random note from the array
    const randomNote = notes[Math.floor(Math.random() * notes.length)];

    // Trigger the synth to play the note
    synth.triggerAttackRelease(randomNote + '4', '4n');

    // Return the played note
    return randomNote;
}

// Function to check the user's guess
function checkGuess(note, guess) {
    // Convert the guess to uppercase for comparison
    guess = guess.toUpperCase();

    // Compare the guess with the actual note
    return guess === note;
}

// Play button event listener
document.getElementById('playBtn').addEventListener('click', function() {
    // Play a random note and store the played note
    const playedNote = playRandomNote();

    // Store the played note in a hidden input field
    document.getElementById('playedNote').value = playedNote;
});

// Submit button event listener
document.getElementById('submitBtn').addEventListener('click', function() {
    // Get the played note from the hidden input field
    const playedNote = document.getElementById('playedNote').value;

    // Get the user's guess from the input field
    const userGuess = document.getElementById('noteInput').value;

    // Check the user's guess
    const isCorrect = checkGuess(playedNote, userGuess);

    // Update the score based on the correctness of the guess
    const scoreElement = document.getElementById('score');
    const currentScore = parseInt(scoreElement.textContent);

    if (isCorrect) {
        scoreElement.textContent = currentScore + 1;
    } else {
        scoreElement.textContent = currentScore - 1;
    }

    // Clear the user's input
    document.getElementById('noteInput').value = '';
});
