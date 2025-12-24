@extends('template.default')

@section('content')
<h1>ข้อมูลที่ส่งมา</h1>

<ul>
    <li>ชื่อ: {{ $data['fname'] }}</li>
    <li>นามสกุล: {{ $data['Sname'] }}</li>
    <li>วันเกิด: {{ $data['birthday'] }}</li>
    <li>เพศ: {{ $data['gender'] }}</li>
    <li>ที่อยู่: {{ $data['address'] }}</li>
    <li>แนวเพลง: {{ $data['music'] }}</li>
</ul>
@endsection
