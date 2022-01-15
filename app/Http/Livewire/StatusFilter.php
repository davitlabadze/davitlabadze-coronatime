<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class StatusFilter extends Component
{
    public $status = '';

    protected $queryString = [
        'status',
    ];

    public function mount()
    {
        if (Route::currentRouteName() === 'dashboard') {
            $this->status = null;
            $this->queryString = [];
        }
    }

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;


        if ($this->status === 'worldwind') {
            return redirect()->route('worldwind', [
                'status' => $this->status,
                app()->getLocale()
            ]);
        } else {
            return redirect()->route('country', [
                'status' => $this->status,
                app()->getLocale()
            ]);
        }
    }
    public function render()
    {
        return view('livewire.status-filter');
    }
}
