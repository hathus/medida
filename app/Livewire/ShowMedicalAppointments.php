<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\MedicalRecord;
use App\Models\MedicalAppointment;

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
        $medical_appointments = MedicalAppointment::where('medical_record_id', $medical_record_id)->orderBy('created_at', 'desc')->paginate(5);

        return view('livewire.show-medical-appointments', [
            'consultas' => $medical_appointments,
            'expediente' => $this->medical_record,
        ]);
    }

    // función para eliminar una consulta medica
    #[On('deleteMedicalAppointment')]
    public function deleteMedicalAppointment($id)
    {
        $medicalAppointment = MedicalAppointment::find($id);
        $medicalAppointment->delete();
    }
}
