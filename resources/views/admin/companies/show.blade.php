@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Company {{ $company->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/companies') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>



                        @if (Auth::user() && $company->id ==Auth::user()->company_id )

                        <a href="{{ url('/admin/companies/' . $company->id . '/edit') }}" title="Edit Company"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/companies' . '/' . $company->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Company" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>

                        @endif



                        <br/>
                        <br/>
                        <span class=''> <img src='/storage/{{ $company->image }}'> </span>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr><th> Company Category </th><td> {{ $company->company_category }} </td></tr><tr><th> Company Description </th><td> {{ $company->company_description }} </td></tr><tr><th> Company Name </th><td> {{ $company->company_name }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                        <b> <a href='/admin/employers/{{ $company->id }} '>Cотрудники компании: </a> </b> <br> <br> <br>

                        @if (Auth::user())

                        Комментарии компании:  <br>

                            @foreach ($company->comments as $comment)

                                {{$comment->created_at}}:{{$comment->comment}} <br> <br>


                            @endforeach

                        <form method="POST" action="{{ url('/create_comment') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('company_comment') ? 'has-error' : ''}}">
                                <textarea class="form-control" rows="5" name="comment" type="textarea" id="company_comment" ></textarea>
                                {!! $errors->first('company_comment', '<p class="help-block">:message</p>') !!}
                            </div>

                            <input type='hidden' name='company_id' value='{{ $company->id }}'>




                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Добавить комментарий">
                            </div>


                        </form>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
