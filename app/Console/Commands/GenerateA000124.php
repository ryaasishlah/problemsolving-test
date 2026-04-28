<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('sequence:a000124 {n}')]
#[Description('Menampilkan deret angka A000124 sesuai jumlah input')]
class GenerateA000124 extends Command
{
    public function handle()
    {
        $n = (int) $this->argument('n');

        if ($n <= 0) {
            $this->error('Input harus lebih dari 0');
            return;
        }

        $sequence = $this->generateA000124($n);

        $this->info(implode('-', $sequence));
    }

    private function generateA000124(int $n): array
    {
        $result = [];
        $current = 1;

        for ($i = 0; $i < $n; $i++) {
            $result[] = $current;
            $current += ($i + 1);
        }

        return $result;
    }
}
