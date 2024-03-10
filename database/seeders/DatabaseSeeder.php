<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin cp 1',
            'email' => 'admin@gmail.com',
            'role' => 0,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);
        \App\Models\Setting::factory()->create([
            'site_logo' => ''
        ]);

        \App\Models\Category::factory()->create([
            'title' => 'Nữ',
            'slug' => 'women',
            'type' => 'Menu',
            'show_index' => 1,
            ]);
        \App\Models\Category::factory()->create(
            [
            'title' => 'Nam',
            'slug' => 'man',
            'type' => 'Menu',
            'show_index' => 1,
            ]
        );
        \App\Models\Category::factory()->create(
            [
            'title' => 'Trẻ em',
            'slug' => 'children',
            'type' => 'Menu',
            'show_index' => 1,
            ]
        );
        \App\Models\Category::factory()->create(
            [
            'title' => 'Combo',
            'slug' => 'combo',
            'type' => 'Menu',
            ]
        );
        \App\Models\Category::factory()->create(
            [
            'title' => 'EFIDA',
            'slug' => 'EFIDA',
            'type' => 'MenuPost',
            ]
        );
        \App\Models\Category::factory()->create(
            [
            'title' => 'Tư vấn thời trang',
            'slug' => 'tu-van-thoi-trang',
            'type' => 'MenuPost',
            ]
        );
        \App\Models\Category::factory()->create(
            [
            'title' => 'Giới thiệu công ty',
            'slug' => 'gioi-thieu-cong-ty',
            'type' => 'post',
            ]
        );
        \App\Models\Index::factory()->create(
            [
            'title' => 'index_pos1',
            'photo' => null,
            'url' => '',
            ]
        );
        \App\Models\Index::factory()->create(
            [
            'title' => 'index_pos2',
            'photo' => null,
            'url' => '',
            ]
        );
        \App\Models\Index::factory()->create(
            [
            'title' => 'index_pos3',
            'photo' => null,
            'url' => '',
            ]
        );
        \App\Models\Index::factory()->create(
            [
            'title' => 'index_pos4',
            'photo' => null,
            'url' => '',
            ]
        );
        \App\Models\Index::factory()->create(
            [
            'title' => 'index_pos5',
            'photo' => null,
            'url' => '',
            ]
        );
        \App\Models\Index::factory()->create(
            [
            'title' => 'index_pos6',
            'photo' => null,
            'url' => '',
            ]
        );
        \App\Models\Index::factory()->create(
            [
            'title' => 'index_pos7',
            'photo' => null,
            'url' => '',
            ]
        );
        \App\Models\Index::factory()->create(
            [
            'title' => 'top_blog_slide',
            'photo' => null,
            'url' => '',
            ]
        );
        \App\Models\Index::factory()->create(
            [
            'title' => 'right_blog_slide',
            'photo' => null,
            'url' => '',
            ]
        );
        \App\Models\Post::factory()->create(
            [
            'title' => 'About us',
            'slug' => 'about-us',
            'type' => 'page',
            'content' => ''
            ]
        );
        \App\Models\Post::factory()->create(
            [
            'title' => 'FAQS - Hỏi đáp',
            'slug' => 'faqs-hoi-dap',
            'type' => 'page',
            'content' => ''
            ]
        );
        \App\Models\Post::factory()->create(
            [
            'title' => 'Vận chuyển',
            'slug' => 'chinh-sach-van-chuyen',
            'type' => 'page',
            'content' => ''
            ]
        );
        \App\Models\Post::factory()->create(
            [
            'title' => 'Hướng dẫn thanh toán',
            'slug' => 'huong-dan-thanh-toan',
            'type' => 'page',
            'content' => ''
            ]
        );
        \App\Models\Post::factory()->create(
            [
            'title' => 'Hướng dẫn chọn size',
            'slug' => 'huong-dan-chon-size',
            'type' => 'page',
            'content' => ''
            ]
        );
        \App\Models\Post::factory()->create(
            [
            'title' => 'Hướng dẫn mua online',
            'slug' => 'huong-dan-mua-hang-online',
            'type' => 'page',
            'content' => ''
            ]
        );
        \App\Models\Post::factory()->create(
            [
            'title' => 'Tình trạng đơn hàng',
            'slug' => 'huong-dan-kiem-tra-tinh-trang-don-hang',
            'type' => 'page',
            'content' => ''
            ]
        );
        \App\Models\Post::factory()->create(
            [
            'title' => 'Chính sách bảo mật',
            'slug' => 'chinh-sach-bao-mat',
            'type' => 'page',
            'content' => ''
            ]
        );
        \App\Models\Post::factory()->create(
            [
            'title' => 'Chính sách đổi trả',
            'slug' => 'chinh-sach-doi-tra',
            'type' => 'page',
            'content' => ''
            ]
        );
        \App\Models\Post::factory()->create(
            [
            'title' => 'Liên hệ',
            'slug' => 'lien-he',
            'type' => 'page',
            'content' => ''
            ]
        );
        \App\Models\Setting2::factory()->create(
            [
            'title' => 'Coupon',
            'description' => ''
            ]
        );
        \App\Models\Setting2::factory()->create(
            [
            'title' => 'mail_resign',
            'title2' => ''
            ]
        );
        \App\Models\Setting2::factory()->create(
            [
            'title' => 'mail_unresign',
            'title2' => ''
            ]
        );
        \App\Models\Setting2::factory()->create(
            [
            'title' => 'send_mail_user',
            'title2' => ''
            ]
        );
    }
}
