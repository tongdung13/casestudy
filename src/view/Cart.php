
<nav class="navbar navbar-expand-lg navbar-light bg-light nav-tabs bg-primary">
    <a class="navbar-brand" href="#">Mobile</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="?page=home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=list">List Of Product</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="?page=add">Add New</a>
                    <a class="dropdown-item" href="?page=update">Update</a>

                </div>
            </li>

        </ul>
        <svg width="3em" height="3em" onclick="" viewBox="0 0 16 16" class="bi bi-cart-plus-fill badge-light"
             fill="currentColor"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0
            4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.
            621A.5.5 0 0 0 2 1H.5zM4 14a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm7 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM9 5.5a.5.5 0 0 0-1
             0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
        </svg>
        <form method="post" enctype="multipart/form-data" action="?page=search" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="container-fixed">
    <div id="carouselExampleSlidesOnly"  class="carousel slide row" data-ride="carousel">
        <div class="carousel-inner col-6">
            <div class="carousel-item active" style="width: 700px;">
                <img style="cursor:pointer" src="https://cdn.tgdd.vn/2020/12/banner/Normal-Note20-800-300-800x300-2.png"
                     alt="M51" width="700" height="300">
            </div>
            <div class="carousel-item" style="width: 700px">
                <img style="cursor:pointer" src="https://cdn.tgdd.vn/2020/11/banner/iphone-12-800-300-800x300-2.png"
                     alt="Sắm iPhone 12[break]Giảm Online 2 Triệu" width="700" height="300">
            </div>
            <div class="carousel-item" style="width: 700px">
                <img style="cursor:pointer" src="https://cdn.tgdd.vn/2020/11/banner/800-300-800x300-21.png"
                     alt="dong ho thoi trang" width="700" height="300">
            </div>
        </div>
        <div class="carousel-inner col-6">
            <aside class="homenews">
                <figure>
                    <h2><a href="/tin-tuc">Tin công nghệ</a></h2>
                </figure>
                <ul>
                    <li>
                        <a href="/tin-tuc/dien-thoai-samsung-cu-tam-trung-giam-gia-1312526">
                            <img width="70" height="40" src="https://cdn.tgdd.vn/Files/2020/12/09/1312526/samsunggalaxym51_800x450-100x100.jpg"
                                 alt="Sắm liền điện thoại Samsung đổi trả tầm trung giảm đến 30% giá rẻ bất ngờ, máy cũ nhưng chất lượng
                                     miễn chê, sao có thể ngó lơ">
                            <h5>Sắm liền điện thoại Samsung đổi trả tầm trung giảm đến 30% giá rẻ bất ngờ, máy cũ nhưng chất lượng miễn chê,
                                sao có thể ngó lơ</h5>
                            <span>1 giờ trước</span>
                        </a>
                    </li>
                </ul>
                <div class="twobanner ">
                    <a aria-label="slide" data-cate="0" data-place="1158" href="https://www.thegioididong.com/dtdd/samsung-galaxy-m51"
                       onclick="jQuery.ajax({ url: 'https://www.thegioididong.com/bannertracking?bid=39703&amp;r='+ (new Date).getTime(),
                            async: true, cache:
                           false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2020/12/banner/M51-398-110-398x110.png" alt="M51"
                                           width="290" height="87"></a>
                    <a aria-label="slide" data-cate="0" data-place="1158" href="https://www.thegioididong.com/apple#iphone"
                       onclick="jQuery.ajax({ url: 'https://www.thegioididong.com/bannertracking?bid=39617&amp;r='+ (new Date).getTime(),
                            async: true, cache:
                           false });"><img style="cursor:pointer" src="https://cdn.tgdd.vn/2020/11/banner/398-110-398x110-2.png" alt="đt"
                                           width="290" height="87"></a>    </div>

            </aside>
        </div>
    </div>
</div>

