@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6  mx-auto my-3">
            <form action="{{route('send-message')}}" method="POST" class="form border p-3">
                @csrf
                <div class="mp">
                    <label for=""> Name</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="mp">
                    <label for=""> Email</label>
                    <input type="text" name="email" id="" class="form-control">
                </div>
                <div class="mp">
                    <label for=""> Message</label>
                <textarea name="message" id="" class="form-control"></textarea>
                            </div>
                <div class="mb-3">
                <input type="submit" value="send" class="form-control bg-success">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
