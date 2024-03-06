<div class="content-wrapper">
    <!-- Content Header Start -->
    <section class="content-header">
        <div>
            <h1 class="text-center">CONVOCATION LIST - 2024</h1>
        </div>
    </section>
    <!-- Content Header End -->


    <!-- Main Content Start -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 list">
                    <div class="px-5">
                        <div class="card mt-4">
                            <div class="card-header">
                                <h3 class="card-title">List</h3>
                                <a href="{{url('/form')}}" class="float-sm-right btn btn-primary">Add</a></div>
                            <!-- ./card-header -->
                            <div class="card-body">
                                <table id="studentInfoTable" class="table table-striped table-bordered table-condensed mb-0">
                                    <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="studentInfoRows" class="text-center">
{{--                                        @foreach($user as $student)--}}
{{--                                            <tr>--}}
{{--                                                <td>{{ $student->id }}</td>--}}
{{--                                                <td>{{ $student->name }}</td>--}}
{{--                                                <td>{{ $student->email }}</td>--}}
{{--                                                <td>{{ $student->status }}</td>--}}
{{--                                            </tr>--}}
{{--                                        @endforeach--}}
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Main Content End -->

</div>


<!-- DataTables JavaScript -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>


<script>




    function getList() {
        $.ajax({
            url: '/list-user',
            success: function (res) {
                renderTable(res);
            },
            error: function (xhr, status, error) {
                console.error('Error fetching data:', error);
            }
        });
    }

    function renderTable(res) {
        let studentInfoTable = $('#studentInfoTable');
        let studentInfoRows = $('#studentInfoRows');
        studentInfoRows.empty();

        res.data.forEach(function (item, index) {
            let actionIcon = '';
            if(item.status === 'panding'){
                // errorToast(item.status)
                actionIcon = `<a href="/user-profile?id=${item.id}"><i class="fas fa-edit"></i></a>`;
            } else if(item.status === 'success'){
                // successToast(res.status)
                actionIcon = '<i class="fas fa-eye"></i>';
            } else {
                // errorToast(res.data['error'])
                actionIcon = `<a href="/user-profile?id=${item.id}"><i class="fas fa-edit"></i></a>`;
            }

            let row = `<tr>
                    <td>${index + 1}</td>
                    <td>${item['name']}</td>
                    <td>${item['email']}</td>
                    <td>${item['status']}</td>
                    <td>${actionIcon}</td>
               </tr>`;
            studentInfoRows.append(row);
        });
    }

    getList();


</script>
