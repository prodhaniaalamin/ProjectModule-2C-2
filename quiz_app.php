<?php

// Define the quiz questions
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];


// Collect answers from the user
$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\nYour answer: ";
    $answers[] = readline();
}


// Define the evaluateQuiz function
function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}


// Evaluate the user's score
$score = evaluateQuiz($questions, $answers);
$totalQuestions = count($questions);

echo "\nYou scored $score out of $totalQuestions.";

// Provide feedback based on performance
if ($score === $totalQuestions) {
    echo "Excellent job! \n";
} elseif ($score > $totalQuestions / 2) {
    echo "Good effort! \n";
} else {
    echo "Better luck next time! \n";
}
