@extends('frontend.layouts.user_panel')
@section('panel_content')

    <div class="plx-titlebar mt-2 mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="h3">{{ translate('Edit Your Coupon') }}</h1>
            </div>
        </div>
    </div>

    <div class="row gutters-5">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="section-title mb-0">{{translate('Coupon Information Update')}}</h3>
                </div>
                <form action="{{ route('seller.coupon.update', $coupon->id) }}" method="POST">
                    <input name="_method" type="hidden" value="PATCH">
                    @csrf
                    <div class="card-body">
                        <input type="hidden" name="id" value="{{ $coupon->id }}" id="id">
                        <div class="form-group row">
                            <label class="col-lg-3 col-from-label" for="name">{{translate('Coupon Type')}}</label>
                            <div class="col-lg-9">
                                <select name="coupon_type" id="coupon_type" class="form-control plx-selectpicker" onchange="coupon_form()" required>
                                    @if ($coupon->type == "product_base"))
                                        <option value="product_base" selected>{{translate('For Products')}}</option>
                                    @elseif ($coupon->type == "cart_base")
                                        <option value="cart_base">{{translate('For Total Orders')}}</option>
                                    @endif
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


@endsection
@section('script')

<script type="text/javascript">

    function coupon_form(){
        var coupon_type = $('#coupon_type').val();
        var id = $('#id').val();
		$.post('{{ route('coupon.get_coupon_form_edit') }}',{_token:'{{ csrf_token() }}', coupon_type:coupon_type, id:id}, function(data){
            $('#coupon_form').html(data);

         //    $('#demo-dp-range .input-daterange').datepicker({
         //        startDate: '-0d',
         //        todayBtn: "linked",
         //        autoclose: true,
         //        todayHighlight: true
        	// });
		});
    }

    $(document).ready(function(){
        coupon_form();
    });


</script>

@endsection
