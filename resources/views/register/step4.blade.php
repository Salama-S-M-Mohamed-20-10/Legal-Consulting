@extends('layouts.app')

@section('content')
 
    <h3>Review Details</h3>
    <form action="/lawyers/store" method="post" >
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <td>First Name:</td>
                <td><strong>{{$register->firstName}}</strong></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><strong>{{$register->lastName}}</strong></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><strong>{{$register->email}}</strong></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><strong>{{$register->password}}</strong></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><strong>{{$register->gender}}</strong></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><strong>{{$register->phone}}</strong></td>
            </tr>
            <tr>
                <td>Governorate:</td>
                <td><strong>{{$register->governorate}}</strong></td>
            </tr>
            <tr>
                <td>region:</td>
                <td><strong>{{$register->region}}</strong></td>
            </tr>
            <tr>
                <td>specialty:</td>
                <td><strong>{{$register->specialty}}</strong></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><strong>{{$register->address}}</strong></td>
            </tr>
            <!--<tr>
                <td>Name:</td>
                <td><strong>{{$register->name}}</strong></td>
            </tr>-->
            <tr>
                <td>Image:</td>
                <td><strong><img style="width:150px;height:150px;" alt="Product Image" src="/storage/photo/{{$register->lawyerPhoto}}"/></strong></td>
            </tr>
        </table>
        <a type="button" href="/lawyers/register1" class="btn btn-warning">Back to Step 1</a>
        <a type="button" href="/lawyers/register2" class="btn btn-warning">Back to Step 2</a>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection