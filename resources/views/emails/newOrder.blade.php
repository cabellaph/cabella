<h1>You have New Order</h1>

@component('mail::panel')
    # Email: {{$order->customerEmail}}
    # Full Name: {{$order->customerName}}
    # Address: {{$order->customerAddress}}
    # IG Account: {{$order->customerIG}}
    # Contact No.: {{$order->customerNo}}
    # MOD: {{$order->MOD}}
    # MOP: {{$order->MOP}}
    # Order: {{$order->productPurchased}}

    {{Lang::get('Please contact your customer via Email, IG Acc. and Contact No.')}}

@endcomponent

<h2>CABELLA. All rights reserved.</h2>