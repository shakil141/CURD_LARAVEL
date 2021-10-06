@extends('layout')

@section('title', 'all_student_list')

@section('main_content')
<div class="u-content">
    <div class="u-body">

        <!-- breadcumb-area -->
        <section class="breadcumb-area card bg-gradient mb-5">
            <div class="bread-cumb-content card-body d-flex align-items-center">
                <div class="breadcumb-heading">
                    <h2 class="text-white">All Students</h2>
                </div>
                <div class="breadcumb-image ml-auto">
                    <img src="assets/img/breadcumb-students.png" alt="">
                </div>
            </div>
        </section>
        <!-- End breadcumb-area -->




        <section class="es-form-area">
            <div class="card">

                <div class="card-body">

                    @if (session()->has('alert-success'))
                    <div class="alert alert-success">
                        <span>{{session('alert-success')}}</span>
                    </div>
                    @endif
                    <div class="attendances-list-wrap mt-5">

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="bg-gradient">
                                    <tr>
                                        <th scope="col" class="text-white">SL No</th>
                                        <th scope="col" class="text-white">Student Name</th>
                                        <th scope="col" class="text-white text-center">Student Email</th>
                                        <th scope="col" class="text-white text-center">Student Phone</th>
                                        <th scope="col" class="text-white text-center">Student Deapatment</th>
                                        <th scope="col" class="text-white text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($all_students as $student)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{  $student->student_name }}</td>
                                            <td>{{  $student->student_email }}</td>
                                            <td>{{  $student->student_phone }}</td>
                                            <td>{{ $student->department }}</td>
                                            <td>
                                                <a style="margin-bottom: 5px" href="{{ route('student.edit',['student'=>$student->id]) }}" class="btn btn-sm btn-info btn-block"><i class="fas fa-edit"></i></a>

                                                <form action="{{ route('student.destroy',['student'=> $student->id]) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Are you Sure!')" class="btn btn-sm btn-danger btn-block"><i class="fas fa-trash"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </div>
</div>
@endsection
