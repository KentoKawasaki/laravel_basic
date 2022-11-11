<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_shop', function (Blueprint $table) {
            $table->foreignId('route_id')->constrained();
            $table->foreignId('shop_id')->constrained();

            $table->primary(['route_id', 'shop_id']); // プライマリキーの設定
            // テーブルには必ずプライマリキーが必要
            // idを削除する場合は別で指定
            // 複数キーも設定可能
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('route_shop');
    }
};
