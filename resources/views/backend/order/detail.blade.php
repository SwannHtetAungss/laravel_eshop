@extends('layouts.backendtemplate')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Order Detail</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary d-inline-block">Form Example</h6>

                <a href="{{ route('order.index') }}" class="btn btn-outline-info float-right">Back</a>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <form method="post" action="{{ route('order.update', $order->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="status" value="1">
                            @if ($order->status > 0)
                                <button type="submit" class="btn btn-primary mr-2" disabled>Confirm</button>
                            @else
                                <button type="submit" class="btn btn-primary mr-2">Confirm</button>
                            @endif
                        </form>
                        @if ($order->status > 0)
                            <button type="submit" class="btn btn-danger deletebtn" disabled>Cancel</button>
                        @else
                            <button type="submit" class="btn btn-danger deletebtn">Cancel</button>
                        @endif
                    </div>

                    <div class="row mt-md-3">
                        <div class="col-6">
                            <table class="table-responsive">
                                <tbody>
                                    <tr>
                                        <td>Order Date : &nbsp;&nbsp;</td>
                                        <td>{{ $order->orderdate }}</td>
                                    </tr>
                                    <tr>
                                        <td>Customer Name : &nbsp;&nbsp;</td>
                                        <td>Aung Aung</td>
                                    </tr>
                                    <tr>
                                        <td>Customer Email : &nbsp;&nbsp;</td>
                                        <td>aungaung@gmail.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <table class="table-responsive">
                                <tbody>
                                    <tr>
                                        <td>Voucher No. : &nbsp;&nbsp;</td>
                                        <td>{{ $order->voucherno }}</td>
                                    </tr>
                                    <tr>
                                        <td>Cashier Name : &nbsp;&nbsp;</td>
                                        <td>{{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Amount : &nbsp;&nbsp;</td>
                                        <td>{{ $order->total }} KS</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($item_orders as $item_order)
                            @foreach ($items as $item)
                                <tr class="text-center">
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item_order->qty }}</td>
                                    @if ($item->discount)
                                        <td>{{ $item_order->qty * $item->discount }}</td>
                                    @else
                                        <td>{{ $item_order->qty * $item->price }}</td>
                                    @endif
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    {{-- Modal start --}}
    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('order.update', $order->id) }}" id="deleteModalForm">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="2">
                    <div class="modal-header">
                        <h4 class="modal-title">Are you sure to Cancel?</h4>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="btnsubmit" class="btn btn-danger" value="OK">
                        <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Modal End --}}
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.deletebtn').click(function() {
                var id = $(this).data('id');
                // console.log(id);
                $('#deleteModalForm').attr('action', id);
                $('#deleteModal').modal('show');
            })
        })
    </script>
@endsection
