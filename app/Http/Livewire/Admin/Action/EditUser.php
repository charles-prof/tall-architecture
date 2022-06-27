<?php

namespace App\Http\Livewire\Admin\Action;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    public User $user;

    public function mount(User $user)
    {
        // Gate::authorize('update', $user);

        $this->user = $user;
    }

    /**
     * updating the model when the action button is clicked
     *
     * @return void
     */
    public function update()
    {
        // Gate::authorize('update', $user);

        /**
         * calling the update method on the user model from here
         */
        $this->user->update($data);

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.action.edit-user');
    }
}
