@extends('layouts.backend')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">

                    @if(!empty($contact))
                    <div class="pull-right">

                        <a href="{{ route('backend.contact.edit',$contact) }}" class="btn btn-xs btn-warning">Edit</a>

                    </div>

                    @endif



                    Your are sharing the following information</div>

                <div class="panel-body">

                @if(!empty($contact))


                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Mobile</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>




                                <tr>
                                    <td>{{ $contact->firstname }}</td>
                                    <td>{{ $contact->lastname }}</td>
                                    <td>{{ $contact->mobile }}</td>
                                    <td>{{ $contact->email }}</td>
                                </tr>



                            </tbody>
                        </table>



                @else

                    <a href="{{ route('backend.contact.create') }}" class="btn btn-block btn-success">Create your SmartContact</a>
                 @endif

                </div>
            </div>


        </div>
    </div>
</div>
@endsection
