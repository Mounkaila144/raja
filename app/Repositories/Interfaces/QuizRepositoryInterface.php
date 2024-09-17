<?php

namespace App\Repositories\Interfaces;

interface QuizRepositoryInterface
{
    public function storeCourseQuiz(object $request): void;
    public function quizDetail(object $request): object;
    public function courseQuizUpdate(object $request): void;
    public function storeQuestion(object $request): void;
    public function groupList(object $request): object;
    public function questionLevels(object $request): object;
    public function questionTypes(): object;
    public function deleteLesson(object $request): void;
    public function questionList(object $request): object;
    public function questionDetail(object $request): object;
    public function updateQuestion(object $request): array;
    public function storeQuestionGroup(object $request): bool;
    public function updateQuestionGroup(object $request): bool;
    public function orderQuestionGroup(object $request): bool;
    public function destroyQuestionGroup(object $request): bool;
    public function storeQuestionLevel(object $request): bool;
    public function updateQuestionLevel(object $request): bool;
    public function updateQuestionLevelStatus(object $request): bool;
    public function deleteQuestionLevel(object $request): bool|object;
    public function quizList(object $request): object;
    public function updateQuizStatus(object $request): object;
    public function deleteQuiz(object $request): object;
    public function questions(object $request): object;
    public function deleteQuestion(object $request): bool;
    public function questionBankDetail(object $request): object;
    public function updateQuizQuestion(object $request): void;
}