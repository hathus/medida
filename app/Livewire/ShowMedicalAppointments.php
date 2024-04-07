<?php

namespace App\Livewire;

use App\Models\MedicalAppointment;
use App\Models\MedicalRecord;
use Livewire\Component;

class ShowMedicalAppointments extends Component
{

    public MedicalRecord $medical_record;

    public function mount($id)
    {
        $this->medical_record = MedicalRecord::findOrFail($id);
    }

    public function render()
    {
        $medical_record_id = $this->medical_record->id;
        $medical_appointments = MedicalAppointment::where('medical_record_id', $medical_record_id)->paginate(5);
        return view('livewire.show-medical-appointments', [
            'medical_appointments' => $medical_appointments,
            'medical_record' => $this->medical_record,
        ]);
    }
}
