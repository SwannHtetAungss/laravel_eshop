<style>
    hr {
        width: 100%;
        border: 1px dotted black;
    }

    .my-link a {
        color: rgb(72, 72, 119);
        text-decoration: none;
        font-weight: bold;
    }
</style>
<table border="0" cellpadding="0" cellspacing="0"
    style="padding:16px;background-color: #F1F1F1; font-family:Verdana, Arial,sans-serif; color: #454748; width: 100%; border-collapse:separate;">
    <tbody>
        <tr>
            <td align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="590"
                    style="padding:16px;background-color: white; color: #454748; border-collapse:separate;">
                    <tbody>
                        <tr>
                            <td align="center" style="min-width:590px;">
                                @if ($details['title'] == 'Order Confirmed')
                                <h2 style="text-align:center;">ORDER CONFIRMATION</h2>
                                <table border="0" cellpadding="0" cellspacing="0" width="590"
                                    style="min-width:590px;background-color: white; padding: 0px 8px 0px 8px; border-collapse:separate;">
                                    <tbody>
                                        <tr>
                                            <td valign="top" style="font-size:13px;">
                                                <div>
                                                    Dear {{ $details['customer_name'] }},<br>
                                                    Thank you for your Order!
                                                    <br>
                                                    {{-- {{ config('app.name') }}.<br> --}}
                                                    We've received your order and will contact you as soon as your
                                                    package is shipped.
                                                    <br>
                                                    If you want to more go to
                                                    <span class="my-link">
                                                        <a href="laraveleshop.swannhtetaung.me">Eshop</a>
                                                    </span>
                                                    <br>
                                                    You can find your purchase information below.
                                                    <br>
                                                </div>
                                                <div style="margin:16px 0px 16px 0px;">
                                                    <div class="col-12 table-responsive">


                                                        <table width="100%" style="min-width:500px;text-align:left;">
                                                            <thead>
                                                                <tr>
                                                                    <th>No.</th>
                                                                    <th>Product</th>
                                                                    <th>Qty</th>
                                                                    <th>Subtotal</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                $i = 1;
                                                                @endphp
                                                                @foreach ($details['items'] as $item)
                                                                <tr>
                                                                    <td>{{ $i++ }}</td>
                                                                    <td>{{ $item->name }}</td>
                                                                    <td>{{ $item->pivot->qty }}</td>
                                                                    <td>
                                                                        @if ($item->discount)
                                                                        @php
                                                                        $dis_price = $item->discount *
                                                                        $item->pivot->qty;
                                                                        @endphp
                                                                        {{ number_format($dis_price) }} Ks
                                                                        @else
                                                                        @php
                                                                        $price = $item->price * $item->pivot->qty;
                                                                        @endphp
                                                                        {{ number_format($price) }} Ks
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                <tr>
                                                                    <td colspan="4">
                                                                        <hr>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3">Total</td>
                                                                    <td>{{ number_format($details['total']) }} Ks
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                @elseif($details['title']=="Order Cancelled")
                                <h2 style="text-align:center;">Your Order is cancelled!</h2>
                                <table border="0" cellpadding="0" cellspacing="0" width="500"
                                    style="min-width:500px;background-color: white; padding: 0px 8px 0px 8px; border-collapse:separate;">
                                    <tbody>
                                        <tr>
                                            <td valign="top" style="font-size:13px;">
                                                <div>
                                                    Dear {{ $details['customer_name'] }},<br>
                                                    We've cancelled your order. If you need any further information,
                                                    please contact to <span
                                                        class="my-link">eshopmyanmar.shop@gmail.com</span>.
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>