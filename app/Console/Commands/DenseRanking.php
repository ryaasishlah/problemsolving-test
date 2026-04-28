<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('ranking:dense {scores*}')]
#[Description('Menampilkan ranking GITS berdasarkan sistem dense ranking')]
class DenseRanking extends Command
{
    public function handle()
    {
        $ranked = [100, 100, 50, 40, 40, 20, 10];

        $player = array_map('intval', $this->argument('scores'));

        $result = $this->denseRanking($ranked, $player);

        $this->info(implode(' ', $result));
    }

    private function denseRanking(array $ranked, array $player): array
    {
        $unique = array_values(array_unique($ranked));

        $result = [];

        foreach ($player as $score) {
            $i = count($unique) - 1;

            while ($i >= 0 && $score >= $unique[$i]) {
                $i--;
            }

            $result[] = $i + 2;
        }

        return $result;
    }
}
