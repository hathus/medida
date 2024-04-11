<?php

namespace App\Livewire;

use App\Models\MedicalAppointment;
use App\Models\MedicalRecord;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowMedicalRecords extends Component
{

    #[On('deleteMedicalRecord')]
    public function deleteMedicalRecord( $id )
    {
        $medicalRecord = MedicalRecord::find($id);
        $medicalRecord->delete();
    }

    public function render()
    {
        // Traemos los expedientes de este usuario
        $expedientes = MedicalRecord::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->paginate(3);

        return view('livewire.show-medical-records', [
            'expedientes' => $expedientes,
        ]);
    }
}
