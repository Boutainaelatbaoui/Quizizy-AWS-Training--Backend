<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Quizizy</title>
      <!-- ================== BEGIN core-css ================== -->
      <link rel="stylesheet" href="assets/css/style.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" />
      <!-- ================== END core-css ================== -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
   </head>
   <body>
      <div class="container" id="container">
         <div class="quiz-app" id="quiz-app">
            <h3 class="username" id="username"></h3>
            <h3 class="score" id="score"></h3>
            <div class="progress-bar">
               <h3 class="progress" id="progress">Question</h3>
               <div id="progress-bar">
                  <div id="progress-bar-full"></div>
               </div>
            </div>
         </div>
         <div class="first-slide" id="first-slide">
            <span class="text-logo">Quizizy</span>
            <h2 class="welcome-text">Welcome to <span class="aws">AWS Cloud</span> Practitioner Knowledge Quiz</h2>
            <div class="input-btn">
               <form>
                  <input type="text" placeholder="Please Enter Your Name" id="username-input" class="username-input" name="username" />
                  <p id="empty-input"></p>
               </form>
               <button class="btn" id="start">Start</button>
            </div>
         </div>
         <div class="quiz-info" id="quiz-info">
            <h2 class="quiz-question" id="quiz"></h2>
            <div class="answers" id="answers">
               <button class="answer" id="answer-1" data-id="1"></button>
               <button class="answer" id="answer-2" data-id="2"></button>
               <button class="answer" id="answer-3" data-id="3"></button>
               <button class="answer" id="answer-4" data-id="4"></button>
            </div>
            <button class="next-btn" id="next">Next <i class="bi bi-chevron-double-right" id="chevron"></i></button>
         </div>
         <div class="result" id="result">
            <span class="text-logo">Quizizy</span>
            <img class="done" src="assets/img/flame-success.gif" alt="Quiz Done" />
            <div class="congrats">
               <h2>Congrats <span id="user-name"></span> !!</h2>
               <h2 class="complete">You've completed the Quiz</h2>
            </div>
            <h2 class="user-score">Your score is : <span id="user-score"></span> / <span id="total-question">100</span></h2>
            <h2 class="check-answers">You got <span id="correct-answer"></span> and <span id="wrong-answer"></span> answers.</h2>
            <div class="result-btn">
               <button class="feedback-btn" id="feedback"><i class="bi bi-pencil-square result-icon"></i> Feedback</button>
               <button class="play-again-btn" id="play-again"><i class="bi bi-play-fill result-icon"></i> Play Again</button>
            </div>
         </div>
         <div class="feedback-slide" id="feedback-slide">
            <span class="text-logo">Quizizy</span>
            <div class="feedback-1">
               <img class="feedback-gif" src="assets/img/bouncy-a-paper-airplane-with-a-check-mark.gif" alt="Quiz Done" />
               <h1 class="feedback-text">Quiz Feedback</h1>
            </div>
            <div id="feedback-slide1">
               <!-- <div  class="feedback-2" id="feedback-2"> -->
               <!-- <h3 class="wrong-answer"><span id="incorrect-num">Question N°1:  </span><span id="incorrect-answer">Why is AWS more economical than traditional data centers for applications with varying compute workloads?</span></h3>
                  <h3 class="user-answer"><span id="user-incorrect">Your Answer:  </span><span id="answer-incorrect">AWS Database Migration Service (AWS DMS)</span></h3>
                  <h3 class="correct-answer"><span id="user-correct">Correct Answer:  </span><span id="answer-correct">Amazon AppStream 2.0</span></h3>
                  <h3 class="explanation"><span id="title">Explanation:  </span><span id="explanation-text">AWS DMS helps users migrate databases to AWS quickly and securely. The source database remains fully operational during the migration, minimizing downtime to applications that rely on the database. AWS DMS can migrate data to and from most widely used commercial and open-source databases.</span></h3> -->
               <!-- </div> -->
            </div>
            <button class="previous-btn" id="previous">Previous</button>
         </div>
      </div>
      <script src="assets/js/main.js"></script>
   </body>
</html>
