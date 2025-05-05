<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>30-Item Online Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .question {
            margin-bottom: 30px;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .options {
            margin-left: 20px;
        }
        .options label {
            display: block;
            margin: 8px 0;
            cursor: pointer;
            padding: 5px;
            border-radius: 3px;
            transition: background-color 0.2s;
        }
        .options label:hover {
            background-color: #f0f0f0;
        }
        .section {
            background-color: #f5f5f5;
            padding: 15px;
            margin: 20px 0;
            border-radius: 5px;
            border-left: 4px solid #4CAF50;
        }
        .section h2 {
            margin-top: 0;
            color: #333;
        }
        button {
            padding: 12px 24px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            display: block;
            margin: 20px auto;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 20px;
            background-color: #f8f8f8;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            border-left: 4px solid #2196F3;
            display: none;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 2px solid #4CAF50;
        }
        .correct {
            color: green;
            font-weight: bold;
        }
        .incorrect {
            color: red;
        }
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            .question {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <h1>30-Item Online Quiz</h1>
    
    <!-- ========== SECTION 1: QUESTIONS 1-10 (Basic Science) ========== -->
    <div class="section">
        <h2>Basic Science (Questions 1-10)</h2>
        
        <div class="question" id="q1">
            <p>1. It is one of the important branch in science</p>
            <div class="options">
                <label><input type="radio" name="q1" value="a"> Astronomer</label>
                <label><input type="radio" name="q1" value="b"> Biologist</label>
                <label><input type="radio" name="q1" value="c"> Psychology</label>
                <label><input type="radio" name="q1" value="d"> Geologist</label>
            </div>
        </div>
        
        <div class="question" id="q2">
            <p>2. What is the chemical formula for water?</p>
            <div class="options">
                <label><input type="radio" name="q2" value="a"> C2O</label>
                <label><input type="radio" name="q2" value="b"> H2O</label>
                <label><input type="radio" name="q2" value="c"> Fe</label>
                <label><input type="radio" name="q2" value="d"> Au</label>
            </div>
        </div>
        
        <div class="question" id="q3">
            <p>3. What is the chemical formula for carbon dioxide?</p>
            <div class="options">
                <label><input type="radio" name="q3" value="a"> H2O</label>
                <label><input type="radio" name="q3" value="b"> Au</label>
                <label><input type="radio" name="q3" value="c"> CO2</label>
                <label><input type="radio" name="q3" value="d"> Fe</label>
            </div>
        </div>
        
        <div class="question" id="q4">
            <p>4. Which river flows through Egypt?</p>
            <div class="options">
                <label><input type="radio" name="q4" value="a"> Nile</label>
                <label><input type="radio" name="q4" value="b"> Amazon</label>
                <label><input type="radio" name="q4" value="c"> Yangtze</label>
                <label><input type="radio" name="q4" value="d"> Mississippi</label>
            </div>
        </div>
        
        <div class="question" id="q5">
            <p>5. What is the smallest continent by land area?</p>
            <div class="options">
                <label><input type="radio" name="q5" value="a"> Africa</label>
                <label><input type="radio" name="q5" value="b"> Australia</label>
                <label><input type="radio" name="q5" value="c"> Europe</label>
                <label><input type="radio" name="q5" value="d"> Antarctica</label>
            </div>
        </div>
        
        <div class="question" id="q6">
            <p>6. Which of these countries is not in Europe?</p>
            <div class="options">
                <label><input type="radio" name="q6" value="a"> Hungary</label>
                <label><input type="radio" name="q6" value="b"> Finland</label>
                <label><input type="radio" name="q6" value="c"> Morocco</label>
                <label><input type="radio" name="q6" value="d"> Denmark</label>
            </div>
        </div>
        
        <div class="question" id="q7">
            <p>7. The Sahara Desert is primarily located in which continent?</p>
            <div class="options">
                <label><input type="radio" name="q7" value="a"> Asia</label>
                <label><input type="radio" name="q7" value="b"> Africa</label>
                <label><input type="radio" name="q7" value="c"> South America</label>
                <label><input type="radio" name="q7" value="d"> Australia</label>
            </div>
        </div>
        
        <div class="question" id="q8">
            <p>8. Which city is known as the 'Big Apple'?</p>
            <div class="options">
                <label><input type="radio" name="q8" value="a"> Los Angeles</label>
                <label><input type="radio" name="q8" value="b"> Chicago</label>
                <label><input type="radio" name="q8" value="c"> New York</label>
                <label><input type="radio" name="q8" value="d"> Toronto</label>
            </div>
        </div>
        
        <div class="question" id="q9">
            <p>9. What is the capital of Japan?</p>
            <div class="options">
                <label><input type="radio" name="q9" value="a"> Seoul</label>
                <label><input type="radio" name="q9" value="b"> Beijing</label>
                <label><input type="radio" name="q9" value="c"> Tokyo</label>
                <label><input type="radio" name="q9" value="d"> Bangkok</label>
            </div>
        </div>
        
        <div class="question" id="q10">
            <p>10. Which country is shaped like a boot?</p>
            <div class="options">
                <label><input type="radio" name="q10" value="a"> Greece</label>
                <label><input type="radio" name="q10" value="b"> Italy</label>
                <label><input type="radio" name="q10" value="c"> Spain</label>
                <label><input type="radio" name="q10" value="d"> Portugal</label>
            </div>
        </div>
    </div>
    
    <!-- ========== SECTION 2: QUESTIONS 11-20 (SCIENCE) ========== -->
    <div class="section">
        <h2>Science & Nature (Questions 11-20)</h2>
        
        <div class="question" id="q11">
            <p>11. What is the chemical symbol for gold?</p>
            <div class="options">
                <label><input type="radio" name="q11" value="a"> Go</label>
                <label><input type="radio" name="q11" value="b"> Gd</label>
                <label><input type="radio" name="q11" value="c"> Au</label>
                <label><input type="radio" name="q11" value="d"> Ag</label>
            </div>
        </div>
        
        <div class="question" id="q12">
            <p>12. Which planet is known as the Red Planet?</p>
            <div class="options">
                <label><input type="radio" name="q12" value="a"> Venus</label>
                <label><input type="radio" name="q12" value="b"> Mars</label>
                <label><input type="radio" name="q12" value="c"> Jupiter</label>
                <label><input type="radio" name="q12" value="d"> Saturn</label>
            </div>
        </div>
        
        <div class="question" id="q13">
            <p>13. What is the largest mammal in the world?</p>
            <div class="options">
                <label><input type="radio" name="q13" value="a"> African Elephant</label>
                <label><input type="radio" name="q13" value="b"> Blue Whale</label>
                <label><input type="radio" name="q13" value="c"> Giraffe</label>
                <label><input type="radio" name="q13" value="d"> Polar Bear</label>
            </div>
        </div>
        
        <div class="question" id="q14">
            <p>14. Photosynthesis primarily occurs in which part of a plant?</p>
            <div class="options">
                <label><input type="radio" name="q14" value="a"> Roots</label>
                <label><input type="radio" name="q14" value="b"> Stem</label>
                <label><input type="radio" name="q14" value="c"> Leaves</label>
                <label><input type="radio" name="q14" value="d"> Flowers</label>
            </div>
        </div>
        
        <div class="question" id="q15">
            <p>15. What is the main component of the Sun?</p>
            <div class="options">
                <label><input type="radio" name="q15" value="a"> Liquid Lava</label>
                <label><input type="radio" name="q15" value="b"> Hydrogen</label>
                <label><input type="radio" name="q15" value="c"> Uranium</label>
                <label><input type="radio" name="q15" value="d"> Oxygen</label>
            </div>
        </div>
        
        <div class="question" id="q16">
            <p>16. Which gas do plants absorb from the atmosphere?</p>
            <div class="options">
                <label><input type="radio" name="q16" value="a"> Oxygen</label>
                <label><input type="radio" name="q16" value="b"> Carbon Dioxide</label>
                <label><input type="radio" name="q16" value="c"> Nitrogen</label>
                <label><input type="radio" name="q16" value="d"> Hydrogen</label>
            </div>
        </div>
        
        <div class="question" id="q17">
            <p>17. What is the hardest natural substance on Earth?</p>
            <div class="options">
                <label><input type="radio" name="q17" value="a"> Gold</label>
                <label><input type="radio" name="q17" value="b"> Iron</label>
                <label><input type="radio" name="q17" value="c"> Diamond</label>
                <label><input type="radio" name="q17" value="d"> Quartz</label>
            </div>
        </div>
        
        <div class="question" id="q18">
            <p>18. How many bones are in the adult human body?</p>
            <div class="options">
                <label><input type="radio" name="q18" value="a"> 156</label>
                <label><input type="radio" name="q18" value="b"> 206</label>
                <label><input type="radio" name="q18" value="c"> 254</label>
                <label><input type="radio" name="q18" value="d"> 300</label>
            </div>
        </div>
        
        <div class="question" id="q19">
            <p>19. Which blood type is the universal donor?</p>
            <div class="options">
                <label><input type="radio" name="q19" value="a"> A</label>
                <label><input type="radio" name="q19" value="b"> B</label>
                <label><input type="radio" name="q19" value="c"> AB</label>
                <label><input type="radio" name="q19" value="d"> O</label>
            </div>
        </div>
        
        <div class="question" id="q20">
            <p>20. What is the largest organ in the human body?</p>
            <div class="options">
                <label><input type="radio" name="q20" value="a"> Brain</label>
                <label><input type="radio" name="q20" value="b"> Liver</label>
                <label><input type="radio" name="q20" value="c"> Skin</label>
                <label><input type="radio" name="q20" value="d"> Heart</label>
            </div>
        </div>
    </div>
    
    <!-- ========== SECTION 3: QUESTIONS 21-30 (HISTORY & ARTS) ========== -->
    <div class="section">
        <h2>History & Arts (Questions 21-30)</h2>
        
        <div class="question" id="q21">
            <p>21. Who painted the Mona Lisa?</p>
            <div class="options">
                <label><input type="radio" name="q21" value="a"> Vincent van Gogh</label>
                <label><input type="radio" name="q21" value="b"> Pablo Picasso</label>
                <label><input type="radio" name="q21" value="c"> Michelangelo</label>
                <label><input type="radio" name="q21" value="d"> Leonardo da Vinci</label>
            </div>
        </div>
        
        <div class="question" id="q22">
            <p>22. In which year did World War II end?</p>
            <div class="options">
                <label><input type="radio" name="q22" value="a"> 1943</label>
                <label><input type="radio" name="q22" value="b"> 1945</label>
                <label><input type="radio" name="q22" value="c"> 1950</label>
                <label><input type="radio" name="q22" value="d"> 1939</label>
            </div>
        </div>
        
        <div class="question" id="q23">
            <p>23. Who was the first president of the United States?</p>
            <div class="options">
                <label><input type="radio" name="q23" value="a"> Thomas Jefferson</label>
                <label><input type="radio" name="q23" value="b"> Abraham Lincoln</label>
                <label><input type="radio" name="q23" value="c"> George Washington</label>
                <label><input type="radio" name="q23" value="d"> John Adams</label>
            </div>
        </div>
        
        <div class="question" id="q24">
            <p>24. Which ancient civilization built the pyramids?</p>
            <div class="options">
                <label><input type="radio" name="q24" value="a"> Greeks</label>
                <label><input type="radio" name="q24" value="b"> Romans</label>
                <label><input type="radio" name="q24" value="c"> Egyptians</label>
                <label><input type="radio" name="q24" value="d"> Mayans</label>
            </div>
        </div>
        
        <div class="question" id="q25">
            <p>25. Who wrote "Romeo and Juliet"?</p>
            <div class="options">
                <label><input type="radio" name="q25" value="a"> Charles Dickens</label>
                <label><input type="radio" name="q25" value="b"> William Shakespeare</label>
                <label><input type="radio" name="q25" value="c"> Jane Austen</label>
                <label><input type="radio" name="q25" value="d"> Mark Twain</label>
            </div>
        </div>
        
        <div class="question" id="q26">
            <p>26. Which artist cut off his own ear?</p>
            <div class="options">
                <label><input type="radio" name="q26" value="a"> Pablo Picasso</label>
                <label><input type="radio" name="q26" value="b"> Vincent van Gogh</label>
                <label><input type="radio" name="q26" value="c"> Salvador Dalí</label>
                <label><input type="radio" name="q26" value="d"> Claude Monet</label>
            </div>
        </div>
        
        <div class="question" id="q27">
            <p>27. The Renaissance began in which country?</p>
            <div class="options">
                <label><input type="radio" name="q27" value="a"> France</label>
                <label><input type="radio" name="q27" value="b"> Germany</label>
                <label><input type="radio" name="q27" value="c"> Italy</label>
                <label><input type="radio" name="q27" value="d"> England</label>
            </div>
        </div>
        
        <div class="question" id="q28">
            <p>28. Who discovered gravity?</p>
            <div class="options">
                <label><input type="radio" name="q28" value="a"> Albert Einstein</label>
                <label><input type="radio" name="q28" value="b"> Isaac Newton</label>
                <label><input type="radio" name="q28" value="c"> Galileo Galilei</label>
                <label><input type="radio" name="q28" value="d"> Nikola Tesla</label>
            </div>
        </div>
        
        <div class="question" id="q29">
            <p>29. Which composer was deaf in his later years?</p>
            <div class="options">
                <label><input type="radio" name="q29" value="a"> Wolfgang Amadeus Mozart</label>
                <label><input type="radio" name="q29" value="b"> Johann Sebastian Bach</label>
                <label><input type="radio" name="q29" value="c"> Ludwig van Beethoven</label>
                <label><input type="radio" name="q29" value="d"> Frédéric Chopin</label>
            </div>
        </div>
        
        <div class="question" id="q30">
            <p>30. The Industrial Revolution began in which century?</p>
            <div class="options">
                <label><input type="radio" name="q30" value="a"> 16th century</label>
                <label><input type="radio" name="q30" value="b"> 17th century</label>
                <label><input type="radio" name="q30" value="c"> 18th century</label>
                <label><input type="radio" name="q30" value="d"> 19th century</label>
            </div>
        </div>
    </div>
    
    <button type="button" id="submit-btn">Submit Quiz</button>
    <div id="result" class="result"></div>
    
    <script>
        // Answers key
        const answers = {
            q1: "c", q2: "b", q3: "c", q4: "a", q5: "b",
            q6: "c", q7: "b", q8: "c", q9: "c", q10: "b",
            q11: "c", q12: "b", q13: "b", q14: "c", q15: "b",
            q16: "b", q17: "c", q18: "b", q19: "d", q20: "c",
            q21: "d", q22: "b", q23: "c", q24: "c", q25: "b",
            q26: "b", q27: "c", q28: "b", q29: "c", q30: "c"
        };
        
        document.getElementById('submit-btn').addEventListener('click', function() {
            let score = 0;
            const totalQuestions = 30;
            
            // Check each question
            for (let i = 1; i <= totalQuestions; i++) {
                const questionId = `q${i}`;
                const selected = document.querySelector(`input[name="${questionId}"]:checked`);
                
                // Get all options for this question
                const allOptions = document.querySelectorAll(`input[name="${questionId}"]`);
                
                if (selected && selected.value === answers[questionId]) {
                    score++;
                    // Highlight correct answer
                    selected.parentElement.classList.add("correct");
                } else if (selected) {
                    // Highlight incorrect answer
                    selected.parentElement.classList.add("incorrect");
                    
                    // Show correct answer
                    allOptions.forEach(option => {
                        if (option.value === answers[questionId]) {
                            option.parentElement.classList.add("correct");
                        }
                    });
                } else {
                    // Nothing selected, just show correct answer
                    allOptions.forEach(option => {
                        if (option.value === answers[questionId]) {
                            option.parentElement.classList.add("correct");
                        }
                    });
                }
            }
            
            // Display result
            const percentage = Math.round((score / totalQuestions) * 100);
            const resultDiv = document.getElementById('result');
            resultDiv.style.display = "block";
            resultDiv.innerHTML = `
                <p>You scored ${score} out of ${totalQuestions} (${percentage}%)</p>
                <p>${getFeedback(percentage)}</p>
            `;
            
            // Scroll to result
            resultDiv.scrollIntoView({ behavior: 'smooth' });
        });
        
        function getFeedback(percentage) {
            if (percentage >= 90) return "Excellent! You're a quiz master!";
            if (percentage >= 70) return "Great job! You know your stuff!";
            if (percentage >= 50) return "Good effort! Keep learning!";
            return "Keep practicing! You'll improve!";
        }
    </script>
</body>
</html>