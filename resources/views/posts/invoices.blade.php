
@extends('layouts.app')

@section('content')
    <h1>Invoices</h1>
    @if(count($invoices)>0)
        @foreach($invoices as $invoice)
            <div class="list-group-item list-group-item-info">
            <h3><a href="/posts/{{$invoice->invoice_no}}">{{$invoice->client_name}}</a></h3>
            
            </div>
        @endforeach
        {{-- to make the page numbers appear at the bottom of the screen --}}
        {{$invoices->links()}}
    @else
        <p>No Invoices found</p>
    @endif
@endsection