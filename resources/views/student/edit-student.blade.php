@extends('layout')

@section('title','Edit_Student')

@section('main_content')
<div class="u-content">
    <div class="u-body">




        <section class="es-form-area">
            <div class="card">
                <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                    <h2 class="text-white mb-0">Edit Student {{ $student->student_name }}</h2>
                </header>
                <div class="card-body">
                    <form action="{{ route('student.update',['student'=> $student->id]) }}" method="POST" class="es-form es-add-form">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                <label for="title">Student Name</label>
                                <input value="{{ old('student_name') ?? $student->student_name }}" name="student_name" type="text" placeholder="Alexa">

                                @error('student_name')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                <label for="title">Email</label>
                                <input value="{{ old('student_email') ?? $student->student_email }}" name="student_email" type="email" placeholder="example@gmail.com">

                                @error('student_email')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                <label for="title">Phone</label>
                                <input value="{{ old('student_phone') ?? $student->student_phone }}" name="student_phone" type="tel" placeholder="+99123456780">

                                @error('student_phone')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                <label for="title">Department</label>
                                <input value="{{ old('department') ?? $student->department }}" name="department" type="text" placeholder="CSE">

                                @error('department')
                                <span class="text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                <input type="submit" class="btn btn-danger btn-sm btn-block bg-gradient border-0 text-white" value="Edit Student">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection
