<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StatusFilter extends Component
{
    public $status = 'worldwide';

    protected $queryString = [
        'status',
    ];

    public function setStatus($newStatus)
    {
        $this->status = $newStatus;

        if ($this->status === 'worldwide') {
            return redirect()->route('worldwide', [
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
