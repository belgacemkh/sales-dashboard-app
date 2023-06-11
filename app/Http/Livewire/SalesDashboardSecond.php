<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Service\Stats;

class SalesDashboardSecond extends Component
{
    public $newOrders;

    public $salesAmount;

    public $satisfactions;

    protected $listeners = ['fetshStats'];

    public function mount()
    {
       $this->assignStats();
    }
    
    public function fetshStats()
    {
       $this->assignStats();
    }

    public function render()
    {
        return view('livewire.sales-dashboard-second');
    }

    private function assignStats()
    {
        $this->fill([
            'newOrders' => Stats::newOrders(),
            'salesAmount' => Stats::salesAmount(),
            'satisfactions' => Stats::satisfactions(),
        ]);
    }
}
