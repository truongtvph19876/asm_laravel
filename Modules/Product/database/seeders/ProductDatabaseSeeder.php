<?php

namespace Modules\Product\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Product;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Products Seed
         * ------------------
         */

        $product_seed = [
            [
                'id' => 1,
                'brand_id' => 1,
                'product_name' => 'Áo khoác khaki nam cotton cổ bẻ có túi ngực dáng suông',
                'product_slug' => 'ao-khoac-khaki-nam-cotton-co-be-co-tui-nguc-dang-suong',
                'product_price' => 500000,
                'product_quantity' => 14,
                'product_image' => 'products/product-default-1.jpg',
                'detail' => 'Áo khoác khaki chất liệu 100% cotton, cổ bẻ, cài cúc, túi ngực, phom regular.',
                'description' => htmlspecialchars("<p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Cổ &aacute;o</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&Aacute;o kho&aacute;c khaki nam cotton cổ bẻ với thiết kế tinh tế v&agrave; hiện đại, l&agrave; sự kết hợp ho&agrave;n hảo giữa phong c&aacute;ch v&agrave; thoải m&aacute;i. Chất liệu cotton chất lượng cao kh&ocirc;ng chỉ mang lại sự &ecirc;m dịu cho người mặc m&agrave; c&ograve;n đảm bảo khả năng tho&aacute;ng kh&iacute;, ph&ugrave; hợp cho mọi hoạt động trong ng&agrave;y.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>D&aacute;ng &aacute;o</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>D&aacute;ng su&ocirc;ng của &aacute;o kho&aacute;c tạo cảm gi&aacute;c thoải m&aacute;i v&agrave; rộng r&atilde;i, gi&uacute;p bạn tự tin v&agrave; thoải m&aacute;i di chuyển. Cổ &aacute;o bẻ mang lại vẻ lịch l&atilde;m v&agrave; nam t&iacute;nh, l&agrave; điểm nhấn tinh tế cho bộ trang phục.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>T&uacute;i</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>T&uacute;i ngực được t&iacute;ch hợp cung cấp kh&ocirc;ng chỉ sự thuận tiện m&agrave; c&ograve;n l&agrave; điểm nhấn thực tế cho chiếc &aacute;o. Được thiết kế với m&agrave;u sắc khaki truyền thống, &aacute;o kho&aacute;c n&agrave;y dễ d&agrave;ng kết hợp với nhiều phong c&aacute;ch trang phục kh&aacute;c nhau, phản &aacute;nh sự s&agrave;nh điệu v&agrave; phong c&aacute;ch c&aacute; nh&acirc;n của người mặc.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Với &aacute;o kho&aacute;c khaki nam cotton cổ bẻ, bạn kh&ocirc;ng chỉ c&oacute; một chiếc &aacute;o ấm &aacute;p cho m&ugrave;a lạnh m&agrave; c&ograve;n l&agrave; một phần quan trọng của bộ sưu tập thời trang của bạn.</p>"),
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'id' => 2,
                'brand_id' => 1,
                'product_name' => 'ÁO KHOÁC NAM SHRYQ HÀNG MÙA XUÂN THU ĐÔNG PHONG CÁCH TRẺ TRUNG THỜI TRANG NAM CHẤT LIỆU G04',
                'product_slug' => 'ao-khoac-nam-shryq-hang-mua-xuan-thu-dong-phong-cach-tre-trung-thoi-trang-nam-chat-lieu-g04',
                'product_price' => 1020000,
                'product_quantity' => 20,
                'product_image' => 'products/product-default-2.jpg',
                'detail' => 'Dịch vụ: thanh toán khi nhận hàng, đổi size nếu không vừa, xem hàng trước khi nhận.',
                'description' => htmlspecialchars("<p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong><span style='color:red;'>Chất Liệu G04 Đỉnh Cao Cho Sự Ấm &Aacute;p v&agrave; Bền Bỉ</span></strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&Aacute;o kho&aacute;c nam Shryq G04 l&agrave; sản phẩm chất lượng cao được l&agrave;m từ chất liệu G04, mang lại cảm gi&aacute;c &ecirc;m dịu v&agrave; ấm &aacute;p cho người mặc. Đồng thời, khả năng chống gi&oacute; xuất sắc của chất liệu n&agrave;y gi&uacute;p bảo vệ bạn trong mọi điều kiện thời tiết khắc nghiệt. Sự kết hợp của chất liệu v&agrave; c&ocirc;ng nghệ sản xuất ti&ecirc;n tiến tạo n&ecirc;n một chiếc &aacute;o kho&aacute;c đỉnh cao về sự ấm &aacute;p v&agrave; bền bỉ.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong><span style='color:red;'>Thiết Kế Hiện Đại Tinh Tế, Đường May Tỉ Mỉ</span></strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Với thiết kế hiện đại, &aacute;o kho&aacute;c Shryq kh&ocirc;ng chỉ l&agrave; một chiếc &aacute;o để giữ ấm m&agrave; c&ograve;n l&agrave; biểu tượng của phong c&aacute;ch trẻ trung v&agrave; s&agrave;nh điệu. Đường may tỉ mỉ v&agrave; chi tiết cẩn thận tạo n&ecirc;n sự sang trọng v&agrave; lịch l&atilde;m. Chiếc &aacute;o kho&aacute;c n&agrave;y kh&ocirc;ng chỉ l&agrave; phần của bộ sưu tập thời trang m&agrave; c&ograve;n l&agrave; điểm nhấn nổi bật tr&ecirc;n con đường tự tin của bạn.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong><span style='color:red;'>Đa Dạng Trang Phục, Phong C&aacute;ch Năng Động</span></strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>H&agrave;ng m&ugrave;a xu&acirc;n thu đ&ocirc;ng, &aacute;o kho&aacute;c Shryq linh hoạt kết hợp với nhiều trang phục kh&aacute;c nhau. Với phong c&aacute;ch trẻ trung v&agrave; năng động, chiếc &aacute;o n&agrave;y kh&ocirc;ng chỉ l&agrave; sự ấm &aacute;p cho cơ thể m&agrave; c&ograve;n l&agrave; biểu tượng thời trang đa dạng v&agrave; s&aacute;ng tạo. Ph&ugrave; hợp cho c&aacute;c hoạt động h&agrave;ng ng&agrave;y, từ c&ocirc;ng việc đến giải tr&iacute;, &aacute;o kho&aacute;c Shryq sẽ l&agrave; điểm nhấn ho&agrave;n hảo cho gu thời trang của bạn.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&nbsp;</p>"),
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'id' => 3,
                'brand_id' => 1,
                'product_name' => 'BANANA REPUBLICÁo Sơ Mi Nam Tay Ngắn',
                'product_slug' => 'banana-republicao-so-mi-nam-tay-ngan',
                'product_price' => 550000,
                'product_quantity' => 21,
                'product_image' => 'products/product-default-3.jpg',
                'detail' => 'Banana Republic là thương hiệu thời trang Mỹ được thành lập vào năm 1978 bởi Mel và Patricia Ziegler',
                'description' => htmlspecialchars("<p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Nguồn Gốc v&agrave; Sở Hữu Hiện Nay</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Banana Republic: H&agrave;nh Tr&igrave;nh Thời Trang Đậm Chất Mỹ Tại California</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Thương hiệu thời trang Banana Republic ch&iacute;nh thức khởi đầu v&agrave;o năm 1978 do cặp đ&ocirc;i Mel v&agrave; Patricia Ziegler s&aacute;ng lập tại California. Ng&agrave;y nay, thương hiệu tự h&agrave;o l&agrave; một phần của Tập đo&agrave;n GAP Inc, vững v&agrave;ng dưới bảo vệ của một tầm v&oacute;c to&agrave;n cầu, v&agrave; được ph&acirc;n phối rộng r&atilde;i tại Việt Nam qua sự đồng h&agrave;nh của C&ocirc;ng Ty TNHH Thời Trang v&agrave; Mỹ Phẩm &Acirc;u Ch&acirc;u (ACFC) từ năm 2012.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Nghệ Thuật Thiết Kế Đa Dạng</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>H&ograve;a Quyện N&eacute;t Đẹp Cổ Điển v&agrave; Phong C&aacute;ch Hiện Đại: Bản Sắc Thiết Kế Banana Republic</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Banana Republic kh&ocirc;ng chỉ l&agrave; một thương hiệu thời trang, m&agrave; c&ograve;n l&agrave; nguồn cảm hứng kh&ocirc;ng ngừng cho những người y&ecirc;u thời trang. Với sự s&aacute;ng tạo độc đ&aacute;o, thương hiệu n&agrave;y tạo n&ecirc;n một tinh thần thiết kế đa dạng, nơi n&eacute;t đẹp cổ điển h&ograve;a quyện mượt m&agrave; với xu hướng đương đại.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Sứ Mệnh L&agrave;m Đẹp v&agrave; Phong C&aacute;ch Sống</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Năng Lượng T&iacute;ch Cực v&agrave; Kh&aacute;m Ph&aacute;: Sứ Mệnh L&agrave;m Đẹp Của Banana Republic</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Banana Republic kh&ocirc;ng chỉ mang đến những bộ trang phục v&agrave; phụ kiện tinh tế m&agrave; c&ograve;n l&agrave; biểu tượng của sự t&iacute;ch cực v&agrave; sự kh&aacute;c biệt trong cuộc sống. Sứ mệnh của ch&uacute;ng t&ocirc;i l&agrave; l&agrave;m đẹp cho cả nam v&agrave; nữ, những người lu&ocirc;n t&igrave;m kiếm những cơ hội mới mẻ v&agrave; đ&oacute;n nhận những trải nghiệm độc đ&aacute;o.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&nbsp;</p>"),
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'id' => 4,
                'brand_id' => 1,
                'product_name' => 'Áo Khoác Nữ Kaki Dáng Ngắn',
                'product_slug' => 'ao-khoac-nu-kaki-dang-ngan',
                'product_price' => 512000,
                'product_quantity' => 71,
                'product_image' => 'products/product-default-4.jpg',
                'detail' => 'Chất liệu sản phẩm: Vải kaki Thành phần: 97% Cotton + 3% Spandex Đường may và sợi vải chắc chắn, thân thiện với người dùng',
                'description' => htmlspecialchars("<p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Chất Liệu Đỉnh Cao: Vải Kaki 97% Cotton + 3% Spandex</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>YODY: &Aacute;o Kho&aacute;c Chất Lượng, Chăm S&oacute;c Cho Sự Thoải M&aacute;i Của Bạn</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Chất liệu vải kaki tại YODY kh&ocirc;ng chỉ l&agrave; sự kết hợp ho&agrave;n hảo giữa 97% Cotton v&agrave; 3% Spandex m&agrave; c&ograve;n l&agrave; lời cam kết về sự thoải m&aacute;i v&agrave; linh hoạt trong mọi hoạt động.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Sự An To&agrave;n Tuyệt Đối</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Đường May Chắc Chắn, Sợi Vải Th&acirc;n Thiện: YODY Cho Người D&ugrave;ng An To&agrave;n Tuyệt Đối</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>YODY kh&ocirc;ng chỉ l&agrave; sự h&ograve;a quyện giữa thiết kế v&agrave; chất liệu, m&agrave; c&ograve;n l&agrave; sự cam kết về đường may chắc chắn v&agrave; sợi vải th&acirc;n thiện với l&agrave;n da, gi&uacute;p bạn tự tin v&agrave; thoải m&aacute;i mỗi khi diện chiếc &aacute;o kho&aacute;c của m&igrave;nh.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Tinh Tế v&agrave; Hiệu Quả</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Thiết Kế T&iacute;ch Hợp: &Aacute;o Kho&aacute;c YODY - Sự Ho&agrave;n Hảo trong Chi Tiết</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&Aacute;o kho&aacute;c YODY kh&ocirc;ng chỉ l&agrave; sự kết hợp giữa chất lượng v&agrave; thoải m&aacute;i, m&agrave; c&ograve;n l&agrave; điểm nhấn c&aacute; t&iacute;nh với thiết kế chi tiết tỉ mỉ v&agrave; t&uacute;i điểm nhấn. Mỗi chi tiết được chăm ch&uacute;t, tạo n&ecirc;n một sản phẩm độc đ&aacute;o v&agrave; ấn tượng.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Phong C&aacute;ch Đa Dạng</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Kiểu D&aacute;ng Ngắn, Khỏe Khoắn: YODY Cho Phong C&aacute;ch Sống Năng Động</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Với kiểu d&aacute;ng ngắn, khỏe khoắn, &aacute;o kho&aacute;c YODY kh&ocirc;ng chỉ l&agrave; lựa chọn tốt trong thời tiết lạnh m&agrave; c&ograve;n l&agrave; sự linh hoạt trong việc mix-match với ch&acirc;n v&aacute;y hay jeans, tạo n&ecirc;n phong c&aacute;ch c&aacute; nh&acirc;n v&agrave; độc đ&aacute;o.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>YODY - Look Good. Feel Good.</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>YODY: Kh&aacute;m Ph&aacute; Vẻ Đẹp, Tận Hưởng Sự Tự Tin</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Với khẩu hiệu &quot;Look Good. Feel Good.&quot;, YODY kh&ocirc;ng chỉ mang lại sự thoải m&aacute;i về vật chất m&agrave; c&ograve;n t&ocirc;n vinh vẻ đẹp v&agrave; tự tin từ b&ecirc;n trong, khiến bạn lu&ocirc;n nổi bật v&agrave; tự tin trong mọi t&igrave;nh huống.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Sản Xuất Tại Việt Nam</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Chất Lượng Quốc Tế, Sản Xuất Tận Nơi: YODY - H&ograve;a M&igrave;nh Trong Đẳng Cấp Việt</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>YODY tự h&agrave;o được sản xuất tại Việt Nam, nơi kh&ocirc;ng chỉ l&agrave; nguồn cảm hứng cho thời trang m&agrave; c&ograve;n l&agrave; đỉnh cao của chất lượng quốc tế. Sự chắt lọc v&agrave; tinh tế từ nguồn gốc sản xuất l&agrave;m nổi bật thương hiệu trong thị trường thời trang.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&nbsp;</p>"),
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'id' => 5,
                'brand_id' => 1,
                'product_name' => 'Áo Sơ Mi Vải Jersey Dáng Rộng Dài Tay',
                'product_slug' => 'ao-so-mi-vai-jersey-dang-rong-dai-tay',
                'product_price' => 512000,
                'product_quantity' => 71,
                'product_image' => 'products/product-default-5.jpg',
                'detail' => 'Một phong cách công sở đích thực. Kiểu dáng vừa vặn thoải mái tạo nên một lớp mặc dễ dàng.',
                'description' => htmlspecialchars("<p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Chất Liệu Bền Bỉ v&agrave; Bảo Vệ M&ocirc;i Trường</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>60% Polyeste, 36% B&ocirc;ng, 4% Elastan: Sự H&agrave;i H&ograve;a Giữa Hiệu Suất v&agrave; Bảo Vệ M&ocirc;i Trường</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Sự kết hợp độc đ&aacute;o của 60% Polyeste, 36% B&ocirc;ng, v&agrave; 4% Elastan trong sản phẩm kh&ocirc;ng chỉ mang lại độ bền v&agrave; hiệu suất cao m&agrave; c&ograve;n l&agrave; sự cam kết đối với m&ocirc;i trường, với 30% sử dụng sợi Polyeste t&aacute;i chế.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Chăm S&oacute;c Dễ D&agrave;ng</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Hướng Dẫn Giặt Chi Tiết: Bảo Quản Chất Lượng, K&iacute;ch Th&iacute;ch T&iacute;nh Th&acirc;n Thiện M&ocirc;i Trường</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Chăm s&oacute;c sản phẩm dễ d&agrave;ng với hướng dẫn giặt m&aacute;y nước lạnh, giặt kh&ocirc;, v&agrave; kh&ocirc;ng sấy kh&ocirc;. Những biện ph&aacute;p n&agrave;y kh&ocirc;ng chỉ giữ cho sản phẩm lu&ocirc;n mới mẻ m&agrave; c&ograve;n bảo vệ m&ocirc;i trường.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Đa Dạng v&agrave; Tận T&acirc;m</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Sự Đa Dạng trong M&agrave;u Sắc: H&igrave;nh Ảnh Sản Phẩm Mang Đến Sự Hiểu Biết Thấu Đ&aacute;o</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Lưu &yacute; rằng những h&igrave;nh ảnh sản phẩm c&oacute; thể bao gồm những m&agrave;u kh&ocirc;ng c&oacute; sẵn, gi&uacute;p kh&aacute;ch h&agrave;ng hiểu r&otilde; hơn về sự đa dạng v&agrave; t&iacute;nh thực tế của sản phẩm. Ch&uacute;ng t&ocirc;i cam kết mang đến sự h&agrave;i l&ograve;ng v&agrave; đ&aacute;p ứng đa dạng nhu cầu của kh&aacute;ch h&agrave;ng.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&nbsp;</p>"),
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_name' => 'Áo Tay Ngắn Thể Thao Nam Nike Df Uv Hyverse Ss',
                'product_slug' => 'ao-tay-ngan-the-thao-nam-nike-df-uv-hyverse-ss',
                'product_price' => 702000,
                'product_quantity' => 171,
                'product_image' => 'products/product-default-6.jpg',
                'detail' => 'Phù hợp để chạy bộ, tập luyện và yoga. Thiết kế logo Swoosh ở phía trái ngực',
                'description' => htmlspecialchars("<p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Sẵn S&agrave;ng Cho Mọi Th&aacute;ch Thức: &Aacute;o Thun Nam Nike DF UV HYVERSE SS</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Chinh Phục Mọi Mục Ti&ecirc;u Tập Luyện với &Aacute;o Thể Thao Nike</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&Aacute;o thun nam Nike DF UV HYVERSE SS l&agrave; sự lựa chọn ho&agrave;n hảo cho những buổi tập luyện, mang lại cảm gi&aacute;c mềm mại v&agrave; thoải m&aacute;i, gi&uacute;p bạn vượt qua mọi th&aacute;ch thức tập luyện.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Hiệu Quả Vượt Trội: C&ocirc;ng Nghệ Nike Dri-FIT</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Cảm Gi&aacute;c Kh&ocirc; R&aacute;o v&agrave; Thoải M&aacute;i Hơn với C&ocirc;ng Nghệ Thấm H&uacute;t Mồ H&ocirc;i Nike Dri-FIT</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Với c&ocirc;ng nghệ Nike Dri-FIT, &aacute;o thun nhanh ch&oacute;ng thấm h&uacute;t mồ h&ocirc;i v&agrave; kh&ocirc; nhanh hơn, mang lại cảm gi&aacute;c kh&ocirc; r&aacute;o v&agrave; thoải m&aacute;i trong mọi hoạt động tập luyện.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Bảo Vệ Da Tối Đa</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Chống Nắng v&agrave; Bảo Vệ: Sự An To&agrave;n Cho Bạn Trong Mọi Loại &Aacute;nh Nắng</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&Aacute;o thun nam Nike DF UV HYVERSE SS kh&ocirc;ng chỉ mềm mại m&agrave; c&ograve;n c&oacute; khả năng chống nắng UVA v&agrave; UVB, bảo vệ da khỏi t&aacute;c động c&oacute; hại của tia UV mặt trời.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Chất Liệu Cao Cấp v&agrave; Đường May Tinh Tế</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Dệt Mịn, Cảm Gi&aacute;c Mềm Mại: Chất Lượng Đỉnh Cao từ Nike</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Chất liệu dệt mịn v&agrave; mềm mại của &aacute;o thun Nike DF UV HYVERSE SS kh&ocirc;ng chỉ tạo n&ecirc;n sự thoải m&aacute;i m&agrave; c&ograve;n l&agrave;m nổi bật đẳng cấp v&agrave; chất lượng của thương hiệu.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Thiết Kế Đa Năng Cho Mọi Hoạt Động</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&Aacute;o Thun Đa Năng: Ph&ugrave; Hợp với Mọi B&agrave;i Tập Thể Thao</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Với thiết kế đa năng, &aacute;o thun n&agrave;y kh&ocirc;ng chỉ ph&ugrave; hợp với chạy bộ v&agrave; tập gym m&agrave; c&ograve;n l&agrave; sự lựa chọn ho&agrave;n hảo cho những buổi tập yoga, mang lại sự linh hoạt v&agrave; thoải m&aacute;i tối đa trong mọi hoạt động.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&nbsp;</p>"),
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'id' => 7,
                'brand_id' => 2,
                'product_name' => 'Áo Tay Ngắn Thời Trang Nam Nike Jumpman Df Ss Crew',
                'product_slug' => 'ao-tay-ngan-thoi-trang-nam-nike-jumpman-df-ss-crew',
                'product_price' => 550000,
                'product_quantity' => 11,
                'product_image' => 'products/product-default-7.jpg',
                'detail' => 'Kiểu dáng tiêu chuẩn. Cổ áo bo chun',
                'description' => htmlspecialchars("<p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Đỉnh Cao Thời Trang Nam: &Aacute;o Tay Ngắn Nike Jumpman DF SS Crew</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>C&ocirc;ng Nghệ v&agrave; Phong C&aacute;ch Đ&iacute;ch Thực H&oacute;a: Sự Cải Tiến Mạnh Mẽ của Nike</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&Aacute;o thun nam Nike Jumpman DF SS Crew kh&ocirc;ng chỉ l&agrave; một phi&ecirc;n bản cải tiến từ truyền thống m&agrave; c&ograve;n đại diện cho sự đột ph&aacute; trong thời trang nam, kết hợp hiệu suất v&agrave; phong c&aacute;ch.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Nhẹ Nh&agrave;ng v&agrave; Thoải M&aacute;i</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&Aacute;o Thun Nhẹ Nh&agrave;ng: Cảm Gi&aacute;c Mềm Mại Cho Mọi Hoạt Động</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Với trọng lượng nhẹ v&agrave; chất liệu mềm mại, &aacute;o thun n&agrave;y l&agrave; sự lựa chọn ho&agrave;n hảo để bạn cảm nhận sự thoải m&aacute;i tối đa cả trong những buổi tập luyện v&agrave; sinh hoạt h&agrave;ng ng&agrave;y.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Sự Đổi Mới Từ C&ocirc;ng Nghệ Thấm H&uacute;t Mồ H&ocirc;i</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Kh&ocirc; R&aacute;o Suốt Ng&agrave;y: C&ocirc;ng Nghệ Thấm H&uacute;t Mồ H&ocirc;i Ti&ecirc;n Tiến</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Cải tiến với c&ocirc;ng nghệ thấm h&uacute;t mồ h&ocirc;i, &aacute;o thun Nike Jumpman DF SS Crew gi&uacute;p bạn lu&ocirc;n kh&ocirc; r&aacute;o, tạo điều kiện tốt nhất cho mọi hoạt động v&agrave; duy tr&igrave; phong độ tốt nhất.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Phối Hợp Phong C&aacute;ch v&agrave; Hiệu Suất</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Hiệu Suất Đỉnh Cao, Phong C&aacute;ch Đẳng Cấp: Jumpman DF SS Crew của Nike</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Với sự kết hợp tinh tế giữa hiệu suất v&agrave; phong c&aacute;ch, &aacute;o thun n&agrave;y kh&ocirc;ng chỉ l&agrave; trang phục tập luyện m&agrave; c&ograve;n l&agrave; biểu tượng thời trang đẳng cấp.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Tận Hưởng Mọi Hoạt Động</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Sinh Hoạt H&agrave;ng Ng&agrave;y: Sự Thoải M&aacute;i Cho Mọi Khoảnh Khắc</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Với &aacute;o thun Nike Jumpman DF SS Crew, bạn sẽ kh&ocirc;ng chỉ tự tin trong mọi b&agrave;i tập m&agrave; c&ograve;n thoải m&aacute;i v&agrave; phong độ trong mọi hoạt động h&agrave;ng ng&agrave;y của m&igrave;nh.</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&nbsp;</p>"),
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'id' => 8,
                'brand_id' => 2,
                'product_name' => 'ÁO NIKE WOMEN’S SPORTSWEAR FAUX FUR JACKET ‘BLACK’',
                'product_slug' => 'ao-nike-womens-sportswear-faux-fur-jacket-black',
                'product_price' => 6550000,
                'product_quantity' => 7,
                'product_image' => 'products/product-default-8.jpg',
                'detail' => 'Mua Áo Nike Women’s Sportswear Faux Fur Jacket ‘Black’ CU6559-010 chính hãng 100% có sẵn tại Jordan 1.',
                'description' => htmlspecialchars("<p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Phong C&aacute;ch Ho&agrave;n Hảo: &Aacute;o Nike Women&rsquo;s Sportswear Faux Fur Jacket &apos;Black&apos; CU6559-010</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Chắc Chắn Ch&iacute;nh H&atilde;ng: Đặt Mua Ngay Tại Jordan 1 - Giao H&agrave;ng Miễn Ph&iacute; trong 1 Ng&agrave;y!</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Cam Kết Chất Lượng</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Ch&iacute;nh H&atilde;ng 100%: &Aacute;o Nike Women&rsquo;s Sportswear Faux Fur Jacket &apos;Black&apos; - Cam Kết Đền Tiền X5 Nếu Ph&aacute;t Hiện Fake!</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Đổi Trả Thuận Lợi</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Đổi Trả Miễn Ph&iacute; Size: Sự Linh Hoạt Cho Sự H&agrave;i L&ograve;ng Của Bạn!</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Dịch Vụ Hậu M&atilde;i Tận T&acirc;m</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>FREE Vệ Sinh Gi&agrave;y Trọn Đời: Jordan 1 - Đảm Bảo Đ&ocirc;i Gi&agrave;y Lu&ocirc;n Sạch Sẽ v&agrave; Ho&agrave;n Hảo!</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Mua Ngay - Nhanh Ch&oacute;ng v&agrave; An To&agrave;n</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Mua &Aacute;o Nike Women&rsquo;s Sportswear Faux Fur Jacket &apos;Black&apos; Tại Jordan 1 - Uy T&iacute;n Đồng H&agrave;nh, H&agrave;i L&ograve;ng Đảm Bảo!</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&nbsp;</p>"),
                'status' => 1,
                'created_by' => 1,
            ],
            [
                'id' => 9,
                'brand_id' => 2,
                'product_name' => 'ÁO THUN NIKE EXPLORATION',
                'product_slug' => 'ao-thun-nike-exploration',
                'product_price' => 950000,
                'product_quantity' => 9,
                'product_image' => 'products/product-default-9.jpg',
                'detail' => 'Phối màu: Yellow. Chính hãng.',
                'description' => htmlspecialchars("<p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'><strong>Kh&aacute;m Ph&aacute; Phong C&aacute;ch với &Aacute;o Thun Nike Exploration CD1305-739</strong></p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>Phối M&agrave;u Độc Đ&aacute;o: &Aacute;o Thun Nike Exploration - M&atilde; Code CD1305-739, M&agrave;u Sắc Nổi Bật Yellow. Chắc Chắn Ch&iacute;nh H&atilde;ng!</p><p style='margin-top:6.0pt;margin-right:8.5pt;margin-bottom:.0001pt;margin-left:53.85pt;text-indent:0cm;font-size:15px;font-family:'Arial',sans-serif;'>&nbsp;</p>"),
                'status' => 1,
                'created_by' => 1,
            ],
        ];

        foreach ($product_seed as $product) {
            \Modules\Product\Models\Product::create($product);
        }

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
