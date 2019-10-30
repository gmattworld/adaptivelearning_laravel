@extends('layouts.client')

@section('content')


    <section class="ftco-cover overlay" style="background-image: url({{ URL::asset('client/images/bg_2.jpg') }});" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center ftco-vh-100">
                <div class="col-sm-12 text-center">
                    <div class="jumbotron bg-light">
                        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                            <div class="text-center" style="margin-bottom:40px;">
                                <p>
                                    <h3>
                                        E-Payment Simulation: NGN 300,000
                                    </h3>
                                </p>
                                <input type="hidden" name="email" value="gmattworld@gmail.com"> {{-- required --}}
                                <input type="hidden" name="orderID" value="345">
                                <input type="hidden" name="amount" value="30000000"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="3">
                                {{-- <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> employ this in place of csrf_field only in laravel 5.0 --}}


                                <p class="text-center">
                                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                    </button>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
