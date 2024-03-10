<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            เพิ่มนักศึกษา
        </h2>
        สวัสดี , {{Auth::user()->name}}
    </x-slot>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('submit1')}}" method="post">
                        <div class="form-group">
                            <label for="student_ID">รหัสนักศึกษา</label>
                            <input type="text" class="form-control" name="student_ID">
                            <label for="name_lastname">ชื่อ นามสกุล</label>
                            <input type="text" class="form-control" name="student_ID">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="student_ID">
                        </div>
                        <input type="submit" value="เพิ่มข้อมูล" class="btn btn-primary">
</body>

</html>

</x-app-layout>