<?php

namespace App\Http\Livewire;

use App\Models\Resident;
use Livewire\Component;
use WireUi\Traits\Actions;

class RegisteredResident extends Component
{
    use Actions;
    public function render()
    {
        return view('livewire.registered-resident', [
            'residents' => Resident::where('status', 0)->paginate(10),
        ]);
    }

    public function approve($id)
    {

        $resident = Resident::where('id', $id)->first();

        $resident->update([
            'status' => 1,
        ]);
        $this->notification()->success(

            $title = 'Approved Successfully',

            $description = 'Resident has been approved.'

        );
    }

    public function disApprove($id)
    {
        $resident = Resident::where('id', $id)->first()->delete();
        $this->notification()->success(

            $title = 'Disapprove Successfully',

            $description = 'Resident has been disapprove.'

        );
    }
}
