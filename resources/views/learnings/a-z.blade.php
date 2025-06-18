<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Learn Letters!</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Comic Sans MS', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #fdf6e3;
            overflow: hidden;
        }

        body.fullscreen {
            cursor: pointer;
        }

        .top-nav {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px 0;
            background-color: #ffd180;
            text-align: left;
            padding-left: 20px;
            z-index: 11;
            /* Above controls bar */
        }

        .top-nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .top-nav li {
            display: inline;
        }

        .nav-link {
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            color: #ffffff;
            background-color: #fb8c00;
            padding: 8px 16px;
            border-radius: 25px;
            transition: background 0.3s;
        }

        .nav-link:hover {
            background-color: #ffb74d;
        }



        .controls {
            position: absolute;
            top: 45px;
            width: 100%;
            background: #ffe0b2;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 12px 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        .controls button {
            font-size: 16px;
            padding: 10px 16px;
            border: none;
            border-radius: 20px;
            font-weight: bold;
            background: #ff9800;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .controls button:hover {
            background-color: #ffa726;
        }

        #prompt {
            font-size: 24px;
            text-align: center;
            margin-top: 500px;
            color: #666;
        }

        #letterContainer {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        #letter {
            font-size: 35vw;
            font-weight: bold;
            text-align: center;
            user-select: none;
            transition: transform 0.2s;
        }

        @media (max-width: 600px) {
            #letter {
                font-size: 50vw;
            }
            #fullscreenButton {
                display: none;
            }
            #speakButton {
                display: inline-block;
                font-size: 12px;
                padding: 6px 8px;
            }
            #phonicsButton {
                display: inline-block;
                font-size: 12px;
                padding: 6px 8px;
            }
            #toggleSpeakButton {
                display: inline-block;
                font-size: 12px;
                padding: 6px 8px;
            }
            #togglePhonicsButton {
                display: inline-block;
                font-size: 12px;
                padding: 6px 8px;
            }
        }
    </style>
</head>

<body>

    <nav class="top-nav">
        <ul>
            <li><a href="/" class="nav-link">🏠 Back to Main Website</a></li>
        </ul>
    </nav>

    <div class="controls">
        <button id="speakButton">🔊 Say Letter</button>
        <button id="phonicsButton">🔡 Say Phonics</button>
        <button id="toggleSpeakButton">Disable Say Letter</button>
        <button id="togglePhonicsButton">Disable Say Phonics</button>
        <button id="fullscreenButton">⛶ Fullscreen</button>
    </div>

    <div id="prompt">🎉 Click or tap the screen to get a letter! 🎉</div>
    <div id="letterContainer">
        <div id="letter"></div>
    </div>

    <script>
        const letterDiv = document.getElementById("letter");
        const promptDiv = document.getElementById("prompt");
        const speakButton = document.getElementById("speakButton");
        const phonicsButton = document.getElementById("phonicsButton");
        const toggleSpeakButton = document.getElementById("toggleSpeakButton");
        const togglePhonicsButton = document.getElementById("togglePhonicsButton");
        const fullscreenButton = document.getElementById("fullscreenButton");
        const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

        // Fullscreen toggle
        fullscreenButton.addEventListener("click", () => {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen();
                document.body.classList.add("fullscreen");
                fullscreenButton.textContent = "⛶ Exit Fullscreen";
            } else {
                document.exitFullscreen();
                document.body.classList.remove("fullscreen");
                fullscreenButton.textContent = "⛶ Fullscreen";
            }
        });

        document.body.addEventListener("click", () => {
            promptDiv.style.display = "none";
            const upper = letters[Math.floor(Math.random() * letters.length)];
            const lower = upper.toLowerCase();
            letterDiv.textContent = upper + lower;

            // Random background color
            const bgColor = "#" + Math.floor(Math.random() * 0xffffff).toString(16).padStart(6, "0");
            document.body.style.backgroundColor = bgColor;

            // Adjust text color
            const r = parseInt(bgColor.substr(1, 2), 16);
            const g = parseInt(bgColor.substr(3, 2), 16);
            const b = parseInt(bgColor.substr(5, 2), 16);
            const brightness = (r * 299 + g * 587 + b * 114) / 1000;
            letterDiv.style.color = brightness > 150 ? "#000" : "#FFF";
        });

        function sayLetter() {
            const letter = letterDiv.textContent?.charAt(0);
            if (!letter) return;
            const utter = new SpeechSynthesisUtterance(letter);
            speechSynthesis.speak(utter);
        }

        function sayPhonics() {
            const letter = letterDiv.textContent?.charAt(0).toUpperCase();
            if (!letter) return;

            const phonicsMap = {
                A: "æ, eɪ, ɑː, ə",
                B: "b",
                C: "k, s, tʃ",
                D: "d, dʒ",
                E: "ɛ, iː, ə",
                F: "f",
                G: "g, dʒ, ʒ",
                H: "h, silent",
                I: "ɪ, aɪ, iː",
                J: "dʒ",
                K: "k, silent",
                L: "l",
                M: "m",
                N: "n, ŋ",
                O: "ɒ, oʊ, əʊ",
                P: "p, f",
                Q: "kw",
                R: "r, silent",
                S: "s, z, ʃ",
                T: "t, ʃ, tʃ",
                U: "ʌ, juː, uː",
                V: "v",
                W: "w, silent",
                X: "ks, gz, z",
                Y: "j, ɪ, aɪ",
                Z: "z, ʒ"
            };

            const phonics = phonicsMap[letter];
            if (phonics) {
                const utter = new SpeechSynthesisUtterance(phonics);
                speechSynthesis.speak(utter);
            }
        }

        speakButton.addEventListener("click", (e) => {
            e.stopPropagation();
            sayLetter();
        });

        phonicsButton.addEventListener("click", (e) => {
            e.stopPropagation();
            sayPhonics();
        });

        toggleSpeakButton.addEventListener("click", (e) => {
            e.stopPropagation();
            speakButton.disabled = !speakButton.disabled;
            toggleSpeakButton.textContent = speakButton.disabled ?
                "Enable Say Letter" :
                "Disable Say Letter";
        });

        togglePhonicsButton.addEventListener("click", (e) => {
            e.stopPropagation();
            phonicsButton.disabled = !phonicsButton.disabled;
            togglePhonicsButton.textContent = phonicsButton.disabled ?
                "Enable Say Phonics" :
                "Disable Say Phonics";
        });
    </script>
</body>

</html>
