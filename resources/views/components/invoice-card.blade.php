@props(['invoice'])

@include('cdn')

<div class="container">
   

    <div class="row">
        <div class="col-sm-12">
          <div class="card" style="margin-bottom: 10px">
            <div class="card-body">
                <h5 class="card-title"><h3 class="text-2xl">
                  <a href="/invoices/{{ $invoice->id}}" style="text-decoration: none">
                      {{$invoice->title}}
                  </a>
              </h3></h5>
              <h6 class="card-subtitle mb-2 text-muted">Invoice Number: {{ $invoice->invoice_no}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Customer Name: {{ $invoice->client}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Amount: {{ $invoice->grand_total}}</h6>
                
               
              </div>
          </div>
        </div>



</div>
</div>