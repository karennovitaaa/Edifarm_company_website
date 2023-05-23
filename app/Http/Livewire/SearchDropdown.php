<?php

namespace App\Http\Livewire;
use App\Models\User;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $searchTerm;
    
    public function render()
    {
        $results = User::where('name', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('username', 'like', '%'.$this->searchTerm.'%')
            ->get();

        return view('livewire.search-dropdown', [
            'results' => $results
        ]);
    }
}
