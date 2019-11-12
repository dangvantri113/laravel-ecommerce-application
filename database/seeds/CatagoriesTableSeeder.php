<?php

use Illuminate\Database\Seeder;

class CatagoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
            [
                ["name" => "Thời Trang",
                    "image" => "thoi-trang.jpg",
                    "list-lv2" => [
                        ["name" => "Áo",
                            "image" => "ao.jpg",
                        ],
                        ["name" => "Quần",
                            "image" => "quan.jpg"],
                        ["name" => "Trang phục thể thao",
                            "image" => "trangphuc-thethao.jpg"],
                        ["name" => "Giày & Dép", "image" => "giaydep.jpg"],
                        ["name" => "Phụ kiện thời trang", "image" => "phukien-thoitrang.jpg"],
                        ["name" => "Khác", "image" => null],
                    ]
                ],
                ["name" => "Sức khỏe & Sắc đẹp",
                    "image" => "suckhoe-sacdep.jpg",
                    "list-lv2" => [
                        ["name" => "Mỹ phẩm", "image" => "mypham.jpg"],
                        ["name" => "Thực phảm chức năng", "image" => "thucpham-chucnang.jpg"],
                        ["name" => "Dụng cụ trang điểm", "image" => "dungcu-trangdiem.jpg"],
                        ["name" => "Trang sức", "image" => "trangsuc.jpg"], ["name" => "Khác", "image" => null]
                    ]
                ],
                [
                    "name" => "Mẹ & Bé",
                    "image" => "me-be.jpg",
                    "list-lv2" => [
                        ["name" => "Thời trang cho trẻ", "image" => "thoitrang-chotre.jpg"],
                        ["name" => "Thời trang cho mẹ", "image" => "thoitrang-chome.jpg"],
                        ["name" => "Đồ chơi cho trẻ", "image" => "dochoi-chotre"],
                        ["name" => "Khác", "image" => null]
                    ]
                ],
                [
                    "name" => "TV & Máy tính & điện thoại",
                    "image" => "laptop-phone.jpg",
                    "list-lv2" => [["name" => "TV", "image" => "tv.jpg"],
                        ["name" => "Máy tính & laptop", "image" => "maytinh.jpg"],
                        ["name" => "Điện thoại", "image" => "dienthoai.jpg"],
                        ["name" => "Thiết bị lưu trữ", "image" => "thietbi-luutru.jpg"],
                        ["name" => "Phụ kiện máy tính", "image" => "phukien-maytinh.jpg"], ["name" => "Khác", "image" => null]

                    ]
                ],
                [
                    "name" => "Đồ gia dụng",
                    "image" => "dogiadung.jpg",
                    "list-lv2" => [
                        ["name" => "Quạt và máy lạnh", "image" => "quat-maylanh.jpg"],
                        ["name" => "Bình nước nóng lạnh", "image" => "binhnuoc-nonglanh.jpg"],
                        ["name" => "Đèn", "image" => "den.jpg"],
                        ["name" => "Đồ bếp", "image" => "dobep.jpg"],
                        ["name" => "Tủ lạnh", "image" => "tulanh.jpg"],
                        ["name" => "Khác", "image" => null]
                    ]
                ],
                [
                    "name" => "Ô tô - xe máy - xe đạp",
                    "image" => "xe.jpg",
                    "list-lv2" => [
                        ["name" => "Ô tô", "image" => "oto.jpg"],
                        ["name" => "Xe máy", "image" => "xemay.jpg"],
                        ["name" => "Xe đạp", "image" => "xedap.jpg"],
                        ["name" => "Phụ tùng", "image" => "phutung.jpg"],
                        ["name" => "Khác", "image" => null]
                    ]
                ]
            ];

        $lv1Index = 0;
        foreach ($data as $key1 => $dataLv1) {
            DB::table('catagories_lv1')->insert([
                "name" => $dataLv1["name"],
                "image" => $dataLv1["image"],
            ]);
            $lv1Index++;
            foreach ($dataLv1["list-lv2"] as $key2 => $dataLv2) {
                DB::table('catagories_lv2')->insert([
                    "catagories_lv1_id" => $lv1Index,
                    "name" => $dataLv2["name"],
                    "image" => $dataLv2["image"],
                ]);
            }
        }
    }
}
