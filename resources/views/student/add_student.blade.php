@extends('layout')

@section('title','Add_Student')

@section('main_content')

    <div class="u-content">
        <div class="u-body">




            <section class="es-form-area">
                <div class="card">
                    <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                        <h2 class="text-white mb-0">Add New Student</h2>
                    </header>
                    <div class="card-body">
                        <form action="{{ route('student.store') }}" method="POST" class="es-form es-add-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Student Name</label>
                                    <input name="student_name" type="text" placeholder="Alexa">

                                    @error('student_name')
                                    <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Email</label>
                                    <input name="student_email" type="email" placeholder="example@gmail.com">

                                    @error('student_email')
                                    <span class="text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Phone</label>
                                    <input name="student_phone" type="tel" placeholder="+99123456780">

                                    @error('student_phone')
                                    <span class="text text-danger">{{ $message }}</span>
                                    @enderror

                                </div>

                                <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                    <label for="title">Department</label>

                                    <select name="department" id="" class="form-control">
                                        <option value="" selected disabled>select department</option>
                                        @foreach ($dep as $item)
                                            <option value="{{ $item->department_name }}">{{ $item->department_name }}</option>
                                        @endforeach
                                    </select>

                                    @error('department')
                                    <span class="text text-danger">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                    <input type="submit" class="btn btn-danger btn-sm btn-block bg-gradient border-0 text-white" value="Add Student">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
