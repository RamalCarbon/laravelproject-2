
@extends('layouts.app')

@section('content')
    <h1>Invoices</h1>
    @if(count($invoices)>0)
        @foreach($invoices as $invoice)
            <div class="list-group-item list-group-item-info">
            <h3><a href="/pages/{{$invoices->invoice_no}}">{{$invoices->client_name}}</a></h3>

            </div>
        @endforeach
        {{-- to make the page numbers appear at the bottom of the screen --}}
        {{-- {{$posts->links()}} --}}
    @else
        <p>No Invoices found</p>
    @endif
@endsection