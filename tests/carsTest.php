<?php

use PHPUnit\Framework\TestCase;

class CarsTest extends TestCase
{
    public function testCarsPageLoads()
    {
        // Start output buffering
        ob_start();

        // Jalankan file cars.php
        include __DIR__ . '/../admin/cars.php';

        // Ambil hasil output HTML
        $output = ob_get_clean();

        // Cek apakah judul halaman "Mobil" muncul
        $this->assertStringContainsString('Mobil', $output);

        // Cek apakah tabel muncul
        $this->assertStringContainsString('<table', $output);
    }
}
