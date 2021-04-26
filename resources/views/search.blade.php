
           
           @extends('index')
           @section('title')
               بحث 
           @endsection
           

           @section('content')
               
         
           
           
   <style>
     .form-inline{
      margin: 5% 40%;
      border: 1px solid rgb(160, 238, 245);
     }
     
  </style>        
           
           
         


           
              
<form class="form-inline" style="display: flex" method="GET" action="search">
  <input  size="" class="form-control mr-sm-2" type="search"  name="q" placeholder="Search" aria-label="Search">
                
  <input btn btn-outline-success my-2 my-sm-0 type="submit" value="search">
</form> 

           

         
         
       
    

    @yield('body')

<div class="container" style="margin-top: 40px;">

    <table class="table m-10" dir="rtl"  style="width:100%" style="height: 600px">
        <thead class="thead-dark">
          <tr>
            <th scope="col">id</th>
            <th scope="col">الاسم</th>
            <th scope="col">اليوزر</th>
            <th scope="col">البرج</th>
            <th scope="col">المبلغ</th>
            <th scope="col">تاريخ التوصيل</th>
            <th scope="col">رقم الهاتف</th>
            <th scope="col">الخصم</th>
          </tr>
        </thead>
        @foreach ($user as $users)
        
            <tbody>
                <tr>
                  <th>{{ $users->id }}</th>
                  <td>{{ $users->name }}</td>
                  <td>{{ $users->user }}</td>
                  <td>{{ $users->afflate }}</td>
                  <th>{{ $users->count }}</th>
                  <td>{{ $users->data_activate }}</td>
                  <td>{{ $users->phone }}</td>
                  <td>{{ $users->discount }}</td>
                </tr>
             
              </tbody>
    
        
    
        @endforeach
      </table>
      

</div>

@endsection
           

