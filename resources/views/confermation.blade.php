
@if (Route::has('prep-courses')&&$sec===0)

<h1>Beta Education course registration</h1>
<h2 dir="rtl">مرحبا بك {{ $studentname }}</h2>
<p dir="rtl">خطوات التسجيل في كورسات المرحله الاعداديه</p>
<ol dir="rtl">
    <li>من فضلك ارسل المبلغ علي هذا ال <span style="font-weight: bold">01017944211</span> من خلال فوري او فودافون كاش</li>
    <li>قم بأرسال <span style="font-weight: bold">صوره</span> لايصال تأكيد الدفع من علي هاتفك من خلال ال <span style="font-weight: bold">replay</span> علي هذا الاميل</li>
</ol>
<p dir="rtl">للشكاوي او الاستفسارات يرجي ارسال رساله علي الواتساب علي هذا الرقم <span style="font-weight: bold">01017944211</span></p>
<p dir="rtl">اسم الماده: {{ $subjectName . $id }}</p>
@endif 
@if (Route::has('thanwy12-courses')&&$sec===11)
    <h1>Beta Education course registration</h1>
    <h2 dir="rtl">مرحبا بك {{ $studentname }}</h2>
    <p dir="rtl">خطوات التسجيل في كورسات الصف الاول الثانوي</p>
    <ol dir="rtl">
        <li>من فضلك ارسل المبلغ علي هذا ال <span style="font-weight: bold">01017944211</span> من خلال فوري او فودافون كاش</li>
        <li>قم بأرسال <span style="font-weight: bold">صوره</span> لايصال تأكيد الدفع من علي هاتفك من خلال ال <span style="font-weight: bold">replay</span> علي هذا الاميل</li>
    </ol>
    <p dir="rtl">للشكاوي او الاستفسارات يرجي ارسال رساله علي الواتساب علي هذا الرقم <span style="font-weight: bold">01017944211</span></p>
    <p dir="rtl">اسم الماده: {{ $subjectName}}</p>

@endif  
@if (Route::has('thanwy')&& ($sec==='ادبي'||$sec==='علمي علوم'||$sec==='علمي رياضه'||$sec==='علمي') )
    <h1>Beta Education course registration</h1>
    <h2 dir="rtl">مرحبا بك {{ $studentname }}</h2>
    @if ($id==2)
    <p dir="rtl">خطوات التسجيل في كورسات الصف الثاني الثانوي {{$sec}}</p>
    @else
    <p dir="rtl">خطوات التسجيل في كورسات الصف الثالث الثانوي {{$sec}}</p>
    @endif
    <ol dir="rtl">
        <li>من فضلك ارسل المبلغ علي هذا ال <span style="font-weight: bold">01017944211</span> من خلال فوري او فودافون كاش</li>
        <li>قم بأرسال <span style="font-weight: bold">صوره</span> لايصال تأكيد الدفع من علي هاتفك من خلال ال <span style="font-weight: bold">replay</span> علي هذا الاميل</li>
    </ol>
    <p dir="rtl">للشكاوي او الاستفسارات يرجي ارسال رساله علي الواتساب علي هذا الرقم <span style="font-weight: bold">01017944211</span></p>
    <p dir="rtl">اسم الماده: {{ $subjectName}}</p>>
@endif

