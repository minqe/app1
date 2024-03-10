<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            สร้างห้องเรียน
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

        <div class="card">
            <div class="row">
                <div class="col">รหัสวิชา<input type="text" class="form-control form-control-sm"></div>
                <div class="col">อาจารย์ผู้สอน<input type="text" class="form-control form-control-sm"></div>
                <div class="col">Email อาจารย์ผู้สอน<input type="text" class="form-control form-control-sm"></div>
            </div>
        </div>

        <div class="card">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <div class="container">
                                <table class="table table-bordered table-sm">
                                    <thead>
                                        <tr>
                                            <th>ลำดับ</th>
                                            <th>รหัสนักศึกษา</th>
                                            <th>ชื่อ-นามสกุล</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>6204xxxxxx</td>
                                            <td>John abc</td>
                                            <td>123@123.com</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div><input type="submit" value="สร้างห้องเรียน" class="btn btn-primary"></div>
        </div>
    </body>

    </html>

</x-app-layout>