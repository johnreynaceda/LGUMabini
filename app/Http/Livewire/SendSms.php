<?php

namespace App\Http\Livewire;

use App\Models\Resident;
use Livewire\Component;
use WireUi\Traits\Actions;

class SendSms extends Component
{
    use Actions;
    public $barangay;
    public $message;
    public function render()
    {
        return view('livewire.send-sms', [
            'lists' => $this->barangay ? Resident::when($this->barangay, function ($query) {
                $query->where('barangay', $this->barangay);
            })->where('status',1)->get() : [],
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
}
