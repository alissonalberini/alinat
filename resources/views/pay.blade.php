@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                @if ($message = Session::get('success'))
                <div class="custom-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('success'); ?>
                @endif
                @if ($message = Session::get('error'))
                <div class="custom-alerts alert alert-danger fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {!! $message !!}
                </div>
                <?php Session::forget('error'); ?>
                @endif
                <div class="panel-heading">Pagamento com cartão Stripe</div>

                <div class="panel-body">

                    <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('addmoney.stripe') !!}" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('card_no') ? ' has-error' : '' }} col-md-4">
                            <label for="card_no" class="control-label">Nr. cartão</label>
                            <input autocomplete="off" id="card_no" type="text" class="form-control card-number" name="card_no" value="{{ old('card_no') }}" autofocus max="16">
                            @if ($errors->has('card_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('card_no') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('ccExpiryMonth') ? ' has-error' : '' }} col-md-2">
                            <label for="ccExpiryMonth" class=" control-label">Expiry Month</label>
                            <input id="ccExpiryMonth" type="text" class="form-control" name="ccExpiryMonth" value="{{ old('ccExpiryMonth') }}" autofocus>
                            @if ($errors->has('ccExpiryMonth'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ccExpiryMonth') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('ccExpiryYear') ? ' has-error' : '' }} col-md-2">
                            <label for="ccExpiryYear" class="control-label">Expiry Year</label>
                            <input id="ccExpiryYear" type="text" class="form-control" name="ccExpiryYear" value="{{ old('ccExpiryYear') }}" autofocus>
                            @if ($errors->has('ccExpiryYear'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ccExpiryYear') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('cvvNumber') ? ' has-error' : '' }} col-md-2">
                            <label for="cvvNumber" class="control-label">CVV No.</label>
                            <input id="cvvNumber" type="text" class="form-control" name="cvvNumber" value="{{ old('cvvNumber') }}" autofocus>
                            @if ($errors->has('cvvNumber'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cvvNumber') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="control-label">Amount</label>
                            <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" autofocus>
                            @if ($errors->has('amount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('amount') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Paywith Stripe
                                </button>
                            </div>
                        </div>
                    </form>

                    <form class="form-horizontal" method="get" id="payment-form" role="form" action="{!!route('addmoney.stripe')!!}" >
                        {{ csrf_field() }}

                        <div class="form-row">
                            <div class="col-xs-12 form-group card required">
                                <label class="control-label">Card Number</label>
                                <input autocomplete="off" class="form-control card-number" size="20" type="text" name="card_no">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xs-4 form-group cvc required">
                                <label class="control-label">CVV</label>
                                <input autocomplete="off" class="form-control card-cvc" placeholder="ex. 311" size="4" type="text" name="cvvNumber">
                            </div>
                            <div class="col-xs-4 form-group expiration required">
                                <label class="control-label">Expiration</label>
                                <input class="form-control card-expiry-month" placeholder="MM" size="2" type="text" name="ccExpiryMonth">
                            </div>
                            <div class="col-xs-4 form-group expiration required">
                                <label class="control-label"> </label>
                                <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="text" name="ccExpiryYear">
                                <input class="form-control card-expiry-year" placeholder="YYYY" size="4" type="hidden" name="amount" value="300">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('cvvNumber') ? ' has-error' : '' }} col-md-2">
                            <label for="cvvNumber" class="control-label">CVV No.</label>
                            <input id="cvvNumber" type="text" class="form-control" name="cvvNumber" value="{{ old('cvvNumber') }}" autofocus>
                            @if ($errors->has('cvvNumber'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cvvNumber') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-row">
                            <div class="col-md-12">
                                <div class="form-control total btn btn-info">
                                    Total:
                                    <span class="amount">$300</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 form-group">
                                <button class="form-control btn btn-primary submit-button" type="submit">Pay »</button>
                            </div>
                        </div>
                    </form>


                    <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
                        <div class='form-row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label>
                                <input class='form-control' size='4' type='text'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label>
                                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-xs-4 form-group cvc required'>
                                <label class='control-label'>CVC</label>
                                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                            </div>
                            <div class='col-xs-4 form-group expiration required'>
                                <label class='control-label'>Expiration</label>
                                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                            </div>
                            <div class='col-xs-4 form-group expiration required'>
                                <label class='control-label'> </label>
                                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-12'>
                                <div class='form-control total btn btn-info'>
                                    Total:
                                    <span class='amount'>$300</span>
                                </div>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-12 form-group'>
                                <button class='form-control btn btn-primary submit-button' type='submit'>Pay »</button>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>
                                    Please correct the errors and try again.
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection