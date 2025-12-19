@extends('template.default')

@section('content')
<h1>Workshop #HTML - FORM</h1>
<hr></hr>
            <form>
                <!--- Name--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-2">
                        <label for="fname" >Name</label>
                    </div>
                    <div class="col">
                        <input id="fname" name="fname" type="text" class="form-control ">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุชื่อ
                        </div>
                    </div>
                </div>

                <!---SurName--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-2">
                        <label for="Sname" >Surname</label>
                    </div>
                    <div class="col">
                        <input id="Sname" class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุนามสกุล
                        </div>
                    </div>
                </div>

                <!---BirthDay--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-2">
                        <label for="birthday">Birthday</label>
                    </div>
                    <div class="col">
                        <input id="birthday" name="birthday" type="date" class="form-control">
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุวันเกิด
                        </div>
                    </div>
                </div>

                <!---Gender--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-2">
                        <label for="favcolor">Gender</label>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioDefault" id="genderMale">
                            <label for="genderMale"> Male </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioDefault" id="genderFemale">
                            <label for="genderFemale"> Female </label>
                        </div>
                    </div>
                </div>


                <!---Image--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-2">
                        <label for="myfile">Image</label>
                    </div>
                    <div class="col">
                        <input  type="file" id = "myfile" name= "myfile" >
                    </div>
                </div>

                <!--Address-->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-2">
                        <label for="address">Address</label>
                    </div>
                    <div class="col">
                        <textarea id="address" name="address" rows="3" class="form-control"></textarea>
                        <div class="valid-feedback">
                            ถูกต้อง
                        </div>
                        <div class="invalid-feedback">
                            โปรดระบุที่อยู่
                        </div>
                    </div>
                </div>

                <!--Color-->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-2">
                        <label for="favcolor">Faverite Color</label>
                    </div>
                    <div class="col">
                        <input type="color" id="favcolor" name="favcolor" class="form-control form-control-color">
                    </div>
                </div>

                <!--Music-->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-2">
                        <label for="favcolor">Music Genres</label>
                    </div>
                    <div class="col">
                        <div class="form-check1 form-check-inline">
                            <input class="form-check-input" type="radio" name="radioDefault1" id="musicRock">
                            <label for="musicRock"> Rock </label>
                        </div>
                        <div class="form-check1 form-check-inline">
                            <input class="form-check-input" type="radio" name="radioDefault1" id="musicPop">
                            <label for="musicPop"> Pop </label>
                        </div>
                        <div class="form-check1 form-check-inline">
                            <input class="form-check-input" type="radio" name="radioDefault1" id="musicEtc">
                            <label for="musicEtc"> Etc. </label>
                        </div>
                    </div>
                </div>

                <!--CheckBox-->
                <div class="Check mb-3">
                    <input class="Check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="Check-label" for="defaultCheck1"> ยินดีให้เก็บข้อมูล </label>
                </div>

                <!--Success-->
                <div class="row mb-3 align-items-center">
                    <div class="col-auto">
                        <button type="button" class="btn btn-success" value = "submit"  onclick = "clickMe()" > Success </button>
                    </div>
                    <div class="col-sm-3">
                        <button type="reset" class="btn btn-light"  value = "reset"  >Reset</button>
                    </div>
                </div>

            </form>
@endsection

@push('scripts')
    <script>

        function clickMe() {

        let fname = document.getElementById('fname');
        let Sname = document.getElementById('Sname');
        let birthday = document.getElementById('birthday');
        let address = document.getElementById('address');
        let checkbox = document.getElementById('defaultCheck1');

        let isValid = true;

        // Name
        if (fname.value === "") {
            fname.classList.add('is-invalid');
            fname.classList.remove('is-valid');
            isValid = false;
        } else {
            fname.classList.add('is-valid');
            fname.classList.remove('is-invalid');
        }

        // Surname
        if (Sname.value === "") {
            Sname.classList.add('is-invalid');
            Sname.classList.remove('is-valid');
            isValid = false;
        } else {
            Sname.classList.add('is-valid');
            Sname.classList.remove('is-invalid');
        }

        // Birthday
        if (birthday.value === "") {
            birthday.classList.add('is-invalid');
            birthday.classList.remove('is-valid');
            isValid = false;
        } else {
            birthday.classList.add('is-valid');
            birthday.classList.remove('is-invalid');
        }

        // Address
        if (address.value === "") {
            address.classList.add('is-invalid');
            address.classList.remove('is-valid');
            isValid = false;
        } else {
            address.classList.add('is-valid');
            address.classList.remove('is-invalid');
        }


        if (!checkbox.checked) {
            isValid = false;
        }

    }

    </script>
@endpush

