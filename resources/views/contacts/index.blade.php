@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
          <h3>جهات الاتصال</h1>
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">الاسم</th>
                  <th scope="col">العائلة</th>
                  <th scope="col">البريد الإلكتروني</th>
                  <th scope="col">&nbsp</th>
                  <th scope="col">&nbsp</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>أحمد</td>
                  <td>محمود</td>
                  <td>ahmed@example.com</td>
                  <td><button type="submit" class="btn btn-danger">حذف</button></td>
                  <td><button type="submit" class="btn btn-primary">تعديل</button></td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>حسن</td>
                  <td>حسنين</td>
                  <td>hassan@example.com</td>
                  <td><button type="submit" class="btn btn-danger">حذف</button></td>
                  <td><button type="submit" class="btn btn-primary">تعديل</button></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>منى</td>
                  <td>أحمد</td>
                  <td>mona@example.com</td>
                  <td><button type="submit" class="btn btn-danger">حذف</button></td>
                  <td><button type="submit" class="btn btn-primary">تعديل</button></td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
@endsection
