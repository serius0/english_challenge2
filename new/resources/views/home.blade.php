@extends('layouts.master')

@section('content')
<div class="section me-page-body">
    <div class="row m-b-no">
        <div class="col s12 m12 l3"></div>
        <div class="col s12 m12 l6" style="height:400px">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <form action="{{ route('anym.store') }}" method="POST" class="col s12 no-padding">
                            @csrf
                            <div class="row no-margin">
                                <div class="input-field col s12">
                                    <input id="name" name="name" type="text" class="">
                                    <label for="name" class="">Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="level" level="level" type="number" class="">
                                    <label for="level" class="">Level</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="amount" name="amount" type="number">
                                    <label for="amount">amount of test</label>
                                </div>

                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light right default" type="submit" name="action">Start <i class="material-icons right">send</i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>


</div>
@endsection
