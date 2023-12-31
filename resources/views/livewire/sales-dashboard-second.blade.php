<div>
<div>
    <div class="row border border-dark rounded text-center">
        <div class="col-md-4 border-dark border-right bg-white text-primary py-5 rouded-lef">
            <strong class="h1 font-weight-bold">{{$newOrders}}</strong>
            <h3 class="text-secondary">New Orders</h3>
        </div>
        <div class="col-md-4 border-dark border-right bg-white text-primary py-5">
            <strong class="h1 font-weight-bold">{{$salesAmount}}</strong>
            <h3 class="text-secondary">Sales Amount</h3>
        </div>
        <div class="col-md-4 border-dark border-right bg-white text-primary py-5 rouded-bottom">
            <strong class="h1 font-weight-bold">{{$satisfactions}}%</strong>
            <h3 class="text-secondary">Satisfications</h3>
        </div>
    </div>
</div>

<button class="btn btn-primary btn-lg mt-5" wire:click="fetshStats">⟲ Refresh</button>
</div>