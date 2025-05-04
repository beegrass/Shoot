document.querySelectorAll('.option').forEach(li => {
    li.addEventListener('click', () => {
        // Remove previous selection in the same question
        const others = li.parentElement.querySelectorAll('li');
        others.forEach(other => other.classList.remove('selected'));

        // Add selected class to clicked item
        li.classList.add('selected');
    });
});
document.getElementById('submitBtn').addEventListener('click', () => {

    answers =
    {
        q1: "B",
        q2: "C",
        q3: "A",
        q4: "B",
        q5: "B",
        q6: "C",
        q7: "C",
        q8: "D",
        q9: "A",
        q10: "B",
        q11: "C",
        q12: "B",
    }
    let score = 0;
    for (let k in answers) {
        const selectedAnswer = document.getElementById(k)?.querySelector(".selected")
        const err = document.getElementById("err");

        if (!selectedAnswer) {
            err.textContent = "Please answer all ?s before submitting.";
            return;
        }

        err.textContent = ""
        const selectedLetter = selectedAnswer.dataset.answer

        if (selectedLetter == answers[k]) {
            score++;
        }

    }
    for (let k in answers) {
        const options = document.getElementById(k).querySelectorAll('.option');
        options.forEach(option => {
            if (option.dataset.answer === answers[k]) {
                option.style.color = "#178717"
                option.style.fontWeight = "normal";
            }
            else if (option.classList.contains("selected")) {
                option.style.color = "#E02200"
                option.style.fontWeight = "normal";
            }
            option.style.pointerEvents = "none";
        });
    }

    err.textContent = "Score: " + score + "/12";

    if (document.getElementById('key').children.length === 0) {
        document.getElementById('keyh2').textContent = "Answer Key:"
        for (let key in answers) {
            const num = key.replace("q", "");
            const content = `${num}) ${answers[key]}`;
            const newElement = document.createElement('li');
            newElement.style.listStyle = "none";
            newElement.textContent = content;
            document.getElementById('key').appendChild(newElement);
        }
    }
});
