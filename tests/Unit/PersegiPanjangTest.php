<?php

namespace Naufal\BangunRuang\Tests;

use Naufal\BangunRuang\Tests\TestCase;
use Naufal\BangunRuang\Facades\PersegiPanjang;

class PersegiPanjangTest extends TestCase
{
    public function testHitungLuas()
    {
        $panjang = 10;
        $lebar = 5;

        $hasil = PersegiPanjang::hitungLuas($panjang, $lebar);

        $this->assertEquals($hasil, 50);
    }

    public function testHitungKeliling()
    {
        $panjang = 3;
        $lebar = 2;

        $hasil = PersegiPanjang::hitungKeliling($panjang, $lebar);

        $this->assertEquals($hasil, 10);
    }
}