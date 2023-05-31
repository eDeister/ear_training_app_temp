/*
Player table
CREATE TABLE Player (
    player_id INT PRIMARY KEY,
    name VARCHAR(50),
    age INT,
    instrument VARCHAR(50)
);

score table
CREATE TABLE Score (
    score_id INT PRIMARY KEY,
    score_value INT,
    category VARCHAR(50)
);

Melody table
CREATE TABLE Melody (
    melody_id INT PRIMARY KEY,
    player_id INT,
    score_id INT,
    FOREIGN KEY (player_id) REFERENCES Player(player_id),
    FOREIGN KEY (score_id) REFERENCES Score(score_id)
);





 */
