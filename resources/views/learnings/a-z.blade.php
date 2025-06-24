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
            padding-bottom: 200px
        }

        #phonicsDisplay {
                position: absolute;
                bottom: 100px;
                width: 100%;
                text-align: center;
                font-size: 24px;
                font-weight: bold;
                opacity: 0;
                transition: opacity 0.5s ease;
                transition: transform 0.2s;
            }
        @media (max-width: 600px) {
            #letter {
                font-size: 50vw;
            }

            #fullscreenButton {
                display: none
            }

            #speakButton,
            #phonicsButton,
            #toggleSpeakButton,
            #togglePhonicsButton {
                display: block;
                font-size: 12px;
                padding: 6px 8px;
                margin: 4px auto;
                max-width: 200px;
                width: 100%;
            }

            #phonicsDisplay {
                position: absolute;
                bottom: 100px;
                width: 100%;
                text-align: center;
                font-size: 24px;
                font-weight: bold;
                opacity: 0;
                transition: opacity 0.5s ease;
                transition: transform 0.2s;
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
     <button id="infoButton">🔊 Letter & Sound Info</button>

        <button id="fullscreenButton">⛶ Fullscreen</button>
    </div>

    <div id="prompt">🎉 Click or tap the screen to get a letter! 🎉</div>
    <div id="letterContainer">
        <div id="letter"></div>
        <div id="phonicsDisplay"></div>

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

            // Display letter text
            const displayDiv = document.getElementById("phonicsDisplay");
            displayDiv.textContent = letter;
            displayDiv.style.opacity = "1";

            // Fade out after 2.5 seconds
            setTimeout(() => {
                displayDiv.style.opacity = "0";
            }, 2500);
        }

        function sayPhonics() {
            const letter = letterDiv.textContent?.charAt(0).toUpperCase();
            if (!letter) return;

            const phonicsMap = {
                A: ["ah"],
                B: ["buh"],
                C: ["kuh", "suh"],
                D: ["duh"],
                E: ["eh", "ee"],
                F: ["fff"],
                G: ["guh", "juh"],
                H: ["huh"],
                I: ["ih", "eye"],
                J: ["juh"],
                K: ["kuh"],
                L: ["luh"],
                M: ["mmm"],
                N: ["nnn"],
                O: ["oh", "aw"],
                P: ["puh"],
                Q: ["kwuh"],
                R: ["ruh"],
                S: ["sss"],
                T: ["tuh"],
                U: ["uh", "oo"],
                V: ["vuh"],
                W: ["wuh"],
                X: ["ks", "zuh"],
                Y: ["yuh", "ih"],
                Z: ["zzz"]
            };


            const phonicsOptions = phonicsMap[letter];
            if (phonicsOptions) {
                const randomPhonic = phonicsOptions[Math.floor(Math.random() * phonicsOptions.length)];
                const utter = new SpeechSynthesisUtterance(randomPhonic);
                utter.rate = 0.7; // Reduced speed for better clarity
                speechSynthesis.speak(utter);

                // Display phonics text
                const displayDiv = document.getElementById("phonicsDisplay");
                displayDiv.textContent = randomPhonic;
                displayDiv.style.opacity = "1";

                // Fade out after 2.5 seconds
                setTimeout(() => {
                    displayDiv.style.opacity = "0";
                }, 2500);
            }
        }


const infoButton = document.getElementById("infoButton");

const phonicsExamplesMap = {
    A: [{ sound: "ah", example: "apple" }, { sound: "ay", example: "ape" }],
    B: [{ sound: "buh", example: "bat" }],
    C: [{ sound: "kuh", example: "cat" }, { sound: "suh", example: "city" }],
    D: [{ sound: "duh", example: "dog" }],
    E: [{ sound: "eh", example: "egg" }, { sound: "ee", example: "tree" }],
    F: [{ sound: "fff", example: "fish" }],
    G: [{ sound: "guh", example: "goat" }, { sound: "juh", example: "giant" }],
    H: [{ sound: "huh", example: "hat" }],
    I: [{ sound: "ih", example: "insect" }, { sound: "eye", example: "ice" }],
    J: [{ sound: "juh", example: "jam" }],
    K: [{ sound: "kuh", example: "kite" }],
    L: [{ sound: "luh", example: "leg" }],
    M: [{ sound: "mmm", example: "man" }],
    N: [{ sound: "nnn", example: "net" }],
    O: [{ sound: "oh", example: "orange" }, { sound: "aw", example: "off" }],
    P: [{ sound: "puh", example: "pen" }],
    Q: [{ sound: "kwuh", example: "queen" }],
    R: [{ sound: "ruh", example: "rat" }],
    S: [{ sound: "sss", example: "sun" }],
    T: [{ sound: "tuh", example: "top" }],
    U: [{ sound: "uh", example: "umbrella" }, { sound: "oo", example: "put" }],
    V: [{ sound: "vuh", example: "van" }],
    W: [{ sound: "wuh", example: "wig" }],
    X: [{ sound: "ks", example: "box" }, { sound: "zuh", example: "xylophone" }],
    Y: [{ sound: "yuh", example: "yellow" }, { sound: "ih", example: "myth" }],
    Z: [{ sound: "zzz", example: "zebra" }]
};

function sayLetterAndSoundInfo() {
    const letter = letterDiv.textContent?.charAt(0).toUpperCase();
    if (!letter) return;

    const options = phonicsExamplesMap[letter];
    if (options) {
        const randomOption = options[Math.floor(Math.random() * options.length)];
        const sentence = `This letter is ${letter}. And the sound is ${randomOption.sound}. As in ${randomOption.example}.`;
        const utter = new SpeechSynthesisUtterance(sentence);
        utter.rate = 0.7;
        speechSynthesis.speak(utter);

        const displayDiv = document.getElementById("phonicsDisplay");
        displayDiv.textContent = sentence;
        displayDiv.style.opacity = "1";

        setTimeout(() => {
            displayDiv.style.opacity = "0";
        }, 4000);
    }
}

infoButton.addEventListener("click", (e) => {
    e.stopPropagation();
    sayLetterAndSoundInfo();
});


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
