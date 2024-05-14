@extends('_partials.main')
@section('title', 'إضافة زبون جديد')
@section('main')
<div class="row mt-4 mb-4 border border-3">
  <div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top gold-effect">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">إدارة الزبناء</h5>
          <p class="card-text">اﻷنتقال إلى واجة الإدارة : إضافة ، تعديل ، حذف</p>
          <a href="{{route('clients.index')}}" class="btn btn-dark">الإنتقال</a>
        </div>
      </div>
    </div> 
    <div class="col-lg-5 col-sm-10 col-md-6 bg-white m-auto rounded-top gold-effect">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">إدارة الموردين</h5>
              <p class="card-text">اﻷنتقال إلى واجة الإدارة : إضافة ، تعديل ، حذف</p>
              <a href="{{route('suppliers.index')}}" class="btn btn-warning">الإنتقال</a>
            </div>
          </div>       
    </div>            
@endsection