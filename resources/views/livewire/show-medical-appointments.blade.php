<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg border border-lime-300">
            @forelse ($medical_appointments as $medical_appointment)
                
            @empty
                <p class="p-3 text-center text-sm text-gray-200">
                    No existen consultas medicas en este momento para <span class="bold text-bold">{{$medical_record->name}}</span>.
                </p>
            @endforelse
        </div>
    </div>
    <div class="flex justify-center mt-10">
        
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    Livewire.on('deleteAlertMedicalRecord', expedienteId => {
            Swal.fire({
                title: "¿Esta seguro de eliminar este expediente?",
                text: "Esta acción no podrá revertirse!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, eliminarlo!",
                cancelButtonText: "Cancelar",
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('deleteMedicalRecord', { id: expedienteId });
                    Swal.fire({
                        title: "Expediente Eliminado!",
                        text: "El expediente ha sido eliminado.",
                        icon: "success"
                    });
                }
            });
        });
</script>
@endpush