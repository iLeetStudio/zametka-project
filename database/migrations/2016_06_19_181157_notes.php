<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Notes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');               // ID записи
            $table->string('title');                // Заголовок
            $table->string('text');                 // Текст
            $table->string('password');             // Пароль заметки
            $table->string('url');                  // Адрес заметки (site.ru/XXX)  
            $table->integer('finish_date');         // Дата, когда запись будет доступна
            $table->integer('delete_date');         // Дата, когда запись будет удалена
            $table->boolean('note_type');           // Тип заметки: Приватная, Публичная
            $table->boolean('background_color');    // Цвет фона заметки
            $table->string('uid');                  // ID пользователя или IP
            $table->timestamps();                   // Дата создания записи
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
