@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<h2>تسجيل جديد</h2>
<div class="steps-indicator">
    <span class="step completed"></span>
    <span class="step completed"></span>
    <span class="step active"></span>
</div>
<form id="registration-form">
    <label for="visitor-type">نوع الزائر</label>
    <div class="visitor-type">
        <button type="button" class="type-option active">مواطن</button>
        <button type="button" class="type-option">مقيم</button>
        <button type="button" class="type-option">سائح</button>
    </div>

    <label for="full-name">الاسم الكامل</label>
    <input type="text" id="full-name" placeholder="ادخل اسمك ..." required>

    <label for="id-number">رقم الهوية</label>
    <input type="text" id="id-number" placeholder="ادخل رقم الهوية" required>

    <label for="mobile-number">رقم الجوال</label>
    <input type="tel" id="mobile-number" placeholder="966xxxxxxxxx" required>

    <label for="gender">الجنس</label>
    <div class="gender">
        <button type="button" class="gender-option active">ذكر</button>
        <button type="button" class="gender-option">أنثى</button>
    </div>

    <button type="submit" class="submit-button">تسليم الطلب</button>
</form>
@endsection