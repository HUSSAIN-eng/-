 <style>
.ul1{
    width:100%;
    display: inline-block;
}
.ul1 li{
    display: inline-block;
    margin-left:10px;
}
.ul1 li input{
    border:1px solid red;
    width:205px;
}
.col-md-3{
    display: inline-block;
    margin-top:20px;
    
}
.col-md-3 select{
    width: 40%;
    height:40px;
}
 </style>
 @extends('index')


@section('title')
    الصفحه الرئسيه
@endsection




@section('content')


<div class="container-fluid">
 
          <div class="div_title">شروط القبول</div>

<form class="form_home">
    <div class="main_div_form">
        <div class="div1_form" dir="rtl">    
            <ul class="vfb-section vfb-section-1 " style="padding-top: 30px;">
                <li><label>اسم الطالب الرباعــــــي </label><input type="text" class="form-control" vfb-large required /></li>
                <li><label>  اللقب  </label><input type="text" class="form-control" vfb-large required /></li>
                <li><label>اسم الام الثلاثي</label><input type="text" class="form-control" vfb-large required /></li>
                <li><label>  تاريخ الميلاد  </label><input type="text" class="form-control" vfb-large required /></li>
                <li><label>محل الولاده </label><input type="text" class="form-control" vfb-large required /></li>
                <li><label>  رقم هاتف الطالب  </label><input type="text" class="form-control" vfb-large required /></li>
                <li><label> رقم هاتف ولي الامر</label><input type="text" class="form-control" vfb-large required /></li>
            </ul>
        </div>
    


        <div class="div2_form">
          <div class="col-md-3" style="padding-top: 30px;" style="padding-top: 30px;">
             <label for="validationCustom04" class="form-label">الحاله الزوجيه</label>
             <select class="form-select" id="validationCustom04" required>
                 <option selected disabled value="">اختر</option>
                 <option>عزباء/اعزب</option>
                 <option>متزوجه/ متزوج</option>
             </select>
         </div>

         
       


            <div class="col-md-3">
            <label for="validationCustom04" class="form-label"> الامراض المزمنه</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">اختر</option>
                    <option>سليم</option>
                    <option>مصاب</option>
                </select>
            </div>
        </div>




        <div class="div3_form">

        <fieldset style="padding-top: 60px;" class="vfb-fieldset vfb-fieldset-3 d985d8b9d984d988d985d8a7d8aa-d987d988d98ad8a9-d8a7d984d8a7d8add988d8a7d984-d8a7d984d985d8afd986d98ad8a9 " id="item-vfb-23 ">
          
                    <ul class="vfb-section vfb-section-3 " style="padding-top: 30px;">
                        <li><label>  اسم دائره الاحوال </label><input type="text" class="form-control" vfb-large required /></li>
                        <li><label>     رقم الهويه </label><input type="text" class="form-control" vfb-large required /></li>
                        <li><label>    السجل  </label><input type="text" class="form-control" vfb-large required /></li>
                        <li><label>     الصحيفه </label><input type="text" class="form-control" vfb-large required /></li>
                        <li><label>     رقم البطاقه الموحده </label><input type="text" class="form-control" vfb-large required /></li>
                    </ul>&nbsp;</fieldset>


        </div>
        <div class="div4_form">
             <div class="col-md-3" >
                            <label for="validationCustom04" class="form-label">اختر الكليه</label>

                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">القسم</option>
                                    <option>هندسه تقنيات الحاسوب</option>
                                    <option>القانون</option>
                                    <option>الشريعه</option>
                                    <option>علوم قرأن</option>                             
                                    <option>اللغه العربيه</option>
                                    <option>الانكليزي</option>
                                    <option>ماليه وصيرفيه</option>
                                    <option>الاعلام</option>
                                </select>

            </div>
        </div>
        <div class="div5_from">
        <ul class="vfb-section vfb-section-3 " >
                <li><label>اسم الاعداديه</label><input type="text" class="form-control" vfb-large required /></li>
                <li><label>فرع التخرج</label><input type="text" class="form-control" vfb-large required /></li>
                <li><label>سنه التخرج</label><input type="text" class="form-control" vfb-large required /></li>
                <li><label>المجموع</label><input type="text" class="form-control" vfb-large required /></li>
                <li><label>المعدل</label><input type="text" class="form-control" vfb-large required /></li>
        </ul>
            </div>
    </div>
   
</form>




    
@endsection

