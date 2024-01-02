<?php

namespace App\Policies;

use App\Models\Book;
use App\Models\User;

class BookPolicy
{
    public function view(User $user, Book $book)
    {
        return $user->role === $book->user_id || $user->getRole() === 'admin';
    }
    public function update(User $user, Book $book)
    {
        return $user->getRole() === 'admin' || $user->id === $book->user_id;
    }
    public function delete(User $user, Book $book)
    {
        return $user->role === $book->user_id || $user->getRole() === 'admin';
    }
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
}
