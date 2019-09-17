@extends('master')
@section('title')
Liên Hệ
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/lienhe.css')}}">
@endsection
@section('content')
<section class="Material-contact-section section-padding section-dark">
      <div class="container">
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                  <h4 class="section-title">Mọi thông tin vui lòng liên hệ với chúng tôi:

</h4>
              </div>
          </div>
          <div class="row">
              <!-- Section Titile -->
              <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p><b>Tên công ty :</b> CÔNG TY TNHH UNIECO VIETNAM </p>

         			<p><b>Tên tiếng anh:</b>UNIECO VIETNAM LIMITED COMPAN </p>
         			<p><b>Tên giao dịch viết tắt:</b>UNIECO </p>
         			<p><b>Địa chỉ trụ sở:</b>78B Lê Lợi, phường Nguyễn Trãi, quận Hà Đông,Thành phố Hà Nội</p>
         			<p><b>Văn phòng giao dịch:</b>Phòng 601, tòa nhà Tuấn Hạnh, 82/116 Nhân Hòa,Quận Thanh Xuân, thành phố Hà Nội</p>
         			<p><b> Điện thoại:</b>024.6281 6906 </p>
         			<p><b> Vốn điều lệ:</b>6.000.000.000 VNĐ (Bằng chữ : sáu tỷ đồng) </p>
         			<p><b> Mã số doanh nghiệp: </b>0107561329 do Sở Kế hoạch và Đầu tư Tp Hà Nội cấp</p>
              </div>
              <!-- contact form -->
              <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                  <form class="shake" role="form" method="post" id="contactForm" name="contact-form" data-toggle="validator">
                      <!-- Name -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="name">Name</label>
                        <input class="form-control" id="name" type="text" name="name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- email -->
                      <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Subject -->
                      <div class="form-group label-floating">
                        <label class="control-label">Subject</label>
                        <input class="form-control" id="msg_subject" type="text" name="subject" required data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                      </div>
                      <!-- Message -->
                      <div class="form-group label-floating">
                          <label for="message" class="control-label">Message</label>
                          <textarea class="form-control" rows="3" id="message" name="message" required data-error="Write your message"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
                      <!-- Form Submit -->
                      <div class="form-submit mt-5">
                          <button class="btn btn-primary" type="submit" id="form-submit"><i class="material-icons mdi mdi-message-outline"></i> Send Message</button>
                          <div id="msgSubmit" class="h3 text-center hidden"></div>
                          <div class="clearfix"></div>
                      </div>
                  </form>
              </div>
              <div class="col-md-12">
              	<h3>Bản đồ đường đi
</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7451.117849040697!2d105.778305!3d20.970221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134532a4fd22e8d%3A0x8a1495acc0e5c0ca!2zNzggTMOqIEzhu6NpLCBQLiBOZ3V54buFbiBUcsOjaSwgSMOgIMSQw7RuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2sus!4v1568685285681!5m2!1svi!2sus" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>	
          </div>
      </div>
    </section>
@endsection