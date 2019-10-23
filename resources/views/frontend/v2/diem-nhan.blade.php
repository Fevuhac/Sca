@extends('frontend.layout')
@include('frontend.partials.meta')
@section('content')
<div class="main">
    <div class="kl_highlight clearfix">
        <div class="kl_highlight-left">
            <div class="highlight-left-content">
                <h2 class="title">
                    <span class="kl_desktop"><img src="{{ URL::asset('assets/images/title_highlight.png') }}" alt="Về chương trình KLUCKY - sự kiện đặc biệt"></span>
                    <span class="kl_mobile"><img src="{{ URL::asset('assets/images/title_highlight_mb.png') }}" alt="Về chương trình KLUCKY - sự kiện đặc biệt"></span>
                </h2>
                <div class="kl_sty_description">                    
                    {!! $content1['content'] !!}
                </div>
                <div class="kl_btn2 kl_btn_bird text-right">
                    <a href="{{ route('su-kien-hot') }}" title="SỰ KIỆN HOT">
                        <img src="{{ URL::asset('assets/images/btn_event_hot.png') }}" alt="Sự Kiện Hot">
                    </a>
                </div>
            </div>
        </div>
        <div class="kl_highlight-center">
            <div class="highlight-center-content">
                <div class="kl_content">
                    <div class="kl_clip_frame_text">
                        <div class="kl_clip_frame">
                            <div class="box">
                                <iframe src="https://www.youtube.com/embed/ytgGnSH8gkw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="kl_sty_description">
                            <p>
                                <img src="{{ URL::asset('assets/images/heighlight1.jpg') }}" style="float: left;margin-right: 20px;width: 50%;" alt="">
                                Sự kiện Quay Số Đổi Thưởng tại website quaysodoithuong.com được tổ chức từ ngày 15/11/2018 đã nhận được sự tham gia
                                nhiệt tình của các thành viên tại K8 cũng như những thành viên mới đến với K8 trong thời gian vừa qua. Một sự kiện
                                thành công tốt đẹp với hơn 8000 số may mắn được cấp và hơn 1500 giải thưởng được trao tay thành công cho các thành viên
                                mới và cũ tại K8 tính đến ngày 24/12/2018.
                                <br>
                                <br>
                                Với tài chính vững mạnh và nhiều thế mạnh về dịch vụ giải trí trực tuyến đa dạng và phong phú với nhiều trò chơi thú vị
                                mang lại giá trị tinh thần cho người Việt Nam trong thời gian vừa qua, K8 với nhiều chương trình ưu đãi thưởng và nhiều
                                sự kiện rinh quà cuối năm đã trở thành một thương hiệu xây dựng từ niềm tin của từng thành viên tham gia tại trang K8.
                            </p>
                            <p class="clearfix"></p>
                            <p>
                                <img src="{{ URL::asset('assets/images/heighlight2.jpg') }}" alt="">
                                <span class="text-center">
                                    <i>Người mẫu – kiêm Nữ Hoàng Trang Sức Phương Chi<br>
                                    Đồng hành là đại sứ và người theo sát chương trình</i>
                                </span>
                            </p>
                            <p>
                                <img src="{{ URL::asset('assets/images/heighlight3.jpg') }}" alt="">
                                <span class="text-center">
                                    <i>Phương Chi đã cùng K8 tổ chức các buổi livestream rất thú vị và<br>
                                    hào hứng cùng những phần quà giá trị cực khủng.</i>
                                </span>
                            </p>
                            <p>
                                Bên cạnh đó, Phương Chi cũng vô cùng hào hứng cùng K8 ủng hộ đổi tuyển Việt Nam hết mình trong từng trận đấu tại Cup
                                AFF 2018 vừa qua.
                            </p>
                            <p>
                                <i>“Với Chi, tự hào dân tộc là trên hết, Chi đã tự đề xuất Ban Tổ Chức Quay Số Đổi Thưởng từ K8 tặng ngay những phần quà
                                hết sức ý nghĩa là những chiếc áo tuyển thủ Việt Nam. Khi vừa in áo ra và chuyển đến tận tay các bạn, Chi rất vui và
                                cảm thấy rất vui và tự hào. Chi tin là K8 sẽ còn có nhiều những phần quà hấp dẫn nữa trong vô số những sự kiện sắp tới
                                để phục vụ khách hàng.”</i> – Phương Chi cho biết.
                            </p>
                            <p>
                                Trong buổi gặp mặt phỏng vấn trước trận lượt về tại SVĐ Mỹ Đình ngày 06/12/2018, Phương Chi đã đến trường quay trong
                                buổi làm việc với BTC K8 và mang đến món quà cực kỳ ý nghĩa là chiếc áo với các chữ ký của tuyển Việt Nam.
                            </p>
                            <p>
                                <img src="{{ URL::asset('assets/images/heighlight4.jpg') }}" alt="">
                                <span class="text-center">
                                    <i>Phương Chi vô cùng hào với với chiếc áo thể thao có chữ ký của các tuyển thủ Việt Nam<br>
                                    trong trường quay giải trí của K8.</i>
                                </span>
                            </p>
                            <p>
                                <img src="{{ URL::asset('assets/images/heighlight5.jpg') }}" alt="">
                                <span class="text-center">
                                    <i>Clip Phương Chi chúc Fan hâm mộ Giáng Sinh từ chương trình Quay Số Đổi Thưởng<br>
                                    Khiến Fan vô cùng sốt trên cộng đồng mạng</i>
                                </span>
                            </p>
                            <p>
                                Cùng với Phương Chi, các hot girl đình đám hiện nay cũng hào hứng tham gia các buổi livestream tại K8 cho chương trình
                                Quay Số Đổi Thưởng như Lâm Á Hân, Tăng Thiên Kim, Phạm Lê Vi… Tuy bận bịu với các hoạt động giải trí cuối năm, nhưng vẫn không hề giảm sự hào hứng cùng chương trình.
                            </p>
                            <p>
                                Á Hân: <i>“Hân giờ đã chuyển qua sống tại Úc, tuy nhiên, cơn sốt của chương trình cùng sự uy tín đáng tin cậy của K8, Hân đã
                                    có
                                    buổi livestream hào hứng cùng các thành viên và cấp hơn 900 số may mắn cùng thành viên mới đến với K8 và tặng 25 vé
                                    máy
                                    bay sang SVĐ Panaad, Philippines để xem trận lượt đi của Tuyển Việt Nam – với sự chu đáo tuyệt vời, BTC Quay Số từ
                                    K8
                                    đã đài thọ chu đáo cho tất cả thành viên từ lúc đặt chân đến Phillipines đến lúc về lại Việt Nam”</i>
                            </p>
                            <p>
                                <img src="{{ URL::asset('assets/images/heighlight6.jpg') }}" alt="">
                                <span class="text-center">
                                    <i>Á Hân quyến rũ trong một banner quảng cáo về chương trình đồng hành Cup AFF 2018<br>
                                        Tại Quay Số Đổi Thưởng của K8.</i>
                                </span>
                            </p>
                            <p>
                                <img src="{{ URL::asset('assets/images/heighlight7.jpg') }}" alt="">
                                <span class="text-center">
                                    <i>Á Hân livestream trong trang cá nhân của mình<br>
                                        Tại Quay Số Đổi Thưởng của K8.</i>s
                                </span>
                            </p>
                            <p>Hot girl “tuyệt tình cốc” – Tăng Thiên Kim cũng hào hứng với Quay Só Đổi Thưởng. Mặc dù đang quay giữa trời Đà Lạt khá
                            lạnh nhưng vẫn cố gắng liên lạc với Ban Tổ Chức cùng tham gia livestream giới thiệu chương trình Quay Số Đổi Thưởng cho
                            các Fan hâm mộ của co tại trang cá nhân của mình</p>
                            <p>
                                <img src="{{ URL::asset('assets/images/heighlight8.jpg') }}" alt="">
                                <span class="text-center">
                                    <i>Hình ảnh quyến rủ của Tăng Thiên Kim trong livestream ủng hộ sự kiện<br>
                                        Tại Quay Số Đổi Thưởng của K8.</i>
                                </span>
                            </p>
                            <p>
                                <span class="text-uppercase text-center text-bold">Danh sách chính thức các thành viên nhận thưởng</span>
                                <span class="text-center">**Vui lòng liên hệ ZALO +639278052221 để nhận thưởng**</span>
                            </p>
                            <p class="text-center mb-1">DANH SÁCH NHẬN THƯỞNG TRONG CÁC BUỔI LIVESTREAM THÁNG 11</p>
                            <table class="table table-bordered table-customize">
                                <tr>
                                    <td>nch****87tn</td>
                                    <td>1 iPhone XS Max, 256GB</td>
                                </tr>
                                <tr>
                                    <td>ntun****engh</td>
                                    <td>1 vé khứ hồi đi Singapore</td>
                                </tr>
                                <tr>
                                    <td>nha****uyn87</td>
                                    <td>Điện thoại Samsung J6</td>
                                </tr>
                                <tr>
                                    <td>ngu****tri56</td>
                                    <td>Điện thoại Samsung J6</td>
                                </tr>
                                <tr>
                                    <td>ntonthat****95</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>nthu****2016</td>
                                    <td>1 vé khứ hồi đi Singapore</td>
                                </tr>
                                <tr>
                                    <td>nbig****988</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>nho****ri247</td>
                                    <td>Điện thoại Samsung J8</td>
                                </tr>
                                <tr>
                                    <td>nba****285</td>
                                    <td>1 vé khứ hồi đi Kuala Lumpur, Malaysia</td>
                                </tr>
                                <tr>
                                    <td>ntran****234</td>
                                    <td>1 vé khứ hồi đi Singapore</td>
                                </tr>
                                <tr>
                                    <td>ntr****h2013</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>ntr****h2013</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>ncuo****kts</td>
                                    <td>1 vé khứ hồi đi Singapore</td>
                                </tr>
                                <tr>
                                    <td>nhoho****ntan</td>
                                    <td>1 vé khứ hồi đi Kuala Lumpur, Malaysia</td>
                                </tr>
                                <tr>
                                    <td>nhoa****otrug</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>nchien****25252</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>ncuocdoi****81</td>
                                    <td>1 vé khứ hồi đi Kuala Lumpur, Malaysia</td>
                                </tr>
                                <tr>
                                    <td>nanh****hotls2</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>nlequoc****983</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>nan****gao</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>nquac****hat1980</td>
                                    <td>1 vé khứ hồi đi Singapore</td>
                                </tr>
                                <tr>
                                    <td>niron****ang90</td>
                                    <td>1 vé khứ hồi đi Singapore</td>
                                </tr>
                                <tr>
                                    <td>ntam****moda</td>
                                    <td>1 iPhone XS Max, 256GB</td>
                                </tr>
                                <tr>
                                    <td>npe****o</td>
                                    <td>1 Samsung J8</td>
                                </tr>
                                <tr>
                                    <td>nme****on0113</td>
                                    <td>1 Samsung J6</td>
                                </tr>
                                <tr>
                                    <td>nsw****t1987</td>
                                    <td>1 vé khứ hồi đi Kuala Lumpur, Malaysia</td>
                                </tr>
                                <tr>
                                    <td>nducm****2007</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>ntran****777</td>
                                    <td>1 vé khứ hồi đi Singapore</td>
                                </tr>
                                <tr>
                                    <td>nquang****a723</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>nph****n00</td>
                                    <td>1 vé khứ hồi đi Singapore</td>
                                </tr>
                                <tr>
                                    <td>nng****2108</td>
                                    <td>1 vé khứ hồi đi Singapore</td>
                                </tr>
                                <tr>
                                    <td>nqua****ong</td>
                                    <td>1 Samsung J8</td>
                                </tr>
                                <tr>
                                    <td>nbinh****22222</td>
                                    <td>1 Samsung J8</td>
                                </tr>
                                <tr>
                                    <td>nngt****o78</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>nfri****vn</td>
                                    <td>1 vé khứ hồi đi Băng Cốc, Thái Lan</td>
                                </tr>
                                <tr>
                                    <td>nchu****gl</td>
                                    <td>1 vé khứ hồi đi Kuala Lumpur, Malaysia</td>
                                </tr>
                            </table>
                            <p class="text-center mb-1">DANH SÁCH NHẬN THƯỞNG TRONG CÁC BUỔI LIVESTREAM THÁNG 12</p>
                            <table class="table table-bordered table-customize">
                                <tr>
                                    <td>ncu****1979</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>ndu****nh1989</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>ntra****707</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nla****atv</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nvt****85</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nkh****soc66</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nmi****iet05</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nm****on1972</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nf****2017</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nn****duk6</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>ns****ams</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nri****io</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nqu****thuy</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nqu****668</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nsu****990</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nth****83</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nt****phong</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nb****ng68</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nke****iet86</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nth****1</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>ntr****ng18</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nn****86</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>                                        
                                <tr>
                                    <td>nv****am3006</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nc****nh80</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nkh****lehoan</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nb****12</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nv****ng43</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nki****e88</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nc****oiv</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nhoan****hang9</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>ntra****itinh</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nngo****nzanh</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nng****enlam</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nki****688</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nla****oimy</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nna****u1986</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>ntu****h1987</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nl****nh</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>n****i298</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>np****udu6018</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>n****78</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>n****hien99</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nt****021992</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nlk****ct43</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nl****quan2</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nti****hanh22</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nt****uu1982</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nd****vanhuy1</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nt****anghia1</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nl****611</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>n****13</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nl****68</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nt****3</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>np****op23</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>np****a90</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nk****k92</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nib****8999</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nca****nh</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nhu****thuc26</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>nd****6</td>
                                    <td>Thẻ cào điện thoại 20k</td>
                                </tr>
                                <tr>
                                    <td>np****ple</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nn****coc</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nki****trang</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nth****c90</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nd****hach</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nv****ay45</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nng****27cn</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>ntra****nh78</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nlo****di90</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>njo****luong</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nk****t123</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nt****96</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nch****ithoi</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nn****7979</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nbo****ohoi</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>ns****ena</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>ndo****gdtu</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nbl****kjack</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nth****hau</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>n01****8013390</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nlu****ven</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nfu****123</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nnq****enminh</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nvi****angle</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nq****tno12</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nnh****183</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nfai****ka</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nthi****123</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>n01****5129n</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>n08****6785</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nc****986</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nki****vo89</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>ndt****22508</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nth****yet88</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>ntri****u76</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nk****pro</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>ns****ro</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nc****ip</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nsh****285t</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>nca****iss2</td>
                                    <td>Thẻ cào điện thoại 50k</td>
                                </tr>
                                <tr>
                                    <td>ncc****12</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nc****23</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nc****pa</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nxu****gdk</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nph****eudo</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nhu****10</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nma****6888</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nta****nhi</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nta****hp</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>np****40</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>ncu****hau79</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>ndm****2412</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nq****qw</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nvi****06</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nph****g356</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nl****m</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nv****90</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nh****8</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nsu****r106</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nho****ong1</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nha****ao</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                                <tr>
                                    <td>nnhih****789</td>
                                    <td>Thẻ cào điện thoại 100k</td>
                                </tr>
                            </table>
                            <p>
                                K8 cùng Ban Tổ Chức chương trình cũng muốn nhân cơ hội này để gửi lời chúc đến tất cả thành viên một năm mới nhiều niềm
                                vui, sức khỏe và may mắn. K8 sẽ không ngừng tiếp nhận những đóng góp từ các thành viên để cải tiến hệ thống và phục vụ
                                ngày một hoàn hảo hơn.
                            </p>
                            <p>
                                Không còn là hình ảnh mới mẻ trong thị trường Châu Á, tên gọi K8 đang dần trở nên thân thuộc và là một trang web giải
                                trí hấp dẫn đa nền tảng chất lượng hàng dầu hiện nay.
                            </p>
                        </div>
                    </div>
                    <span class="kl_scroll"><img src="{{ URL::asset('assets/images/scroll.png') }}" alt=""></span>
                </div>
            </div>
        </div>
        <div class="kl_highlight-right">
            <div class="highlight-center-content">
                <img src="{{ URL::asset('assets/images/Model.png') }}" alt="Người mẫu">
            </div>
        </div>
    </div>
</div>
@stop