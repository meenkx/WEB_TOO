@component('mail::message')
    รายงานโดย  : ​{{ $name }} <br>
    หัวข้อ       : <span style="font-weight: bold">เรื่อง {{ $subject }}</span> <br>
    จาก E-mail : {{ $email }} <br>
    มีเนื้อหาว่า   : {{ $message }}

    ขอขอบคุณ,
    จาก ​{{ $name }}
@endcomponent