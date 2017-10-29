@extends('layouts.backend')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Connect to your friends!</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form class="form-horizontal" method="POST" action="{{ route('backend.friends.add') }}">
                            {{ csrf_field() }}


                            <div class="form-group{{ $errors->has('contacts') ? ' has-error' : '' }}">

                                <div class="col-md-10 col-md-offset-1">
                                    <select id="contacts" class="form-control select-contacts" name="contacts"
                                            multiple="multiple">

                                        @foreach($contacts as $contact)

                                            <option value="{{ $contact->id }}"> {{ $contact->email }}   </option>

                                        @endforeach

                                    </select>

                                    @if ($errors->has('contacts'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('contacts') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>


                {{--@if(!empty($user->hasManyContacts))
                <div class="panel panel-default">
                    <div class="panel-heading">Your friends</div>


                    <div class="panel-body">


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



                            @foreach($user->hasManyContacts as $contac)

                                <tr>
                                    <td>{{ $contact->firstname }}</td>
                                    <td>{{ $contact->lastname }}</td>
                                    <td>{{ $contact->mobile }}</td>
                                    <td>{{ $contact->email }}</td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>





                    </div>
                </div>
                @endif--}}


            </div>
        </div>
    </div>
@endsection



@section('scripts')

    <script>


    </script>

    <script type="text/javascript">

        $(".select-contacts").select2({
            placeholder: "Contacts",
            maximumSelectionLength: 1,
            tags: false
        });

    </script>

@endsection
