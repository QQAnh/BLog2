@extends('layouts.master')
@section('title', 'Take Attendance')
@section('small_title', 'show all product')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">RollNumber</th>
            <th scope="col">Name</th>
            <th scope="col">Present</th>

        </tr>
        </thead>
        <tbody>
        @foreach($student as $key =>$item)
            <tr id="{{$item->id}}">

                <th scope="row">{{$item->id}}</th>
                <td class="student-rollnumber" >{{$item->rollNumber}}</td>
                <td class="product-name" id="name-{{$item->id}}">{{$item->name}}</td>
                <td> <input type="checkbox" class="form-check-input checked" id="exampleCheck1"></td>
            </tr>
        @endforeach
        </tbody>

    </table>
    <div class="float-left">
        <form class="form-inline">
            {{--<div class="form-check p-2">--}}
                {{--<input type="checkbox" class="form-check-input checkAll" id="exampleCheck1">--}}
                {{--<label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
            {{--</div>--}}

            {{--<div class="form-group p-2" >--}}
                {{--<select class="form-control form-control-sm">--}}
                    {{--<option>--select one--</option>--}}
                    {{--<option>Delete</option>--}}
                    {{--<option>Select</option>--}}
                {{--</select>--}}
            {{--</div>--}}

            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-primary">Reset</button>

        </form>
    </div>
    <div class="float-right">
        {{ $student->links() }}
    </div>
@endsection