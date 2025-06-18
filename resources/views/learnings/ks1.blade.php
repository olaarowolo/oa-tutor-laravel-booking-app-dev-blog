<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Random Letter on Click</title>
    <style>
      body,
      html {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 600px;
        font-weight: bold;
        font-family: "comic sans ms", cursive, sans-serif;
        -webkit-user-select: none;
        user-select: none;
        cursor: pointer;
        background-color: #f0f0f0;
        padding: 0;
        text-align: center;
      }
      #letter {
        color: #333;
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      #prompt {
        font-size: 50px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        text-align: center;
        color: #666;
        -webkit-user-select: none;
        user-select: none;
      }
      button {
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
        font-size: 24px;
        padding: 12px 28px;
        cursor: pointer;
        border: none;
        border-radius: 30px;
        font-weight: bold;
        font-family: 'Comic Sans MS', cursive, sans-serif;
        color: #fff;
        background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
        box-shadow: 0 4px 8px rgba(255, 154, 158, 0.4);
        transition: all 0.3s ease;
        user-select: none;
      }
      button:hover {
        background: linear-gradient(135deg, #fad0c4 0%, #ff9a9e 100%);
        box-shadow: 0 6px 12px rgba(255, 154, 158, 0.6);
        transform: translateX(-50%) scale(1.05);
      }
      button:active {
        transform: translateX(-50%) scale(0.95);
        box-shadow: 0 2px 4px rgba(255, 154, 158, 0.2);
      }

      /* Toggle buttons at the top */
      #toggleSpeakButton {
        top: 20px;
        left: 15%;
        font-size: 18px;
        padding: 8px 16px;
      }
      #togglePhonicsButton {
        top: 20px;
        left: 85%;
        font-size: 18px;
        padding: 8px 16px;
      }

      /* Action buttons below */
      #speakButton {
        bottom: 100px; /* Space between buttons */
        left: 15%;
      }
      #phonicsButton {
        bottom: 100px; /* Space between buttons */
        left: 85%;
      }
    </style>
  </head>
  <body>
    <div id="prompt">Click anywhere</div>
    <div id="letter"></div>
    <button id="speakButton">Say Letter</button>
    <!-- <button id="phonicsButton">Say Phonics</button> -->
    <button id="toggleSpeakButton">Disable Say Letter</button>
    <!-- <button id="togglePhonicsButton">Disable Say Phonics</button> -->

    <script>
      const letterDiv = document.getElementById("letter");
      const promptDiv = document.getElementById("prompt");
      const letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
      const speakButton = document.getElementById("speakButton");
      const phonicsButton = document.getElementById("phonicsButton");
      const toggleSpeakButton = document.getElementById("toggleSpeakButton");
      const togglePhonicsButton = document.getElementById("togglePhonicsButton");

      // Click anywhere to show random letter and change background color
      document.body.addEventListener("click", () => {
        promptDiv.style.display = "none";
        const randomIndex = Math.floor(Math.random() * letters.length);
        const upper = letters[randomIndex];
        const lower = upper.toLowerCase();
        letterDiv.textContent = upper + lower;

        // Set random background color
        const randomColor =
          "#" +
          Math.floor(Math.random() * 16777215)
            .toString(16)
            .padStart(6, "0");
        document.body.style.backgroundColor = randomColor;

        // Set text color based on background brightness
        const r = parseInt(randomColor.substr(1, 2), 16);
        const g = parseInt(randomColor.substr(3, 2), 16);
        const b = parseInt(randomColor.substr(5, 2), 16);
        const brightness = (r * 299 + g * 587 + b * 114) / 1000;
        letterDiv.style.color = brightness > 125 ? "#000000" : "#FFFFFF";
      });

      // Function to say the letter
      function sayLetter() {
        const text = letterDiv.textContent;
        if (!text) return;
        const letterToSay = text.charAt(0);
        const utterance = new SpeechSynthesisUtterance(letterToSay);
        speechSynthesis.speak(utterance);
      }

      // Function to say the phonics for the letter
      function sayPhonics() {
        const text = letterDiv.textContent;
        if (!text) return;
        const letter = text.charAt(0).toUpperCase();

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
          Z: "z, ʒ",
        };

        const phonicsText = phonicsMap[letter];
        if (!phonicsText) return;
        const utterance = new SpeechSynthesisUtterance(phonicsText);
        speechSynthesis.speak(utterance);
      }

      // Event listeners for the buttons
      speakButton.addEventListener("click", (event) => {
        event.stopPropagation();
        sayLetter();
      });

      phonicsButton.addEventListener("click", (event) => {
        event.stopPropagation();
        sayPhonics();
      });

      toggleSpeakButton.addEventListener("click", (event) => {
        event.stopPropagation();
        speakButton.disabled = !speakButton.disabled;
        toggleSpeakButton.textContent = speakButton.disabled
          ? "Enable Say Letter"
          : "Disable Say Letter";
      });

      togglePhonicsButton.addEventListener("click", (event) => {
        event.stopPropagation();
        phonicsButton.disabled = !phonicsButton.disabled;
        togglePhonicsButton.textContent = phonicsButton.disabled
          ? "Enable Say Phonics"
          : "Disable Say Phonics";
      });
    </script>
  </body>
</html>