<aside class="picture">
    <div id="carouselExampleSlidesOnly" style="width: 500px" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="width: 700px;">
                <img style="cursor:pointer" src="https://cdn.tgdd.vn/2020/12/banner/Normal-Note20-800-300-800x300-2.png"
                     alt="M51" width="400" height="400">
            </div>
            <div class="carousel-item" style="width: 700px">
                <img style="cursor:pointer" src="https://cdn.tgdd.vn/2020/11/banner/iphone-12-800-300-800x300-2.png"
                     alt="Sắm iPhone 12[break]Giảm Online 2 Triệu" width="400" height="400">
            </div>
            <div class="carousel-item" style="width: 700px">
                <img style="cursor:pointer" src="https://cdn.tgdd.vn/2020/11/banner/800-300-800x300-21.png"
                     alt="dong ho thoi trang" width="400" height="400">
            </div>
        </div>
    </div>

    <div class="prev hide" onclick="slideFltNext(0)"><i class="icontgdd-prevthumd"></i></div>
        <div class="next hide" onclick="slideFltNext(1)"><i class="icontgdd-nextthumd"></i></div>
    </div>
    <div class="wrap_rtglr hide">
        <div class="pop">
            <div class="hdpop">Phản hồi không hài lòng <span>bộ ảnh</span> <a href="javascript:closeRtGlr();" class="closehd"><i
                            class="iconcom-close"></i></a></div>
            <div class="ctpop">


                <div class="bifRtCt  hide">
                    <p>Mời bạn góp ý để chúng tôi phục vụ tốt hơn</p>
                    <textarea name="txtContent" rows="3" placeholder="Vui lòng nhập nội dung góp ý (tối thiểu 30 ký tự)"></textarea>
                    <span>Hãy để lại thông tin để được hỗ trợ khi cần thiết (Không bắt buộc):</span>
                    <div class="ifRtGd" data-val="">
                        <label onclick="rtAtcChangeGder(1)" class="ifGdM "><i></i>Anh</label>
                        <label onclick="rtAtcChangeGder(2)" class="ifGdFm"><i></i>Chị</label>
                    </div>
                    <input type="text" name="txtFullName" placeholder="Họ tên" value="">
                    <input type="text" name="txtPhoneNumber" placeholder="Số điện thoại" value="" style="display:none;">
                    <input type="text" name="txtEmail" placeholder="Email" value="" style="display:none;">
                    <button type="submit" onclick="sendRatingContent(-1)">Gửi góp ý<span>Cam kết bảo mật thông tin cá nhân</span></button>
                    <label class="alert"></label>
                    <input type="hidden" name="hdRateType" value="5">
                    <input type="hidden" name="hdVideoUrl" value="">
                </div>

            </div>
        </div>
    </div>
    <div class="slide_FT"></div>
</aside>
<div class="area_order area_orderM">
    <a id="mua-ngay" href="javascript:void(0);" class="buy_now btn btn-primary" data-value="229056"><b>Mua ngay</b>
        <span>Giao hàng tận nơi hoặc nhận tại siêu thị</span></a><br>
    <a id="tra-gop" class="buy_repay btn btn-primary" href="/tra-gop/dtdd/oppo-a93"><b>Mua trả góp 0%</b><span>Thủ tục đơn giản</span></a>
    <a class="buy_repay s btn btn-primary " href="/tra-gop/dtdd/oppo-a93?m=credit"><b>Trả góp  qua thẻ</b><span>Visa, Master, JCB</span></a>
</div>


