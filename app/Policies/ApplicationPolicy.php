<?php
 
namespace App\Policies;
 
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicationPolicy
{
    /**
     * Determine if current logged in user is admin or not.
     * 
     * @return bool
     */
    public function isAdmin(Request $request)
    {
        return auth()->check();
    }

    /**
     * Determine if current logged in user is admin or not.
     * 
     * @return bool
     */
    public function isUser(Request $request)
    {
        return auth('user')->check();
    }

    /**
     * Determine if current logged in user is admin or not.
     * 
     * @return bool
     */
    public function isAuthenticated(Request $request)
    {
        return auth()->check() || auth('user')->check();
    }
}