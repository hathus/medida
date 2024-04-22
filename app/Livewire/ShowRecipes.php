<?php

namespace App\Livewire;

use App\Models\Recipe;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ShowRecipes extends Component
{
    public $activityFactor = [
        1 => '1000',
        2 => '1400',
        3 => '1800',
        4 => '2200',
        5 => '2600',
        6 => '3000',
        7 => '3400',
        8 => '3800',
        9 => '4200',
        10 => '4600',
        11 => '5000',
        12 => '5400',
        13 => '5800',
    ];

    #[Locked]
    protected $recipes;

    public $minFactor;

    public $maxFactor;

    use WithPagination;

    #[On('selected-factor')]
    public function selectFactor($factorId)
    {
        $this->minFactor = $this->activityFactor[$factorId] - 399;
        $this->maxFactor = $this->activityFactor[$factorId];

        //$this->recipes = Recipe::whereBetween('total_cal', [$this->minFactor, $this->maxFactor])->paginate(7);

        $this->recipes = Recipe::select(DB::raw('count(id) as total'), 'group_id')
            ->whereBetween('total_cal', [$this->minFactor, $this->maxFactor])
            ->groupBy('group_id')
            ->paginate(6);
    }

    public function render()
    {
        if ($this->recipes === null) {
            $this->maxFactor = '2200';
            $this->recipes = Recipe::select(DB::raw('count(id) as total'), 'group_id')
                ->whereBetween('total_cal', ['1801', $this->maxFactor])
                ->groupBy('group_id')
                ->paginate(7);
        }

        return view('livewire.show-recipes', [
            'recipes' => $this->recipes,
            'maxFactor' => $this->maxFactor,
        ]);
    }

    public function showMenus($groupId, $maxFactor)
    {
        return redirect()->route('mostrar-recetas', [
            'group_id' => $groupId,
            'max_factor' => $maxFactor,
        ]);
    }
}
