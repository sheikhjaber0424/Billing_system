<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0" >

    @if (count($invoices) == 0)
        <p>No invoice found</p>
    @endif
    
     
    
    @foreach ($invoices as $invoice)
    
    <x-invoice-card :invoice="$invoice"/>
    
    @endforeach
    </div>  