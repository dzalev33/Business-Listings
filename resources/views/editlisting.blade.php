@extends('layouts.app')


@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listing <a class="btn btn-dark btn-xs float-right" href="/dashboard">Go Back</a></div>

                <div class="card-body">
                    {!!Form::open(['action' => ['ListingsController@update',$listing->id],'method' => 'POST'])!!}
                    {{Form::bsText('name',$listing->name, ['placeholder' => 'Company Name'])}}
                    {{Form::bsText('email', $listing->email, ['placeholder' => 'Contact Email'])}}
                    {{Form::bsText('website', $listing->website, ['placeholder' => 'Company Website'])}}
                    {{Form::bsText('phone', $listing->phone, ['placeholder' => 'Contact Phone'])}}
                    {{Form::bsText('address', $listing->address, ['placeholder' => 'Business Address'])}}
                    {{Form::bsTextArea('bio', $listing->bio, ['placeholder' => 'About this Business'])}}
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::bsSubmit('submit')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection