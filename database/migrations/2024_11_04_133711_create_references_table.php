<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ref_instance', function (Blueprint $table) {
            $table->id();
            $table->integer('semesta_id')->nullable()->default(0);
            $table->integer('sicaram_id')->nullable()->default(0);
            $table->text('name')->nullable();
            $table->text('alias')->nullable();
            $table->string('type')->nullable();
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('kecamatan_id')->nullable();
            $table->string('nomenklatur_code')->nullable();
            $table->text('logo')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->text('instagram')->nullable();
            $table->text('twitter')->nullable();
            $table->text('facebook')->nullable();
            $table->text('fax')->nullable();
            $table->text('kode_pos')->nullable();
            $table->text('website')->nullable();
            $table->text('longitude')->nullable();
            $table->text('latitude')->nullable();
            $table->text('radius')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('ref_unit_kerja', function (Blueprint $table) {
            $table->id();
            $table->integer('semesta_id')->nullable()->default(0);
            $table->integer('sicaram_id')->nullable()->default(0);
            $table->integer('instance_id')->nullable()->default(0);
            $table->integer('parent_id')->nullable()->default(0);
            $table->integer('level')->nullable()->default(0);
            $table->text('name')->nullable()->default(0);
            $table->text('keterangan')->nullable()->default(0);
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('ref_jabatan', function (Blueprint $table) {
            $table->id();
            $table->integer('semesta_id')->nullable()->default(0);
            $table->integer('sicaram_id')->nullable()->default(0);
            $table->integer('instance_id')->nullable();
            $table->integer('unit_kerja_id')->nullable();
            $table->text('name')->nullable();
            $table->text('type')->nullable();
            $table->integer('grade')->nullable();
            $table->text('tpp')->nullable();
            $table->text('tugas_jabatan')->nullable();
            $table->text('fungsi_jabatan')->nullable();
            $table->text('longitude')->nullable();
            $table->text('latitude')->nullable();
            $table->text('beban_kerja')->nullable();
            $table->text('kondisi_kerja')->nullable();
            $table->text('kelangkaan_profesi')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ref_instance');
        Schema::dropIfExists('ref_unit_kerja');
        Schema::dropIfExists('ref_jabatan');
    }
};
