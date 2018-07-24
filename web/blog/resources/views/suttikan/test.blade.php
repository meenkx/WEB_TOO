<form id="contact-form" action="{{ route('MailSender') }}" method="POST">
    @csrf
    <div class="single-contact-inner">
        <div class="single-contact-form">
            <div class="contact-box name">
                <span class="changesize">ชื่อของคุณ (ชื่อ - นามสกุล) <span style="color:red">*</span></span>
                <input type="text" name="name" value="นาย ธนมงคง แย้มเดช" autofocus required>
            </div>
            <div class="contact-box email">
                <span class="changesize">ชื่อ E - mail <span style="color:red">*</span></span>
                <input type="email" name="email" value="tyamdej@gmail.com" required>
            </div>
            <div class="contact-box subject">
                <span class="changesize">หัวข้อเรื่อง <span style="color:red">*</span></span>
                <input type="text" name="subject" value="เรื่อง test ระบบ" required>
            </div>
        </div>
        <div class="single-contact-form">
            <div class="contact-box message">
                <span class="changesize">ระบุข้อความที่จะติดต่อ <span style="color:red">*</span></span>
                <textarea name="message" required>เทสระบบ</textarea>
            </div>
            <div class="contact-btn">
                <button type="submit" class="htc__btn btn--theme fontchange changesize">ส่งข้อความ</button>
            </div>
        </div>
    </div>
</form>