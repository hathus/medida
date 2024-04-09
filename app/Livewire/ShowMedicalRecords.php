<?php

namespace App\Livewire;

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
        //$expedientes = MedicalRecord::where('user_id', auth()->user()->id);
        $expedientes = DB::table('medical_records')
        ->join('medical_appointments', 'medical_records.id', '=', 'medical_appointments.medical_record_id')->select('medical_records.*', 'medical_appointments.glucose', 'medical_appointments.imc')
            ->where('user_id', auth()->user()->id)->paginate(3);

        return view('livewire.show-medical-records', [
            'expedientes' => $expedientes,
        ]);
    }
}
