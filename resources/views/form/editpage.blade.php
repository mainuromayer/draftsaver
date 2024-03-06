<div class="content-wrapper">
    <!-- Content Header Start -->
    <section class="content-header">
        <div class="container">
            <div class="text-right pr-5">
                <a href="{{url('/list')}}" class="btn btn-primary">List</a>
            </div>
        </div>
        <div>
            <h1 class="text-center">CONVOCATION FORM - 2024</h1>
        </div>
    </section>
    <!-- Content Header End -->

    <!-- Main Content Start -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 form ">
                    <div class="px-5">
                        <div class="card">
                            <div class="card-body">
                                <!-- form start -->
                                <form method="POST">
                                    <!-- =============== Personal Information =============== -->
                                    <h5 class="pt-3 pb-2">Personal Information</h5>

                                    <input type="hidden" id="user_id" value="{{ $user->id }}">

                                    <div class="form-group">
                                        <label for="name">Name: <span class="badge small text-danger">*</span> [As per
                                            S.S.C Certificate]</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Enter Your Name">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="fathers_name">Father's Name: <span
                                                        class="badge small text-danger">*</span></label>
                                                <input type="text" class="form-control" id="fathers_name" name="fathers_name" value="{{ $user->fathers_name }}" placeholder="Enter Your Father's Name">
                                            </div>
                                            <div class="col-6">
                                                <label for="mothers_name">Mother's Name: <span
                                                        class="badge small text-danger">*</span></label>
                                                <input type="text" class="form-control" id="mothers_name" name="mothers_name" value="{{ $user->mothers_name }}" placeholder="Enter Your Mother's Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="birthday">Date Of Birth: <span
                                                        class="badge small text-danger">*</span></label>
                                                <input type="date" class="form-control" id="birthday" name="birthday" value="{{ $user->birthday }}">
                                            </div>
                                            <div class="col-6">
                                                <label for="gender">Gender:</label>
                                                <select class="custom-select" id="gender" name="gender">
                                                    <option value="male" {{ $user->gender == 'male' ? 'selected' : '' }}>Male</option>
                                                    <option value="female" {{ $user->gender == 'female' ? 'selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <!-- =============== Degree Information =============== -->
                                    <h5 class="pt-3 pb-2">Degree Information</h5>

                                    <h6 class="">1) Undergraduate:</h6>
                                    <div class="form-group">
                                        <label for="ug_degree_name">Name Of Degree:</label>
                                        <input type="text" class="form-control" id="ug_degree_name" name="ug_degree_name" value="{{ $user->ug_degree_name }}" placeholder="Name Of Degree">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="ug_admission_session">Admission Session:</label>
                                                <input type="text" class="form-control" id="ug_admission_session" name="ug_admission_session" value="{{ $user->ug_admission_session }}" placeholder="Admission Session">
                                            </div>
                                            <div class="col-4">
                                                <label for="ug_id_no">Reg/ID No:</label>
                                                <input type="number" class="form-control" id="ug_id_no" name="ug_id_no" value="{{ $user->ug_id_no }}" placeholder="ID No">
                                            </div>
                                            <div class="col-4">
                                                <label for="ug_batch_no">Batch No:</label>
                                                <input type="number" class="form-control" id="ug_batch_no" value="{{ $user->ug_batch_no }}" name="ug_batch_no" placeholder="Batch">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="ug_passing">Year Of Passing:</label>
                                                <input type="text" class="form-control" id="ug_passing" value="{{ $user->ug_passing }}" name="ug_passing" placeholder="Year Of Passing">
                                            </div>
                                            <div class="col-4">
                                                <label for="ug_session">Graduating Session:</label>
                                                <input type="number" class="form-control" id="ug_session" value="{{ $user->ug_session }}" name="ug_session"
                                                       placeholder="Graduating Session">
                                            </div>
                                            <div class="col-4">
                                                <label for="ug_cgpa">CGPA:</label>
                                                <input type="number" class="form-control" id="ug_cgpa" value="{{ $user->ug_cgpa }}" name="ug_cgpa" placeholder="CGPA">
                                            </div>
                                        </div>
                                    </div>


                                    <h6 class="">2) Graduate:</h6>
                                    <div class="form-group">
                                        <label for="g_degree_name">Name Of Degree:</label>
                                        <input type="text" class="form-control" id="g_degree_name" value="{{ $user->g_degree_name }}" name="g_degree_name" placeholder="Name Of Degree">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="g_admission_session">Admission Session:</label>
                                                <input type="text" class="form-control" id="g_admission_session" value="{{ $user->g_admission_session }}" name="g_admission_session" placeholder="Admission Session">
                                            </div>
                                            <div class="col-4">
                                                <label for="g_id_no">Reg/ID No:</label>
                                                <input type="number" class="form-control" id="g_id_no" value="{{ $user->g_id_no }}" name="g_id_no" placeholder="ID No">
                                            </div>
                                            <div class="col-4">
                                                <label for="g_batch_no">Batch No:</label>
                                                <input type="number" class="form-control" id="g_batch_no" value="{{ $user->g_batch_no }}" name="g_batch_no" placeholder="Batch">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="g_passing">Year Of Passing:</label>
                                                <input type="text" class="form-control" id="g_passing" value="{{ $user->g_passing }}" name="g_passing" placeholder="Year Of Passing">
                                            </div>
                                            <div class="col-4">
                                                <label for="g_session">Graduating Session:</label>
                                                <input type="number" class="form-control" id="g_session" value="{{ $user->g_session }}" name="g_session" placeholder="Graduating Session">
                                            </div>
                                            <div class="col-4">
                                                <label for="g_cgpa">CGPA:</label>
                                                <input type="number" class="form-control" id="g_cgpa" value="{{ $user->g_cgpa }}" name="g_cgpa" placeholder="CGPA">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>


                                    <!-- =============== Contact Information =============== -->
                                    <h5 class="pt-3 pb-2">Contact Information</h5>

                                    <div class="form-group">
                                        <label for="address">Address: <span
                                                class="badge small text-danger">*</span></label>
                                        <input type="text" class="form-control" id="address" value="{{ $user->address }}" name="address"
                                               placeholder="Address">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="mobile">Mobile No: <span
                                                        class="badge small text-danger">*</span></label>
                                                <input type="number" class="form-control" id="mobile" value="{{ $user->mobile }}" name="mobile"
                                                       placeholder="Mobile No">
                                            </div>
                                            <div class="col-6">
                                                <label for="email">E-mail: <span
                                                        class="badge small text-danger">*</span></label>
                                                <input type="text" class="form-control" id="email" value="{{ $user->email }}" name="email"
                                                       placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="status">Status: <span
                                                        class="badge small text-danger">*</span></label>
                                                <select class="custom-select rounded-0 bg-gradient-light" id="status" name="status">
                                                    <option selected disabled>Select Status</option>
                                                    <option value="pending" {{ $user->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="success" {{ $user->status == 'success' ? 'selected' : '' }}>Success</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="form-group text-center">
                                        <a href="#" onclick="onUpdate()" class="btn btn-success text-center mt-3">Update
                                            Now</a>
                                    </div>
                                </form>
                                <!-- form end -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Main Content End -->
</div>






<script>
    getProfile();
    async function getProfile() {
        try {
            let userId = new URLSearchParams(window.location.search).get('id');
            let res = await axios.get(`/user-profile?id=${userId}`);
            if (res.status === 200 && res.data['status'] === 'successfull') {
                let data = res.data['data'];
                document.getElementById('name').value = data['name'];
                document.getElementById('fathers_name').value = data['fathers_name'];
                document.getElementById('mothers_name').value = data['mothers_name'];
                document.getElementById('birthday').value = data['birthday'];
                document.getElementById('gender').value = data['gender'];
                document.getElementById('ug_degree_name').value = data['ug_degree_name'] || '';
                document.getElementById('ug_admission_session').value = data['ug_admission_session'] || '';
                document.getElementById('ug_id_no').value = data['ug_id_no'] || '';
                document.getElementById('ug_batch_no').value = data['ug_batch_no'] || '';
                document.getElementById('ug_passing').value = data['ug_passing'] || '';
                document.getElementById('ug_session').value = data['ug_session'] || '';
                document.getElementById('ug_cgpa').value = data['ug_cgpa'] || '';
                document.getElementById('g_degree_name').value = data['g_degree_name'] || '';
                document.getElementById('g_admission_session').value = data['g_admission_session'] || '';
                document.getElementById('g_id_no').value = data['g_id_no'] || '';
                document.getElementById('g_batch_no').value = data['g_batch_no'] || '';
                document.getElementById('g_passing').value = data['g_passing'] || '';
                document.getElementById('g_session').value = data['g_session'] || '';
                document.getElementById('g_cgpa').value = data['g_cgpa'] || '';
                document.getElementById('address').value = data['address'];
                document.getElementById('mobile').value = data['mobile'];
                document.getElementById('email').value = data['email'];
                document.getElementById('status').value = data['status'];
            }
        } catch (error) {
            errorToast(res.data['message']);
        }
    }

    async function onUpdate() {
        event.preventDefault();
        let userId = new URLSearchParams(window.location.search).get('id');

        let name = document.getElementById('name').value;
        let fathers_name = document.getElementById('fathers_name').value;
        let mothers_name = document.getElementById('mothers_name').value;
        let birthday = document.getElementById('birthday').value;
        let gender = document.getElementById('gender').value;
        let ug_degree_name = document.getElementById('ug_degree_name').value;
        let ug_admission_session = document.getElementById('ug_admission_session').value;
        let ug_id_no = document.getElementById('ug_id_no').value;
        let ug_batch_no = document.getElementById('ug_batch_no').value;
        let ug_passing = document.getElementById('ug_passing').value;
        let ug_session = document.getElementById('ug_session').value;
        let ug_cgpa = document.getElementById('ug_cgpa').value;
        let g_degree_name = document.getElementById('g_degree_name').value;
        let g_admission_session = document.getElementById('g_admission_session').value;
        let g_id_no = document.getElementById('g_id_no').value;
        let g_batch_no = document.getElementById('g_batch_no').value;
        let g_passing = document.getElementById('g_passing').value;
        let g_session = document.getElementById('g_session').value;
        let g_cgpa = document.getElementById('g_cgpa').value;
        let address = document.getElementById('address').value;
        let mobile = document.getElementById('mobile').value;
        let email = document.getElementById('email').value;
        let status = document.getElementById('status').value;


        if (email.length === 0) {
            errorToast('E-mail Address is required');
        } else if (fathers_name.length === 0) {
            errorToast("Father's Name is required");
        } else if (mothers_name.length === 0) {
            errorToast("Mother's Name is required");
        } else if (gender === null || gender === "") {
            errorToast('Gender is required');
        } else if (birthday.length === 0) {
            errorToast('Date of Birth is required');
        } else if (address.length === 0) {
            errorToast('Address is required');
        } else if (mobile.length === 0) {
            errorToast('Mobile No is required');
        } else if (status === '') {
            errorToast('Status is required');
        } else {
            let res = await axios.post('/update-user', {
                id: userId,
                name: name,
                fathers_name: fathers_name,
                mothers_name: mothers_name,
                birthday: birthday,
                gender: gender,
                ug_degree_name: ug_degree_name,
                ug_admission_session: ug_admission_session,
                ug_id_no: ug_id_no,
                ug_batch_no: ug_batch_no,
                ug_passing: ug_passing,
                ug_session: ug_session,
                ug_cgpa: ug_cgpa,
                g_degree_name: g_degree_name,
                g_admission_session: g_admission_session,
                g_id_no: g_id_no,
                g_batch_no: g_batch_no,
                g_passing: g_passing,
                g_session: g_session,
                g_cgpa: g_cgpa,
                address: address,
                mobile: mobile,
                email: email,
                status: status
            });

            if (res.status === 200 && res.data['status'] === 'successfull') {
                successToast(res.data['message']);
                setTimeout(function () {
                    window.location.href = '/list';
                }, 200);
            } else {
                errorToast(res.data['message']);
            }

        }
    }


</script>


