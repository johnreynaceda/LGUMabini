<?php

namespace App\Http\Livewire;

use App\Models\Resident;
use Livewire\Component;
use Livewire\WithFileUploads;
use DB;
use WireUi\Traits\Actions;

class ResidentRegistration extends Component
{
    use WithFileUploads;
    use Actions;

    public $barangay,$firstname, $middlename, $lastname, $address, $contact, $stay, $image;
    public function render()
    {
        return view('livewire.resident-registration');
    }

    public function submitRecord(){
        $this->validate([
            'barangay' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'contact' => 'required|digits:11|unique:residents,contact_number',
            'stay' => 'required',
            'image' =>'required'
        ]);

        DB::beginTransaction();
        Resident::create([
            'barangay' => $this->barangay,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'middlename' => $this->middlename == null ? null : $this->middlename,
            'address' => $this->address,
            'contact_number' => $this->contact,
            'no_of_years' => $this->stay,
            'upload_path' => $this->image->store('Uploaded IDs', 'public'),
        ]);
        $this->dialog()->success(
            $title = 'Registration Completed',
            $description = 'Your Information has been registered. Thank You.'
        );
        DB::commit();

        return redirect()->route('registration-complete');

    }
}
