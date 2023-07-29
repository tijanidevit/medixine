@extends('admin.layout.app')

@section('title')
   {{$product->name}}
@endsection

@section('body')
<div class="row">
    <div class="col-xl-12">
        <div class="card o-hidden card-hover">
            <div class="card-header card-header-top card-header--2 px-0 pt-0">
                <div class="card-header-title">
                    <h4>{{ $product->name }} stocks</h4>
                </div>
            </div>

            <div class="card-body p-0">
                <div>
                    <div class="table-responsive">
                        <table class="table all-package theme-table table-product" id="myTable">
                            <thead>
                                <tr>
                                    <th>Batch number</th>
                                    <th>Purchase date</th>
                                    <th>Expiry date</th>
                                    <th>Expiry status</th>
                                    <th>Ordered quantity</th>
                                    <th>Remaining quantity</th>
                                    <th>Price</th>
                                    <th>Option</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($stocks as $stock)
                                <tr>

                                    <td>{{$stock->batch_no}}</td>
                                    <td>{{$stock->formatDate('purchase_date')}}</td>
                                    <td @class(['text-danger' => $stock->expiry_status == 'Expired','text-success' => $stock->expiry_status != 'Expired'])>{{$stock->formatDate('expiry_date')}}</td>
                                    <td @class(['text-danger' => $stock->expiry_status == 'Expired','text-success' => $stock->expiry_status != 'Expired'])>{{$stock->expiry_status}}</td>
                                    <td>{{$stock->quantity}}</td>
                                    <td>{{$stock->remaining_quantity}}</td>
                                    <td>&#8358;{{$stock->price}}</td>

                                    <td>
                                        <ul>
                                            <li title="Delete stock">
                                                <form action="{{ route('stock.delete', $stock->id) }}" method="post">
                                                    <button class="btn">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @empty
                                <p>No stock added yet</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade theme-modal remove-coupon" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block text-center">
                <h5 class="modal-title w-100" id="exampleModalLabel{{$stock->id}}">Are You Sure ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="remove-box">
                    <p>Deleting <strong id="stockName"></strong> will remove its reocrd and related records</p>
                </div>
            </div>
            <form class="modal-footer" method="POST" id="deleteForm" action="{{route('stock.delete', $stock->id)}}">
                @csrf
                @method('DELETE')
                <div class="d-flex justify-content-center my-3" style="gap: 9px">
                    <button type="button" style="width: 20%" class="mr-3 btn btn-animation btn-md fw-bold btn-danger" data-bs-dismiss="modal">No</button>
                <button style="width: 20%" class="btn btn-animation btn-md fw-bold" data-bs-dismiss="modal">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('extra-scripts')
    {{-- <script>
        function openDeleteModal(id, batchNo){
            console.log('id', id)
            // $('#exampleModalToggle').modal('show')
        }
    </script> --}}
@endsection
