<?php

namespace App\Policies;

use App\Question;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuestionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any questions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        false;
    }

    /**
     * Determine whether the user can view the question.
     *
     * @param  \App\User  $user
     * @param  \App\Question  $question
     * @return mixed
     */
    public function view(User $user, Question $question)
    {
        false;
    }

    /**
     * Determine whether the user can create questions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        false;
    }

    /**
     * Determine whether the user can update the question.
     *
     * @param  \App\User  $user
     * @param  \App\Question  $question
     * @return mixed
     */
    public function update(User $user, Question $question)
    {
        //사용자 id와 질문작성 id를 일치시킨다.
        return $user->id === $question->user_id;
    }

    /**
     * Determine whether the user can delete the question.
     *
     * @param  \App\User  $user
     * @param  \App\Question  $question
     * @return mixed
     */
    public function delete(User $user, Question $question)
    {
        //사용자 id와 질문작성 id를 일치시킨다.   && 하나이상 답변이 있는경우 삭제 불가능
        return $user->id === $question->user_id && $question->answers_count < 1;
    }

    /**
     * Determine whether the user can restore the question.
     *
     * @param  \App\User  $user
     * @param  \App\Question  $question
     * @return mixed
     */
    public function restore(User $user, Question $question)
    {
        false;
    }

    /**
     * Determine whether the user can permanently delete the question.
     *
     * @param  \App\User  $user
     * @param  \App\Question  $question
     * @return mixed
     */
    public function forceDelete(User $user, Question $question)
    {
        false;
    }
}
