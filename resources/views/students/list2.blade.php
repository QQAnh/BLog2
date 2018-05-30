@extends('layouts.master')
@section('title', 'Today TimeSlot')
@section('small_title', 'show all product')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">SlotID</th>
            <th scope="col">TimeSlot</th>
            <th scope="col">Subject</th>
            <th scope="col">ClassId</th>
            <th scope="col">Subject</th>




        </tr>
        </thead>
        <tbody>
        @foreach($att as $key =>$item)
            <tr id="{{$item->id}}">

                <th scope="row">{{$item->id}}</th>
                <td class="student-rollnumber" >{{$item->slotId}}</td>
                <td class="product-name" id="name-{{$item->id}}">{{$item->timeslot}}</td>
                <td class="product-name" id="name-{{$item->id}}">{{$item->subject}}</td>
                <td class="product-name" id="name-{{$item->id}}">{{$item->classId}}</td>
                <td><button type="button" class="btn btn-info">Info</button></td>


            </tr>
        @endforeach
        </tbody>

    </table>

    <div class="float-right">
        {{ $att->links() }}
    </div>
@endsection