<div class="row">
    <ul class="col-3">
        <li><a href="/lich-su-mua-hang" title="Lịch sử mua hàng">Lịch sử mua hàng</a></li>
        <li><a href="/tra-gop" title="Hướng dẫn mua trả góp">Tìm hiểu về mua trả góp</a></li>
        <li><a href="/bao-hanh" title="Tìm trung tâm bảo hành">Chính sách bảo hành</a></li>
        <li><a href="/chinh-sach-bao-hanh-san-pham" title="Chính sách đổi trả">Chính sách đổi trả</a></li>

        <li class="showmore"><a href="javascript:ShowMoreFooterSupportLink()" title="Xem thêm">Xem thêm</a></li>
        <li class="hidden"><a href="/giao-hang" title="Giao hàng &amp; Thanh toán">Giao hàng &amp; Thanh toán</a></li>
        <li class="hidden"><a href="/huong-dan-mua-hang" title="Hướng dẫn mua online">Hướng dẫn mua online</a></li>
        <li class="hidden"><a href="/b2b" title="Mua hàng doanh nghiệp">Bán hàng doanh nghiệp</a></li>
    </ul>
    <ul class="col-3">
        <li class="hidden"><a href="/phieu-mua-hang" title="Phiếu mua hàng">Phiếu mua hàng</a></li>
        <li class="hidden"><a href="//hddt.thegioididong.com" target="_blank" title="In hóa đơn điện tử" rel="nofollow noopener">In hóa đơn điện tử</a></li>
        <li class="hidden"><a href="/tos" title="Quy chế hoạt động">Quy chế hoạt động</a></li>
        <li class="hidden"><a href="/noi-quy-cua-hang" title="Nội quy cửa hàng">Nội quy cửa hàng</a></li>
        <li class="hidden"><a href="/chat-luong-phuc-vu" title="Chất lượng phục vụ">Chất lượng phục vụ</a></li>
        <li class="hidden"><a href="https://www.thegioididong.com/tin-tuc/can-trong-voi-nhung-sieu-thi-thegioididong-khong-chinh-chu--683321" title="Cảnh báo giả mạo">Cảnh báo giả mạo</a></li>
        <li class="hidden"><a href="/trao-thuong" title="Thông tin trao thưởng">Thông tin trao thưởng</a></li>
        <li class="hidden"><a href="/chinh-sach-khui-hop-apple" title="Chính sách khui hộp sản phẩm Apple">Chính sách khui hộp sản phẩm Apple</a></li>
    </ul>
    <ul class="col-3">
        <li><a href="http://mwg.vn" target="_blank" title="Giới thiệu công ty (mwg.vn)" rel="noopener">Giới thiệu công ty <span>(mwg.vn)</span></a></li>
        <li><a href="//vieclam.thegioididong.com" target="_blank" title="Tuyển dụng" rel="noopener">Tuyển dụng</a></li>
        <li><a href="/lien-he" title="Gửi góp ý, khiếu nại">Gửi góp ý, khiếu nại</a></li>
        <li><a href="/he-thong-sieu-thi-the-gioi-di-dong" title="Tìm siêu thị (2.265 shop)">Tìm siêu thị <span>(2.265 shop)</span></a></li>
        <li>
            <a class="viewmb" rel="nofollow" href="/?postmanruntime=1&amp;viewtype=desktop&amp;sclient=mobile" title="Xem bản mobile">Xem bản mobile</a>
        </li>
    </ul>
    <ul class="col-3">
        <li>

            <p>Gọi mua hàng <a href="tel:18001060">1800.1060</a> (7:30 - 22:00)</p>
            <p>Gọi khiếu nại &nbsp; <a href="tel:18001062">1800.1062</a> (8:00 - 21:30)</p>
            <p>Gọi bảo hành &nbsp; <a href="tel:18001064">1800.1064</a> (8:00 - 21:00)</p>
            <p>Kỹ thuật &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="tel:18001763">1800.1763</a> (7:30 - 22:00)</p>
            <a target="_blank" rel="nofollow noopener" class="bct" href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=20098" aria-label="bộ công thương mwg"><i class="icontgdd-bct"></i></a>
            <a rel="nofollow noopener" class="bct" href="/tos#giai-quyet-khieu-nai" aria-label="bộ công thương chống hàng giả"><i class="icontgdd-hg"></i></a>
            <a href="//www.dmca.com/Protection/Status.aspx?ID=5b62e759-2a0c-4d86-b972-af903bfbc89d&amp;refurl=http://www.thegioididong.com/?PostmanRuntime=1&amp;viewtype=desktop" title="DMCA.com Protection Status" class="dmca-badge"> <img style="opacity:0.6;margin: 0px auto -8px;display: block;" src="//images.dmca.com/Badges/dmca-badge-w100-5x1-11.png?ID=5b62e759-2a0c-4d86-b972-af903bfbc89d" alt="DMCA.com Protection Status"></a>
        </li>
    </ul>
    <ul class="colfoot collast">
        <li>
            <a target="_blank" href="https://facebook.com/thegioididongcom" class="linkfb" rel="noopener">
                <i class="icontgdd-share1"></i>3.5tr
            </a>
            <a target="_blank" href="https://www.youtube.com/user/TGDDVideoReviews?sub_confirmation=1" class="linkyt" rel="noopener">
                <i class="icontgdd-share3"></i>763k
            </a>


        </li>
    </ul>
</div>


<a href="?page=login" class="btn btn-primary btn-sm ">Log Out</a>
<footer class=" text-center text-lg-left bg-dark">
    <!-- Copyright -->
    <div class="text-center text-info p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-info" href="index.php">tongdung.com</a>
    </div>
    <!-- Copyright -->
</footer>