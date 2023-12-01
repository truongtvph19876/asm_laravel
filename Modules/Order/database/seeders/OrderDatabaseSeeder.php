<?php

namespace Modules\Order\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Order\Entities\OrderStatus;
use Modules\Order\Entities\PaymentMethod;
use Modules\Tag\Models\Order;

class OrderDatabaseSeeder extends Seeder
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
         * Orders Seed
         * ------------------
         */
        /*
         *
         * Order Status Seed
         * ------------------
         */
        $order_status = [
            [
                'id' => '1',
                'status' => 'Yêu cầu hủy đơn hàng'
            ],
            [
                'id' => '2',
                'status' => 'Chờ xác nhận'
            ],
            [
                'id' => '3',
                'status' => 'Đã xác nhận'
            ],
            [
                'id' => '4',
                'status' => 'Đang giao hàng'
            ],
            [
                'id' => '5',
                'status' => 'Giao hàng thành công'
            ],
            [
                'id' => '6',
                'status' => 'Giao hàng thất bại'
            ],
            [
                'id' => '7',
                'status' => 'Đơn hàng đã được hủy'
            ],
        ];

        foreach ($order_status as $status) {
            OrderStatus::create($status);
        }

        /*
         *
         * Payment method Seed
         * ------------------
         */

        $payment_method = [
            [
                'id' => '1',
                'payment_name' => 'Thanh toán khi nhận hàng'
            ],
            [
                'id' => '2',
                'payment_name' => 'Thanh toán qua VNPay'
            ]
        ];

        foreach ($payment_method as $item) {
            PaymentMethod::create($item);
        }

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
