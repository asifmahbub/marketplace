@extends('frontend.layouts.user_panel')
@section('panel_content')

    <div class="plx-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="section-title fw-600">{{ translate('Add Your Coupon') }}</div>
            </div>
        </div>
    </div>

    <div class="row gutters-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="section-title mb-0">{{translate('Coupon Information Adding')}}</h5>
                </div>

                <div class="card-body">
                    <form class="form-horizontal" action="{{ route('seller.coupon.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-lg-3 col-from-label" for="name">{{translate('Coupon Type')}}</label>
                            <div class="col-lg-9">
                                <select name="coupon_type" id="coupon_type" class="form-control plx-selectpicker" onchange="coupon_form()" required>
                                    <option value="">{{translate('Select One') }}</option>
                                    <option value="product_base">{{translate('For Products')}}</option>
                                    <option value="cart_base">{{translate('For Total Orders')}}</option>
                                </select>
                            </div>
                        </div>

                        <div id="coupon_form">

                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">{{translate('Save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

<script type="text/javascript">

    function coupon_form(){

        var coupon_type = $('#coupon_type').val();
		$.post('{{ route('coupon.get_coupon_form') }}',{
            _token:'{{ csrf_token() }}',
            coupon_type:coupon_type
        }, function(data){

            $('#coupon_form').html(data);

         //    $('#demo-dp-range .input-daterange').datepicker({
         //        startDate: '-0d',
         //        todayBtn: "linked",
         //        autoclose: true,
         //        todayHighlight: true
        	// });
		});
    }

</script>

@endsection
