@extends('template.default')

@section('content')
<h1>INFORMATION</h1>

<ul>
    <li>ชื่อ: {{ $data['fname'] }}</li>
    <li>นามสกุล: {{ $data['Sname'] }}</li>
    <li>วันเกิด: {{ $data['birthday'] }}</li>
    <li>เพศ: {{ $data['gender'] }}</li>
    <li>ที่อยู่: {{ $data['address'] }}</li>
    <li>แนวเพลง: {{ $data['music'] }}</li>
    <li>สีที่ชอบ:
        <span style="
            display:inline-block;
            width:20px;
            height:20px;
            background-color: {{ $data['favcolor'] }};
            border:1px solid #000;
            vertical-align:middle;
        "></span>
    </li>
</ul>
@endsection
