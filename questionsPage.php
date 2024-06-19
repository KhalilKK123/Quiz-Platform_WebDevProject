<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://fonts.googleapis.com/css?family=Pixelify Sans' rel='stylesheet'>
    <title>Quiz Website</title>
    <style>
        body {
            background-color: rgb(29, 29, 29);
            color: white;
            margin: 0;
            height: 100vh;
            font-weight: 100;
            background: radial-gradient(#1b1b1b, #000000);
            -webkit-overflow-y: hidden;
            -moz-overflow-y: hidden;
            -o-overflow-y: hidden;
            overflow-y: hidden;
            -webkit-animation: fadeIn 1 1s ease-out;
            -moz-animation: fadeIn 1 1s ease-out;
            -o-animation: fadeIn 1 1s ease-out;
            animation: fadeIn 1 1s ease-out;
            font-family: "Pixelify Sans";
        }

        .navbar {
            color: white;
            background-color: rgb(20, 20, 20);
            padding: 10px 0px;
            transition: 0.6s;
            margin-left: 20px;
            margin-right: 20px;
            border-radius: 20px;
            text-align: center;
            margin-top: 0px;
            box-shadow: 0px 2px 4px 0px #bb86fc;
        }

        .navbar:hover {
            transform: translate(0px, 10px);
        }

        .navbar ul {
            text-align: center;
            list-style-type: none;
            margin: 0px;
            padding: 0px;
            font-family: "Pixelify Sans";
            /* letter-spacing: 100px; */
            border-radius: 20px;
            display: inline-flex;
        }

        #test {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 20vh;
            margin: 0;
            font-family: "Pixelify Sans";
        }

        #question {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 250px;
            margin-bottom: 70px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        .answers-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
            width: 80%;
            max-width: 1200px;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        .answer-box {
            height: 150px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
            font-size: 18px;
            border-radius: 1.3em;
            box-shadow: 0px 2px 4px 0px #bb86fc;
            background-color: rgba(29, 29, 29, 0);
            font-family: "Pixelify Sans";
        }

        .answer-box:hover {
            background-color: black;
            box-shadow: 0px 0px 100px #bb86fc;
        }

        .barContainer {
            position: absolute;
            display: flex;
            height: 200px;
            bottom: 30px;
            width: 99%;
            align-items: flex-end;
            justify-content: center;
        }

        .box {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80px;
            height: 80px;
            font-size: 24px;
            box-shadow: 0px 2px 4px 0px #bb86fc;
            border-radius: 0.5em;
        }
    </style>
    <?php
    session_start();

    if (!isset($_SESSION["quiz"])) {
        header("location:homePage.html");
        exit();
    }
    if (!isset($_SESSION["diff"])) {
        header("location:optionsPage.html");
        exit();
    }

    ?>
    <script>
        let id = 0;
        let idAnswerBox = 1;
        let correctAnswerBox;
        let reviewSheet = [];

        document.addEventListener("DOMContentLoaded", () => {
            function loadNextQuestion() {
                id++;
                fetch("questionsDB.php?id=" + id)
                    .then((response) => response.text())
                    .then((data) => {
                        if (data.includes("No more entries.")) {
                            let encodedReviewSheet = btoa(encodeURI(reviewSheet.join("^")));

                            window.location.href = "reviewPage.php?reviewSheet=" + encodedReviewSheet;
                            return;
                        }
                        let row = data.split("|");
                        let correctAnswer = row[4];

                        document.getElementById("question").textContent = row[0];

                        let possibleAnswers = row.slice(1, 5);

                        let tempArray = [];

                        possibleAnswers.forEach((possibleAnswer) => {
                            tempArray.push([possibleAnswer, Math.random()]);
                        });

                        let sortedArray = tempArray.sort((a, b) => a[1] - b[1]);

                        document.getElementById("box1").textContent = sortedArray[0][0];
                        document.getElementById("box1").style.color = "white";
                        document.getElementById("box2").textContent = sortedArray[1][0];
                        document.getElementById("box2").style.color = "white";
                        document.getElementById("box3").textContent = sortedArray[2][0];
                        document.getElementById("box3").style.color = "white";
                        document.getElementById("box4").textContent = sortedArray[3][0];
                        document.getElementById("box4").style.color = "white";


                        switch (correctAnswer) {
                            case sortedArray[0][0]:
                                correctAnswerBox = document.getElementById("box1");
                                break;
                            case sortedArray[1][0]:
                                correctAnswerBox = document.getElementById("box2");
                                break;
                            case sortedArray[2][0]:
                                correctAnswerBox = document.getElementById("box3");
                                break;
                            case sortedArray[3][0]:
                                correctAnswerBox = document.getElementById("box4");
                                break;
                        }

                        document.getElementById("box1").onclick = () =>
                            greenOrRed(sortedArray[0][0], "box1", correctAnswer, row[0]);
                        document.getElementById("box2").onclick = () =>
                            greenOrRed(sortedArray[1][0], "box2", correctAnswer, row[0]);
                        document.getElementById("box3").onclick = () =>
                            greenOrRed(sortedArray[2][0], "box3", correctAnswer, row[0]);
                        document.getElementById("box4").onclick = () =>
                            greenOrRed(sortedArray[3][0], "box4", correctAnswer, row[0]);
                    })
                    .catch((error) => console.error("Error fetching data:", error));
            }

            function greenOrRed(selectedAnswer, boxId, correctAnswer, question) {
                let answerBox = document.getElementById(boxId);
                let originalColor = answerBox.style.backgroundColor;

                disableButtons(true);

                if (selectedAnswer === correctAnswer) {
                    document.getElementById(
                        "answer" + idAnswerBox
                    ).style.backgroundColor = "green";
                    answerBox.style.backgroundColor = "green";
                    reviewSheet.push(id + "|" + question + "|" + correctAnswer + "|" + selectedAnswer);
                } else {
                    document.getElementById(
                        "answer" + idAnswerBox
                    ).style.backgroundColor = "red";
                    answerBox.style.backgroundColor = "red";
                    correctAnswerBox.style.backgroundColor = "green";
                    reviewSheet.push(id + "|" + question + "|" + correctAnswer + "|" + selectedAnswer);
                }

                setTimeout(() => {
                    answerBox.style.backgroundColor = originalColor;
                    correctAnswerBox.style.backgroundColor = originalColor;

                    disableButtons(false);

                    loadNextQuestion();
                }, 700); //milliseconds

                idAnswerBox++;
            }

            function disableButtons(disable) {
                document.getElementById("box1").disabled = disable;
                document.getElementById("box2").disabled = disable;
                document.getElementById("box3").disabled = disable;
                document.getElementById("box4").disabled = disable;
            }

            loadNextQuestion();
        });
    </script>
</head>

<body>
    <div class="navbar">
        <ul>
            <li id="khalil">
                <h1>&nbsp K &nbsp &nbsp &nbsp</h1>
            </li>
            <li id="mohammad">
                <h1>M&nbsp &nbsp &nbsp</h1>
            </li>
            <li id="hamza">
                <h1>H</h1>
            </li>
        </ul>
    </div>
    <h1 id="question"></h1>
    <div id="test">
        <div class="answers-container">
            <button class="answer-box" id="box1"></button>
            <button class="answer-box" id="box2"></button>
            <button class="answer-box" id="box3"></button>
            <button class="answer-box" id="box4"></button>
        </div>
    </div>
    <div>
        <div class="barContainer">
            <div class="box" id="answer1">1</div>
            <div class="box" id="answer2">2</div>
            <div class="box" id="answer3">3</div>
            <div class="box" id="answer4">4</div>
            <div class="box" id="answer5">5</div>
            <div class="box" id="answer6">6</div>
            <div class="box" id="answer7">7</div>
            <div class="box" id="answer8">8</div>
            <div class="box" id="answer9">9</div>
            <div class="box" id="answer10">10</div>
        </div>
    </div>
</body>

</html>