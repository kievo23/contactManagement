

@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1>Contacts</h1> 
  </div>

<div class="panel-body">
        <!-- Display Validation Errors -->

        <!-- New Task Form -->
        <table class="table">
        <thead>
            <tr>
                <td>First Name</td>
                <td>Second Name</td>
                <td>ID No</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
        </thead>
        <tbody>
           @foreach ($contacts as $contact)
            <tr>
                <td>{{$contact->firstName}}</td>
                <td>{{$contact->secondName}}</td>
                <td>{{$contact->IdNumber}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>
                <form action="delete/{{ $contact->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-default">Delete Task</button>
                </form>
                </td>
                </tr>
            @endforeach 
        </tbody>            
        </table>  
        <a href="addnew">
            <button class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Person
                    </button>
        </a> 
         
    </div>

@endsection