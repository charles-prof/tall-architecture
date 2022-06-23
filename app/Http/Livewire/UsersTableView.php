<?php

namespace App\Http\Livewire;

use App\Actions\BanUsersAction;
use App\Filters\UsersRoleFilter;
use LaravelViews\Views\TableView;
// use Illuminate\Database\Eloquent\Builder;
use App\Models\User;
use LaravelViews\Facades\UI;

class UsersTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = User::class;
    public $searchBy = ['name', 'email'];

    protected function filters()
    {
        return [
            new UsersRoleFilter,
        ];
    }
    
    protected function bulkActions()
    {
        return [
            new BanUsersAction,
        ];
    }

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            'Name',
            'profile_pic',
            'Email',
            'Created',
            'Updated'
        ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($model): array
    { 
        $profile_pic = isset($model->profile_picture) ? url($model->profile_picture) : url('/avataar/d3da80d4-a0fb-4266-b431-3b17e17744f8 - Titus Turcotte 2.jpg');
        return [
            UI::link($model->name, '/'),
            UI::avatar($profile_pic),
            // UI::icon('check', 'success'),
            // UI::badge('verified', 'success'),
            $model->email,
            $model->created_at,
            $model->updated_at
        ];
    }
}
