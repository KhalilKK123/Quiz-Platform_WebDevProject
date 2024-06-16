<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Quiz Website</title>
    <style>
    body {
        background-color: rgb(29, 29, 29);
        color: white;
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
        box-shadow: 0px 2px 4px 0px #bb86fc;
    }

    .navbar ul {
        text-align: center;
        list-style-type: none;
        margin: 0px;
        padding: 0px;
        font-family: "Pixelify Sans";
        display: inline-flex;
    }

    .navbar li {
        margin: 0px 5px 0px 0px;
    }

    #test {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 20vh;
        margin: 0;
        font-family: Arial, sans-serif;
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
        border: 3px solid black;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background-color 0.3s;
        font-size: 18px;
        border-radius: 1.3em;
        box-shadow: 0px 2px 4px 0px #bb86fc;
    }

    .answer-box:hover {
        background-color: grey;
    }

    .barContainer {
        position: absolute;
        display: flex;
        height: 300px;
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
    <script>
    let id = 0;

    document.addEventListener("DOMContentLoaded", () => {
        document.getElementById("loadButton").addEventListener("click", () => {
            id++;
            fetch("questionsDB.php?id=" + id)
                .then((response) => response.text())
                .then((data) => {
                    let row = data.split(
                        "|"); // Split the returned data using '|' as the delimiter
                    document.getElementById("question").textContent = row[0];
                    document.getElementById("box1").textContent = row[1];
                    document.getElementById("box2").textContent = row[2];
                    document.getElementById("box3").textContent = row[3];
                    document.getElementById("box4").textContent = row[4];
                })
                .catch((error) => console.error("Error fetching data:", error));
        });
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
            <div class="answer-box" id="box1"></div>
            <div class="answer-box" id="box2"></div>
            <div class="answer-box" id="box3"></div>
            <div class="answer-box" id="box4"></div>
        </div>
    </div>
    <div>
        <div class="barContainer">
            <div class="box" id="box1">1</div>
            <div class="box" id="box2">2</div>
            <div class="box" id="box3">3</div>
            <div class="box" id="box4">4</div>
            <div class="box" id="box5">5</div>
            <div class="box" id="box6">6</div>
            <div class="box" id="box7">7</div>
            <div class="box" id="box8">8</div>
            <div class="box" id="box9">9</div>
            <div class="box" id="box10">10</div>
        </div>
    </div>
    <button type="submit" id="loadButton">Load Next Entry</button>
</body>

</html>

<?php

session_start();

$_SESSION["diff"] = $_POST["diff"];

$_SESSION["id"] = 1;



?>