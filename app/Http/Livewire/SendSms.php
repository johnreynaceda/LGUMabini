<?php

namespace App\Http\Livewire;

use App\Models\Resident;
use DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class SendSms extends Component
{
    use WithFileUploads;
    use Actions;
    public $barangay;
    public $message;

    public $firstname, $middlename, $lastname, $contact_number, $barangay_name, $image, $update_image, $address, $year, $resident_id;

    public $edit_modal = false;
    public function render()
    {
        return view('livewire.send-sms', [
            'lists' => $this->barangay ? Resident::when($this->barangay, function ($query) {
                $query->where('barangay', $this->barangay);
            })->where('status', 1)->get() : [],
        ]);
    }

    public function sendSMS()
    {
        $this->validate([
            'barangay' => 'required',
            'message' => 'required',
        ]);

        $residents = Resident::where('barangay', $this->barangay)->pluck('contact_number')->toArray();

        $numbers = implode(',', $residents);
        $api_key = '1aaad08e0678a1c60ce55ad2000be5bd';
        $sender = 'SEMAPHORE';
        $ch = curl_init();
        $parameters = [
            'apikey' => $api_key,
            'number' => $numbers,
            'message' => $this->message,
            'sendername' => $sender,
        ];
        curl_setopt(
            $ch,
            CURLOPT_URL,
            'https://semaphore.co/api/v4/messages'
        );
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            http_build_query($parameters)
        );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);

        $this->dialog()->success(
            $title = 'Message Sent',
            $description = 'Message has been sent to the residents of ' . $this->barangay . '. Thank You!'
        );
        $this->reset('barangay', 'message');
        return $output;

    }

    public function updateData($id)
    {
        $resident = Resident::where('id', $id)->first();

        $this->firstname = $resident->firstname;
        $this->middlename = $resident->middlename;
        $this->lastname = $resident->lastname;
        $this->contact_number = $resident->contact_number;
        $this->barangay_name = $resident->barangay;
        $this->address = $resident->address;
        $this->year = $resident->no_of_years;
        $this->image = $resident->upload_path;
        $this->resident_id = $resident->id;
        $this->edit_modal = true;
    }

    public function updateRecords()
    {
        $resident = Resident::where('id', $this->resident_id)->first();
        DB::beginTransaction();
        $resident->update([
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'contact_number' => $this->contact_number,
            'barangay' => $this->barangay_name,
            'address' => $this->address,
            'no_of_years' => $this->year,
            'upload_path' => $this->update_image ? $this->update_image->store('Uploaded IDs', 'public') : $this->image,
        ]);
        $this->dialog()->success(
            $title = 'Update Completed',
            $description = 'Resident Information has been updated. Thank You.'
        );
        DB::commit();

        $this->reset('firstname', 'middlename', 'lastname', 'contact_number', 'barangay_name', 'address', 'year', 'image', 'update_image', 'resident_id', 'edit_modal');
        $this->edit_modal = false;
    }

    public function deleteData($id)
    {
        $resident = Resident::where('id', $id)->first()->delete();
        $this->dialog()->success(
            $title = 'Delete Completed',
            $description = 'Resident Information has been deleted. Thank You.'
        );
    }
}
