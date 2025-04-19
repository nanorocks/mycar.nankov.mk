<?php

namespace App\Livewire;

use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Vehicles extends Component
{
    use WithPagination;

    public $search = ''; // Search term

    public function updatingSearch()
    {
        // Reset pagination when the search term changes
        $this->resetPage();
    }

    public function render()
    {
        // Normalize the search term: remove spaces and convert to lowercase
        $normalizedSearch = strtolower(str_replace(' ', '', $this->search));

        // Filter vehicles based on the normalized search term
        $vehicles = Vehicle::where(function ($query) use ($normalizedSearch) {
                $query->whereRaw("LOWER(REPLACE(name, ' ', '')) LIKE ?", ["%{$normalizedSearch}%"])
                    ->orWhereRaw("LOWER(REPLACE(vehicle_register_number, ' ', '')) LIKE ?", ["%{$normalizedSearch}%"]);
            })
            ->paginate(12);

        return view('livewire.vehicles')->with([
            'vehicles' => $vehicles,
        ]);
    }
}
