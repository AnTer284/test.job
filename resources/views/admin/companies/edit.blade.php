@extends('layouts.app')

@section('content')

    @if (  $employer->id!=Auth::user()->employer_id )

        Вы не можете редактировать данные этой компании

        @else

    <div class="container">
        <div class="row">
    @if ($employer->id )

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit employer #{{ $employer->id  }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/companies') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/companies/' . $employer->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.companies.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>

    @endif
        </div>
    </div>

        @endif


@endsection
