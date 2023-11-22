<?php

namespace Modules\User\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*
         *
         * Module Menu for Admin Backend
         *
         * *********************************************************************
         */
        \Menu::make('admin_sidebar', function ($menu) {

            // Users
            $menu->add('<i class="nav-icon fa-regular fa-sun"></i> '.__('Users'), [
                'route' => 'backend.users.index',
                'class' => 'nav-item',
            ])
            ->data([
                'order'         => 77,
                'activematches' => ['admin/users*'],
                'permission'    => ['view_users'],
            ])
            ->link->attr([
                'class' => 'nav-link',
            ]);
        })->sortBy('order');

        return $next($request);
    }
}
