@extends('backend.master')
@section('title', 'Book')
@section('content')
<div class="card-body">
    <a href="{{ route('bookdetail') }}" class="btn btn-outline-warning">Back to all chapter</a>
    <div class="text-center text-danger">
        <h1>Bí mật Numagician</h1>
    </div>
    <div>
        Nếu bạn đang tìm cách luyện trí nhớ để có thể nhớ nhanh, nhớ lâu, nhớ mãi tới già.
        Bạn giống tôi hơn 10 năm về trước. Blog này không chỉ là câu chuyện, là hành trình tiến hóa từ não cá vàng
        thành não cá voi của tôi,
        mà còn kèm theo quà tặng là ebook miễn phí và bộ giải pháp giúp bạn rút ngắn thời gian, tiết kiệm tiền bạc trên
        con đường chinh
        phục mục tiêu ấy. Một vài năm về trước… Tháng 8 năm 2007, cánh cửa Đại Học mở ra với tôi cùng với một cú sốc
        không hề nhẹ. Đó là
        những cuốn giáo trình nặng như cục gạch. Cái búa duy nhất mà tôi có trong đầu để đập gạch, là kỹ năng “học vẹt”
        được rèn luyện
        sau 12 năm phổ thông. Nhưng trứng chọi đá, búa đã vỡ, đầu nổ tung. Không chỉ có thế, tôi thấy mình… toàn nhớ
        những thứ nên quên, toàn quên thứ cần nhớ!
    </div>
</div>
@endsection
