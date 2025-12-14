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
                    </div>
                </div>

                <!---BirthDay--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-2">
                        <label for="birthday">Birthday</label>
                    </div>
                    <div class="col">
                        <input id="birthday" name="birthday" type="date" class="form-control">
                    </div>
                </div>

                <!---Gender--->
                <div class="row mb-3 align-items-center">
                    <div class="col-sm-2">
                        <label for="favcolor">Gender</label>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                            <label class="form-check-label" for="radioDefault1"> Male </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                            <label class="form-check-label" for="radioDefault2"> Female </label>
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
                            <input class="form-check1-input" type="radio" name="radioDefault1" id="radioDefault1">
                            <label class="form-check1-label" for="radioDefault1"> Rock </label>
                        </div>
                        <div class="form-check1 form-check-inline">
                            <input class="form-check1-input" type="radio" name="radioDefault1" id="radioDefault2" checked>
                            <label class="form-check1-label" for="radioDefault2"> Pop </label>
                        </div>
                        <div class="form-check1 form-check-inline">
                            <input class="form-check1-input" type="radio" name="radioDefault1" id="radioDefault3" checked>
                            <label class="form-check1-label" for="radioDefault3"> Etc.</label>
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

        clickMe = function (){

            let fname = document.getElementById('fname')
            console.log(fname.value)

            if(fname.value == "") {
                fname.classList.remove('is-valid')
                fname.classList.add('is-invalid')
            }else{
                fname.classList.remove('is-invalid')
                fname.classList.add('is-valid')
            }
        }

    </script>
@endpush

